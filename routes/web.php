<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
//use App\Http\Controller\CarroController;
//use App\Http\Controller\MecancioController;
//use App\Http\Controller\ServicoController;
//use App\Http\Controller\AgendametoController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('teste', 'produtos.teste')
    ->middleware(['auth', 'verified'])
    ->name('teste');



Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::resource('clientes',ClienteController::class);
//Route::resource('carros',CarroController::class  );
//Route::resource('mecanicos',MecanicoController::class  );
//Route::resource('servicos',ServicoController::class  );
//Route::resource('agendamentos',AgendamentoController::class  );

require __DIR__.'/auth.php';
