<?php

namespace App\Livewire;

use App\Models\User;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\TableComponent;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;

class UsersTable extends TableComponent
{

    /**
     * Configure the table for displaying situations.
     */
    public function table(Table $table): Table
    {
        return $table
            ->query(fn() => User::query())
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                IconColumn::make('has_card')
                    ->label('Has Card')
                    ->exists('cards')
                    ->boolean(),
            ])
            ->headerActions([
                CreateAction::make()
                    ->label('Create User')
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required(),
                        TextInput::make('password')
                            ->label('Password')
                            ->password()
                            ->required(),
                    ])
                    ->mutateDataUsing(function (array $data): array {
                        $data['password'] = Hash::make($data['password']);
                        return $data;
                    }),
            ])
            ->recordActions([
                EditAction::make()
                    ->label('Edit')
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->required(),
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
