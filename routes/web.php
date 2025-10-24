<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Models\Card;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::middleware(['auth'])->group(function () {
    // Display the user's bingo card; generate cards if none exist
    Route::get('dashboard', function () {
        $user = auth()->user();
        if ($user->cards()->count() === 0) {
            \App\Facades\CardHelper::generateCards();
        }
        $card = $user->cards()->first();
        return view('dashboard', ['card' => $card]);
    })->name('dashboard');

    Route::view('situations', 'situations')->name('situations');
    Route::view('cards', 'cards')->name('cards');

    Route::get('cards/{card}/edit', static function (Card $card) {
        return view('edit-card', ['card' => $card]);
    })->name('cards.edit');

    Route::get('cards/{card}', static function (Card $card) {
        return view('view-card', ['card' => $card]);
    })->name('cards.view');

    Route::view('users', 'users')->name('users');

    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';
