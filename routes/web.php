<?php

use App\Http\Controllers\AdminMahasiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasPengaduanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TanggapanController;
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




Route::middleware("guest:mahasiswa,petugas")->group(function () {
    Route::get('/login', [LoginController::class, "index"])->name("login");
    Route::post('/login', [LoginController::class, "authenticate"]);
    Route::get('/register', [RegisterController::class, "index"]);
    Route::post('/register', [RegisterController::class, "store"]);
});

Route::post('/logout', [LoginController::class, "logout"]);

Route::get("/dashboard", [DashboardController::class, "index"])->middleware("auth:mahasiswa,petugas");

Route::resource("/dashboard/pengaduanku", PengaduanController::class)->except(["edit", "update"])->middleware(["auth:mahasiswa"]);

Route::middleware("auth:petugas")->group(function () {
    Route::get("/dashboard/pengaduan", [PetugasPengaduanController::class, "index"]);
    Route::get("/dashboard/pengaduan/{pengaduan}", [PetugasPengaduanController::class, "show"]);
    Route::put("/dashboard/pengaduan/{pengaduan}", [PetugasPengaduanController::class, "update"]);

    Route::get("/dashboard/tanggapan", [TanggapanController::class, "index"]);
    Route::get("/dashboard/tanggapan/{pengaduan}", [TanggapanController::class, "create"]);
    Route::post("/dashboard/tanggapan/{pengaduan}", [TanggapanController::class, "store"]);

    Route::get("/dashboard/mahasiswa", [AdminMahasiswaController::class, "index"])->middleware("only_admin");
    Route::delete("/dashboard/mahasiswa/{mahasiswa}", [AdminMahasiswaController::class, "destroy"])->middleware("only_admin");
});
