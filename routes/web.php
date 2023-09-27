<?php

use App\Http\Controllers\IntentController;
use App\Http\Controllers\IntentParentController;
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

Route::get('/', [IntentController::class, 'index'])->name('index');
Route::get('/intent/{intent}', [IntentController::class, 'show'])->name('show');

Route::get('/parent/{parent}', [IntentParentController::class, 'show'])->name('show');
