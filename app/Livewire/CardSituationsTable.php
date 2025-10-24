<?php

namespace App\Livewire;

use App\Models\CardSituation;
use App\Models\Card;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\TableComponent;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\View\View;

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
            ->query(fn () => CardSituation::query()
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
            ->recordActions([
                EditAction::make()
                    ->label('Edit')
                    ->icon('heroicon-o-pencil')
                    ->form([
                        Select::make('situation_uuid')
                            ->label('Situation')
                            ->relationship('situation', 'name')
                            ->required()
                            ->unique(
                                table: null,
                                column: 'situation_uuid',
                                ignorable: null,
                                ignoreRecord: true,
                                modifyRuleUsing: fn ($rule) => $rule->where('card_uuid', $this->cardUuid),
                            ),
                    ]),
            ]);
    }

    /**
     * Render the Livewire component view.
     */
    public function render(): View
    {
        return view('livewire.simple-table');
    }
}
