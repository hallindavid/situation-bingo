<?php

namespace App\Livewire;

use App\Facades\SituationHelper;
use Livewire\Component;
use App\Models\Card;
use Illuminate\Contracts\View\View;

class ViewCard extends Component
{
    /**
     * The UUID of the card to view.
     */
    public string $cardUuid;

    /**
     * The Card model instance.
     */
    public Card $card;

    /**
     * A 5x5 grid of situation titles (including free space).
     *
     * @var string[]
     */
    /**
     * The grid of cells: each ['label' => string, 'marked' => bool].
     *
     * @var array<int, array{label:string,marked:bool}>
     */
    public array $grid = [];
    /**
     * Currently selected cell position (1-25) for modal display.
     *
     * @var int|null
     */
    public ?int $selectedPosition = null;
    /**
     * Name of the selected situation for display in modal.
     *
     * @var string
     */
    public string $selectedSituationName = '';
    /**
     * List of occurrences for the selected situation.
     * Each item: ['reported_at' => string, 'reporter_name' => string].
     *
     * @var array<int, array{reported_at:string,reporter_name:string}>
     */
    public array $selectedOccurrences = [];

    /**
     * Mount the component with the given card UUID and prepare the grid.
     */
    public function mount(string $cardUuid): void
    {
        $this->cardUuid = $cardUuid;
        // Load card with situation and occurrence data
        $this->card = Card::with(['cardSituations.situation', 'cardSituations.situation_occurrence'])
            ->findOrFail($this->cardUuid);

        // Map situations by position
        $map = $this->card->cardSituations->keyBy('card_position');
        // Build 5x5 grid, skipping position 13 (free space)
        for ($i = 1; $i <= 25; $i++) {
            if ($i === 13) {
                $this->grid[] = [
                    'label' => 'Free Space',
                    'marked' => true,
                ];
                continue;
            }
            $cs = $map->get($i);
            $label = $cs?->situation->name ?? '';
            $marked = $cs?->situation_occurrence_uuid !== null;
            $this->grid[] = [
                'label' => $label,
                'marked' => $marked,
            ];
        }
    }
    /**
     * Open the modal for the given cell position.
     */
    public function openModal(int $position): void
    {
        if ($position === 13) {
            return;
        }
        $map = $this->card->cardSituations->keyBy('card_position');
        $cs = $map->get($position);
        if (! $cs || ! $cs->situation) {
            return;
        }
        $this->selectedPosition = $position;
        $this->selectedSituationName = $cs->situation->name;
        $occurrences = $cs->situation->occurrences()
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->get();
        $this->selectedOccurrences = $occurrences->map(function ($o) {
            return [
                'reported_at'   => $o->created_at->format('Y-m-d H:i'),
                'reporter_name' => $o->user?->name ?? 'Unknown',
            ];
        })->toArray();
    }
    /**
     * Record a new occurrence for the selected situation and update the card state.
     */
    public function reportOccurrence(): void
    {
        if (is_null($this->selectedPosition)) {
            return;
        }
        $map = $this->card->cardSituations->keyBy('card_position');
        $cs = $map->get($this->selectedPosition);
        if (! $cs || ! $cs->situation) {
            return;
        }
        // Use helper to record the occurrence (creates record, updates card_situations & bingo)
        SituationHelper::recordOccurrence($cs->situation);
        // mark cell as marked and reload occurrences
        $index = $this->selectedPosition - 1;
        $this->grid[$index]['marked'] = true;
        $this->openModal($this->selectedPosition);
    }

    public function render(): View
    {
        return view('livewire.view-card');
    }
}
