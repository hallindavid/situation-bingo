<?php

namespace App\Livewire;

use App\Facades\SituationHelper;
use App\Models\Card;
use Illuminate\Contracts\View\View;
use Livewire\Component;

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
     * A 4x4 grid of situation titles.
     *
     * @var array<int, array{label:string,marked:bool}>
     */
    public array $grid = [];
    /**
     * All situations available for reassigning [uuid => name].
     *
     * @var array<string,string>
     */
    public array $allSituations = [];
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
     * Selected situation UUID for editing.
     *
     * @var string|null
     */
    public ?string $selectedSituationUuid = null;

    /**
     * Mount the component with the given card UUID and prepare the grid.
     */
    public function mount(string $cardUuid): void
    {
        $this->cardUuid = $cardUuid;

        // Load card with situation and occurrence data
        $this->card = Card::with(['cardSituations.situation', 'cardSituations.situation_occurrence'])
            ->findOrFail($this->cardUuid);

        // Load all situations for select dropdown
        $this->allSituations = \App\Models\Situation::orderBy('name')
            ->availableForCard($this->card)
            ->pluck('name', 'uuid')
            ->toArray();

        // Map situations by position
        $map = $this->card->cardSituations->keyBy('card_position');
        // Build 4x4 grid
        for ($i = 1; $i <= 16; $i++) {
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
        $map = $this->card->cardSituations->keyBy('card_position');
        $cs = $map->get($position);
        if (!$cs || !$cs->situation) {
            return;
        }
        $this->selectedPosition = $position;
        $this->selectedSituationName = $cs->situation->name;
        // Initialize select to current situation
        $this->selectedSituationUuid = $cs->situation_uuid;
        $occurrences = $cs->situation->occurrences()
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->get();
        $this->selectedOccurrences = $occurrences->map(function ($o) {
            return [
                'reported_at' => $o->created_at->format('Y-m-d H:i'),
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
        if (!$cs || !$cs->situation) {
            return;
        }
        // Use helper to record the occurrence (creates record, updates card_situations & bingo)
        SituationHelper::recordOccurrence($cs->situation);
        // mark cell as marked and reload occurrences
        $index = $this->selectedPosition - 1;
        $this->grid[$index]['marked'] = true;
        $this->openModal($this->selectedPosition);
    }

    /**
     * Change the situation at the selected position (only if authorized).
     */
    public function changeSituation(): void
    {
        if (is_null($this->selectedPosition) || is_null($this->selectedSituationUuid)) {
            return;
        }
        if (!auth()->user()->can('update', $this->card)) {
            return;
        }
        // Update the card_situation record
        $cs = $this->card->cardSituations()
            ->where('card_position', $this->selectedPosition)
            ->first();
        if (!$cs) {
            return;
        }
        $cs->situation_uuid = $this->selectedSituationUuid;
        $cs->situation_occurrence_uuid = null;
        $cs->save();
        // Refresh card situations and grid
        $this->card->load('cardSituations.situation');
        $map = $this->card->cardSituations->keyBy('card_position');
        $cell = $map->get($this->selectedPosition);
        $label = $cell?->situation->name ?? '';
        $index = $this->selectedPosition - 1;
        $this->grid[$index] = ['label' => $label, 'marked' => false];
        $this->selectedSituationName = $label;
        $this->selectedOccurrences = [];

        $this->allSituations = \App\Models\Situation::orderBy('name')
            ->availableForCard($this->card)
            ->pluck('name', 'uuid')
            ->toArray();
    }

    public function render(): View
    {
        return view('livewire.view-card');
    }
}
