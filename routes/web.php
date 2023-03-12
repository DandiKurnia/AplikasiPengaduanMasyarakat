<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginMasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengaduanMasyarakatController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\UserController;
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
Route::group(['middleware' => 'IsMasyarakat'], function () {
    Route::get('daftar-pengaduan', [PengaduanMasyarakatController::class, 'pengaduan']);
    Route::resource('pengaduan', PengaduanMasyarakatController::class);
    // logout Masyarakat
    Route::post('logout',[LoginMasyarakatController::class, 'logout']);
});

Route::group(['middleware' => ['auth']], function(){
    Route::resource('admin/pengaduan', PengaduanController::class);
    Route::get('admin/pengaduan-masuk', [PengaduanController::class,'pengaduanMasuk']);
    Route::get('admin/pengaduan-tolak', [PengaduanController::class,'pengaduantolak']);
    Route::get('admin/pengaduan-terima', [PengaduanController::class,'pengaduanterima']);
    Route::get('admin/pengaduan-proses', [PengaduanController::class,'pengaduanProses']);
    Route::get('admin/pengaduan-selesai', [PengaduanController::class,'pengaduanSelesai']);
    Route::post('tanggapan/{pengaduan_id}', [TanggapanController::class, 'updateTanggapan']);
    Route::resource('tanggapan', TanggapanController::class);

    Route::get('admin/pengaduan-masuk/approve/{id}', [PengaduanController::class, 'approve']);
    Route::get('admin/pengaduan-masuk/reject/{id}', [PengaduanController::class, 'reject']);

    Route::resource('user', UserController::class);
    Route::get('dashboard', [DashboardController::class, 'index']);
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
