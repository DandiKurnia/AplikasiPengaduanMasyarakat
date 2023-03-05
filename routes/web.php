<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginMasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
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
Route::resource('pengaduan', PengaduanController::class);
Route::group(['middleware' => 'IsMasyarakat'], function () {
    // logout Masyarakat
    Route::post('/logout',[LoginMasyarakatController::class, 'logout']);
});

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // logout Admin/Petugas
    Route::post('logout/admin', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['guest']], function(){
    // Register
    Route::get('register', [RegisterController::class, 'index']);
    Route::post('register', [RegisterController::class, 'store']);

    // Login Admin/Petugas
    Route::get('login/admin', [LoginController::class, 'index']);
    Route::post('login/admin', [LoginController::class, 'authenticate']);

    // Login Masyarakat
    Route::get('login',[LoginMasyarakatController::class, 'login'])->name('login');
    Route::post('login/masyarakat',[LoginMasyarakatController::class, 'authenticate']);
});

Route::get('/', function(){
    return view('landing-page');
});
