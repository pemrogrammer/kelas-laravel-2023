<?php

use App\Http\Controllers\Auth\MahasiswaController;
use App\Http\Controllers\LatihanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [LatihanController::class, 'index']);

Route::prefix('auth')->group(function (){

    Route::get('/register/{role}', [MahasiswaController::class, 'register'] );

    Route::post('/register', [MahasiswaController::class, 'registerProccess']);
});
