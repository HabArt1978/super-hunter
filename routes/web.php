<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');

    // ------- Our application -------
    Route::get('/', [WelcomeController::class, 'index'])->name('home');

    Route::get('/career', function() {
        return view('career', ['header_title' => 'Страница Карьера']);
    });

    Route::get('/salaries', function() {
        return view('salaries', ['header_title' => 'Страница Зарплаты']);
    });

    Route::get('/company', function() {
        return view('company', ['header_title' => 'Страница Компании']);
    });

    Route::get('/jobs', [JobController::class, 'index']);
    Route::get('/jobs/create', [JobController::class, 'create']);
    Route::get('/jobs/{job}', [JobController::class, 'show']);
    Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
    Route::post('/jobs', [JobController::class, 'store']);
    Route::patch('/jobs/{job}', [JobController::class, 'update']);
    Route::delete('/jobs/{job}', [JobController::class, 'destroy']);
});

require __DIR__.'/auth.php';
