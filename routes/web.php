<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfilController;

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

Route::get('/', function () {
    return redirect('dashboard');
});


Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('user_login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register']);
Route::post('user_register', [AuthController::class, 'user_registration']);
Route::get('daftar-santri', [DashboardController::class, 'daftar_santri']);
Route::get('search', [DashboardController::class, 'search']);
Route::get('panduan', [DashboardController::class, 'panduan']);
Route::get('tentang-pondok', [DashboardController::class, 'tentang_pondok']);
Route::get('send', [DashboardController::class, 'send']);

Route::middleware(['auth'])->group(function () {
    Route::get('profile/{id}', [ProfilController::class, 'biodata'])->name('profile');
    Route::get('tambah_biodata', [ProfilController::class, 'tambah_biodata']);
    Route::post('storetambahbiodata', [ProfilController::class, 'create']);
    Route::get('edit_biodata/{id}', [ProfilController::class, 'edit_biodata']);
    Route::post('updatebiodata', [ProfilController::class, 'update_biodata']);
    Route::post('deletebiodata', [ProfilController::class, 'delete_biodata']);
    Route::get('editpersyaratan/{id}', [ProfilController::class, 'edit_persyaratan']);
    Route::post('updatepersyaratan', [ProfilController::class, 'update_persyaratan']);

    Route::middleware(['cekrole:1'])->group(function () {
        Route::get('admin-dashboard', [AdminController::class, 'index']);
        Route::get('manajemenuser', [AdminController::class, 'manajemen_user']);
        Route::get('edituser/{id}', [AdminController::class, 'edit_user']);
        Route::post('updateuser', [AdminController::class, 'update_user']);
        Route::get('daftarsantri', [AdminController::class, 'daftar_santri']);
        Route::get('detailsantri/{id}', [AdminController::class, 'detail_santri'])->name('detailsantri');
        Route::post('acc', [DashboardController::class, 'persyaratan']);
        Route::get('cetak_form/{id}', [AdminController::class, 'cetak_pdf']);
        Route::get('cari', [AdminController::class, 'search']);
        Route::post('deleteuser/{id}', [AdminController::class, 'delete']);
        Route::post('deletebiodata/{id}', [AdminController::class, 'delete_biodata']);
        Route::get('report', [AdminController::class, 'report']);
        Route::get('cetak-laporan/{tahun}', [AdminController::class, 'cetak_laporan']);
        Route::get('tampil-cetak', [AdminController::class, 'tampil_cetak']);
    });
});
  


