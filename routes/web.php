<?php

use App\Http\Controllers\CarController;
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

Route::get('/cars',[CarController::class,'index']);
Route::get('/create',[CarController::class,'create']);
Route::post('/create',[CarController::class,'store']);
Route::get('/show/{car}',[CarController::class,'show']);
Route::get('/edit/{car}',[CarController::class,'edit']);
Route::put('/update/{car}',[CarController::class,'update']);
Route::get('/delete/{car}',[CarController::class,'delete']);
Route::delete('/delete/{car}',[CarController::class,'destroy']);
