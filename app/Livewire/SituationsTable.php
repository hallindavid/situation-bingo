<?php

namespace App\Livewire;

use App\Facades\SituationHelper;
use App\Models\Situation;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\TableComponent;
use Illuminate\Contracts\View\View;

class SituationsTable extends TableComponent
{

    /**
     * Configure the table for displaying situations.
     */
    public function table(Table $table): Table
    {
        return $table
            ->query(fn() => Situation::query())
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),
                TextColumn::make('occurrences_count')
                    ->label('Number of Occurrences')
                    ->counts('occurrences')
                    ->sortable(),
            ])
            ->headerActions([
                CreateAction::make()
                    ->label('Create Situation')
                    ->color('primary')
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->required()
                            ->unique(),
                    ]),

                Action::make('resetSituations')
                    ->visible(fn(): bool => auth()->user()->is_admin)
                    ->label('Reset Situations')
                    ->requiresConfirmation("Are you sure you want to reset all situations? This will delete all occurrences.")
                    ->action(function () {
                        SituationHelper::resetAllOccurrences();
                    })->color('danger'),
            ])
            ->recordActions([
                EditAction::make()
                    ->label('Edit')
                    ->visible(fn(): bool => auth()->user()->is_admin)
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->required()
                            ->unique(),
                    ]),
                Action::make('reportOccurrence')
                    ->label('Report Occurrence')
                    ->icon('heroicon-o-flag')
                    ->requiresConfirmation("Are you sure you want to report an occurrence for this situation?")
                    ->action(function (Situation $record) {
                        SituationHelper::recordOccurrence($record);
                    })->color('success'),
                Action::make('clearOccurrences')
                    ->label('Clear Occurrences')
                    ->visible(fn(): bool => auth()->user()->is_admin)
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation("Are you sure you want to delete all of the occurrences for this situation?")
                    ->action(function (Situation $record) {
                        $record->occurrences()->delete();
                    })->color('danger'),
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
