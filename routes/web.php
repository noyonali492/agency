<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboarController;
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
    return view('fontend.layouts.index');
});

//dashboard Start
Route::get('/mydashboard', [dashboarController::class, 'mydashboard'])->name('mydashboard');
Route::get('/form', [dashboarController::class, 'form']);
Route::get('/register', [dashboarController::class, 'register']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
