<?php

use App\Http\Controllers\EntryController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/entries/create', [EntryController::class, 'create'])->name('entries.create');

Route::get('/themes/create', [ThemeController::class, 'create'])->name('theme.create');
Route::post('/themes/store', [ThemeController::class, 'store'])->name('theme.store');

Route::get('/units/create', [UnitController::class, 'create'])->name('unit.create');
Route::post('/units/store', [UnitController::class, 'store'])->name('unit.store');

Route::get('/outcomes/create', [OutcomeController::class, 'create'])->name('outcome.create');
Route::post('/outcomes/store', [OutcomeController::class, 'store'])->name('outcome.store');




require __DIR__.'/auth.php';
