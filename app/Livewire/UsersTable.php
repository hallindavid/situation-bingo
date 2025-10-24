<?php

namespace App\Livewire;

use App\Models\User;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\TableComponent;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTable extends TableComponent
{

    /**
     * Configure the table for displaying situations.
     */
    public function table(Table $table): Table
    {
        return $table
            ->query(fn() => User::leftJoin('cards', 'users.uuid', '=', 'cards.user_uuid')->select(['users.*', 'cards.uuid as card_uuid', 'cards.bingo_at']))
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                TextColumn::make('card_uuid')
                    ->label('Card')
                    ->formatStateUsing(fn (mixed $state): string =>
                        filled($state)
                            ? '<a href="' . route('cards.view', $state) . '" class="text-blue-600 hover:underline">View Card</a>'
                            : ''
                    )
                    ->html(),
                IconColumn::make('is_admin')
                    ->label('Administrator')
                    ->boolean()
                    ->sortable(),
            ])
            ->headerActions([
                Action::make('generateCards')
                    ->label('Generate Cards')
                    ->action('generateCards'),
                CreateAction::make()
                    ->visible(fn(): bool => auth()->user()->is_admin)
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
                        Toggle::make('is_admin')
                            ->label('Administrator')
                            ->default(false),
                    ])
                    ->mutateDataUsing(function (array $data): array {
                        $data['password'] = Hash::make($data['password']);
                        return $data;
                    }),
            ])
            ->recordActions([
                EditAction::make()
                    ->visible(fn(): bool => auth()->user()->is_admin)
                    ->label('Edit')
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
                            ->nullable(),
                        Toggle::make('is_admin')
                            ->label('Administrator'),
                    ])
                    ->mutateDataUsing(function (array $data): array {
                        if (!empty($data['password'])) {
                            $data['password'] = Hash::make($data['password']);
                        } else {
                            unset($data['password']);
                        }
                        return $data;
                    }),
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
