<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
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
    return view('admin.home');
});



//dashboard Start
Route::get('/mydashboard', [DashboardController::class, 'mydashboard'])->name('mydashboard');
Route::get('/form', [DashboardController::class, 'form']);
Route::get('/register', [DashboardController::class, 'register']);



Route::get('/contact', [AdminController::class, 'contact']);
