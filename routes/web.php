<?php

use App\Http\Controllers\BelumMenikahController;
use App\Http\Controllers\PegawaiController;
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
        'dropdown' => '',
        'title' => 'Dashboard'
    ]);
});
Route::get('/alerts', function () {
    return view('page.alerts',[
        'dropdown' => 'Components',
        'title' => 'Alerts'
    ]);
});
Route::get('/accordion', function () {
    return view('page.accordion',[
        'dropdown' => 'Components',
        'title' => 'Accordion'
    ]);
});
Route::get('/tables-data', function () {
    return view('page.tables-data',[
        'dropdown' => 'Tables',
        'title' => 'Data Tables'
    ]);
});
Route::get('/surat-ktm', [TidakMampuController::class, 'index']);
Route::post('/surat-ktm', [TidakMampuController::class, 'store']);
// Route::get('/surat-ktm/{id}/edit', [TidakMampuController::class, 'edit']);
Route::put('/surat-ktm/{id}', [TidakMampuController::class, 'update']);
Route::get('/surat-ktm/{id}/delete', [TidakMampuController::class, 'destroy']);
Route::get('/surat-ktm/{id}/view', [TidakMampuController::class, 'show']);

Route::get('/surat-kbm', [BelumMenikahController::class, 'index']);

