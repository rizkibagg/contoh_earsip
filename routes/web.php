<?php

use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\SkpenghasilanController;
use App\Http\Controllers\SMasukController;
use App\Http\Controllers\SpbbekerjaController;
use App\Http\Controllers\TidakMampuController;
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
    return view('page.dashboard',[
        'dropdown1' => '',
        'dropdown2' => '',
        'title' => 'Dashboard',
    ]);
});
Route::get('/profile', function () {
    return view('page.profile',[
        'dropdown1' => '',
        'dropdown2' => '',
        'title' => 'Profile',
    ]);
});
Route::get('/register', function () {
    return view('page.register',[
        'dropdown1' => '',
        'dropdown2' => '',
        'title' => 'Register',
    ]);
});
Route::get('/login', function () {
    return view('page.login',[
        'dropdown1' => '',
        'dropdown2' => '',
        'title' => 'Login',
    ]);
});

Route::get('/surat-ktm', [TidakMampuController::class, 'index']);
Route::post('/surat-ktm', [TidakMampuController::class, 'store']);
Route::put('/surat-ktm/{id}', [TidakMampuController::class, 'update']);
Route::get('/surat-ktm/{id}/delete', [TidakMampuController::class, 'destroy']);
Route::get('/surat-ktm/{id}/view', [TidakMampuController::class, 'show']);

// Surat Pernyataan Belum Bekerja
Route::get('/surat-belum-bekerja', [SpbbekerjaController::class, 'index']);
Route::post('/surat-belum-bekerja', [SpbbekerjaController::class, 'store']);
Route::put('/surat-belum-bekerja/{id}', [SpbbekerjaController::class, 'update']);
Route::get('/surat-belum-bekerja/{id}/view', [SpbbekerjaController::class, 'show']);
Route::get('/contoh-surat-belum-bekerja/view', [SpbbekerjaController::class, 'contoh']);
// Surat Keterangan Penghasilan
Route::get('/surat-ket-hasil', [SkpenghasilanController::class, 'index']);
Route::post('/surat-ket-hasil', [SkpenghasilanController::class, 'store']);
Route::put('/surat-ket-hasil/{id}', [SkpenghasilanController::class, 'update']);
Route::get('/surat-ket-hasil/{id}/view', [SkpenghasilanController::class, 'show']);
Route::get('/contoh-surat-ket-hasil/view', [SkpenghasilanController::class, 'contoh']);
// Surat Masuk
Route::get('/surat-masuk', [SMasukController::class, 'index']);
Route::post('/surat-masuk', [SMasukController::class, 'store']);
Route::put('/surat-masuk/{id}', [SMasukController::class, 'update']);
Route::get('/surat-masuk/{id}/delete', [SMasukController::class, 'destroy']);
Route::get('/surat-masuk/{id}/view', [SMasukController::class, 'show']);

// Komentar Captcha
Route::get('/komentar', [CaptchaController::class, 'index']);
Route::post('/komentar', [CaptchaController::class, 'store']);
// Route::put('/komentar/{id}', [CaptchaController::class, 'update']);
// Route::get('/komentar/{id}/delete', [CaptchaController::class, 'destroy']);
// Route::get('/komentar/{id}/view', [CaptchaController::class, 'show']);

Route::get('/get-penduduk/{nik}', [PendudukController::class, 'show']);
