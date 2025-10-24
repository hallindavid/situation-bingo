<?php

namespace App\Livewire;

use App\Facades\CardHelper;
use App\Models\Card;
use App\Models\CardSituation;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\TableComponent;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class CardSituationsTable extends TableComponent
{
    /**
     * The UUID of the card to display situations for.
     */
    public string $cardUuid;

    /**
     * Mount the component with the given card UUID.
     */
    public function mount(string $cardUuid): void
    {
        $card = Card::findOrFail($cardUuid);
        Gate::authorize('update', $card);
        $this->cardUuid = $cardUuid;
    }

    /**
     * Configure the table for displaying card situations.
     */
    public function table(Table $table): Table
    {
        return $table
            ->defaultPaginationPageOption(50)
            ->query(fn() => CardSituation::query()->orderBy('card_position', 'ASC')
                ->where('card_uuid', $this->cardUuid)
            )
            ->columns([
                TextColumn::make('card_position')
                    ->label('Position')
                    ->sortable(),
                TextColumn::make('situation.name')
                    ->label('Situation')
                    ->searchable(),
            ])
            ->headerActions([
                Action::make('resetCard')
                    ->label('Reset Card')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->action(fn() => $this->resetCard()),
                Action::make('generateSituations')
                    ->label('Generate Situations')
                    ->color('success')
                    ->requiresConfirmation()
                    ->action(fn() => $this->generateSituations()),
            ])
            ->recordActions([
                EditAction::make()
                    ->label('Edit')
                    ->icon('heroicon-o-pencil')
                    ->schema([
                        Select::make('situation_uuid')
                            ->label('Situation')
                            ->relationship('situation', 'name')
                            ->required()
                            ->unique(
                                table: null,
                                column: 'situation_uuid',
                                ignorable: null,
                                ignoreRecord: true,
                                modifyRuleUsing: fn($rule) => $rule->where('card_uuid', $this->cardUuid),
                            ),
                    ]),
            ])
            ->reorderable('card_position');
    }

    /**
     * Render the Livewire component view.
     */
    /**
     * Handle reordering of card situations, skipping position 13.
     *
     * @param array<int|string> $order
     */
    public function reorderTable(array $order, int|string|null $draggedRecordKey = null): void
    {
        // Build the list of valid positions (1-25, skipping 13)
        $positions = collect(range(1, 25))->filter(fn($n) => $n !== 13)->values();

        // Construct SQL CASE expression to set card_position based on uuid
        $cases = array();
        $uuids = array();
        foreach ($order as $index => $uuid) {
            $uuids[] = $uuid;
            $cases[] = "WHEN '{$uuid}' THEN {$positions[$index]}";
        }

        $caseStatement = implode(' ', $cases);

        DB::table('card_situations')
            ->where('card_uuid', $this->cardUuid)
            ->whereIn('uuid', $uuids)
            ->update([
                'card_position' => DB::raw("CASE `uuid` {$caseStatement} END"),
            ]);
    }

    /**
     * Clear all situation assignments for this card.
     */
    public function resetCard(): void
    {
        $card = Card::findOrFail($this->cardUuid);
        CardHelper::clearSituationsForCard($card);
    }

    /**
     * Generate situation assignments for this card.
     */
    public function generateSituations(): void
    {
        $card = Card::findOrFail($this->cardUuid);
        CardHelper::generateSituationsForCard($card);
    }


    public function render(): View
    {
        return view('livewire.simple-table');
    }
}
