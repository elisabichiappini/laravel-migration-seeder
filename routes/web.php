<?php

use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\TrainController;
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
// Rotta alla welcome page a cui assegno un nome 'home'
Route::get('/', [PageController::class, 'index'])->name('home');

// Rotta alla contact page
Route::get('/contacts-milano-centrale', [PageController::class, 'contacts'])->name('contacts');

// Rotta alla trains page
Route::get('/trains-puntuali-comodi-italiani', [TrainController::class, 'index'])->name('trains');