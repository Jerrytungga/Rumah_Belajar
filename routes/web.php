<?php

use App\Http\Controllers\Pendaftaran\PendaftaranController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PendaftaranController::class, 'Formpendaftaran'])->name('tampil.data');
Route::get('/presensi', [PendaftaranController::class, 'form_mentor'])->name('form.mentor');
Route::post('/presensi/input', [PendaftaranController::class, 'sform_mentor'])->name('post.mentor');
Route::get('/presensi/{id}/edit', [PendaftaranController::class, 'EditMentor'])->name('edit.mentor');
Route::put('/presensi/{id}/Save', [PendaftaranController::class, 'updatementor'])->name('presensi.update');
Route::get('/presensi/siswa', [PendaftaranController::class, 'form_siswa'])->name('form.siswa');
Route::post('/presensi/input/siswa', [PendaftaranController::class, 'sform_siswa'])->name('post.siswa');
Route::get('/presensi/{id}/siswa', [PendaftaranController::class, 'EditSiswa'])->name('edit.siswa');
Route::put('/presensi/{id}/simpan', [PendaftaranController::class, 'updatesiswa'])->name('presensisiswa.update');
