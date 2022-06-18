<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
   return redirect()->route('auth.login');
});
Route::get('/login', [AuthController::class,'login'])->name('auth.login');
Route::post('/login', [AuthController::class,'authenticate'])->name('auth.authenticate');
Route::post('/logout', [AuthController::class,'logout'])->name('auth.logout');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');

Route::resource('/mahasiswa', MahasiswaController::class);
