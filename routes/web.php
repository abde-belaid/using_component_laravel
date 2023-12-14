<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('Etudiant')->name('etudiants.')->group(function () {
    Route::get('/', [EtudiantController::class, 'index'])->name("liste");


    Route::get('/add', [EtudiantController::class, 'create'])->name('add');
    Route::post('/ValiderAdd', [EtudiantController::class, 'store'])->name('ValiderAdd');
    Route::get('/edit/{id}', [EtudiantController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [EtudiantController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [EtudiantController::class, 'delete'])->name('delete');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::fallback(function() {
    return view('notfound.notfound'); // la vue 404.blade.php
 });

require __DIR__ . '/auth.php';
