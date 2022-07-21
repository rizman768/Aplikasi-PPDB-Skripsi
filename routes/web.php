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
    return redirect('index');
});

Route::get('index', [DashboardController::class, 'index'])->name('index');
Route::get('dashboard', [DashboardController::class, 'dashboard']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('user_login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register']);
Route::post('user_register', [AuthController::class, 'user_registration']);

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
        Route::get('daftarsantri', [AdminController::class, 'daftar_santri']);
        Route::get('detailsantri/{id}', [AdminController::class, 'detail_santri']);
    });
});
  


