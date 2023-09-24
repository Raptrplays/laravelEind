<?php

use Illuminate\Support\Facades\Route;
use App\Models\Coureur;
use App\Http\Controllers\CoureurController;


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

Route::get('index', [CoureurController::class, 'index']);

Route::get('create', [CoureurController::class, 'create']);

Route::get('edit/{id}', [CoureurController::class, 'edit']);

Route::post('store', [CoureurController::class, 'store']);

Route::put('edit/update/{id}', [CoureurController::class, 'update']);

Route::get('index/{id}', [CoureurController::class, 'show']);

Route::delete('delete/{id}', [CoureurController::class, 'destroy']);



