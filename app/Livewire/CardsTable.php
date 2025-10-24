<?php

namespace App\Livewire;

use App\Facades\CardHelper;
use App\Models\Card;
use Filament\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\TableComponent;
use Illuminate\Contracts\View\View;

class CardsTable extends TableComponent
{

    /**
     * Configure the table for displaying situations.
     */
    public function table(Table $table): Table
    {
        return $table
            ->query(fn() => Card::query())
            ->defaultPaginationPageOption(50)
            ->columns([
                TextColumn::make('user.name'),
                TextColumn::make('uuid')
                    ->label('Uuid'),
            ])
            ->headerActions([
                Action::make('generateCards')
                    ->label('Generate Cards')
                    ->action('generateCards'),
            ])
            ->recordActions([
                Action::make('editCard')
                    ->label('Edit')
                    ->icon('heroicon-o-pencil')
                    ->authorize('update')
                    ->url(fn (Card $record): string => route('cards.edit', $record)),
            ]);
    }

    public function generateCards(): void
    {
        CardHelper::generateCards();
    }

    /**
     * Render the Livewire component view.
     */
    public function render(): View
    {
        return view('livewire.simple-table');
    }
}
