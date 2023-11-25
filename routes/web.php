<?php

use App\Http\Controllers\HasilController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//pengguna
// Route::get('/index', function () {
//     return view('pengguna.index');
// });

Route::get('/transfer', function () {
    return view('pengguna.transfer');
});

// Route::get('/hasil', function () {
//     return view('pengguna.hasil');
// });

// Route::get('/next', function () {
//     return view('pengguna.next');
// });

// Route::get('/statistik', function () {
//     return view('pengguna.statistik');
// });

//admin
// Route::get('/D_Jadwal', function () {
//     return view('admin.D_Jadwal');
// })->middleware('auth');

// Route::get('/D_InputJadwal', function () {
//     return view('admin.D_InputJadwal');
// })->middleware('auth');

// Route::get('/D_Hasil', function () {
//     return view('admin.D_Hasil');
// })->middleware('auth');

// Route::get('/D_InputHasil', function () {
//     return view('admin.D_InputHasil');
// })->middleware('auth');

// Route::get('/D_Statistik', function () {
//     return view('admin.D_Statistik');
// })->middleware('auth');

// Route::get('/D_InputStatistik', function () {
//     return view('admin.D_InputStatistik');
// })->middleware('auth');

Route::get('/Dashboard', function () {
    return view('admin.Dashboard');
})->middleware('auth');


//route register
Route::get('/register', 'App\Http\Controllers\AuthController@register')->middleware('guest');
Route::post('/simpanuser', 'App\Http\Controllers\Authcontroller@simpanuser');

//route login
Route::get('/login', 'App\Http\Controllers\AuthController@login')->middleware('guest')->name('login');
Route::post('/checklogin', 'App\Http\Controllers\Authcontroller@checklogin');

//route logout
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

//route hasil
Route::get('/D_Hasil', 'App\Http\Controllers\HasilController@hasil');
Route::get('/D_InputHasil', 'App\Http\Controllers\HasilController@InputHasil');
Route::post('/save',[HasilController::class,'save']);

//route delete hasil
Route::get('/delete_hasil/{id}', 'App\Http\Controllers\HasilController@delete_hasil')->middleware('auth');

// route untuk menampilkan formulir edit hasil
Route::get('/edit_hasil/{id}', 'App\Http\Controllers\HasilController@edit_hasil')->middleware('auth');

// route untuk menyimpan hasil edit
Route::post('/update_hasil/{id}', 'App\Http\Controllers\HasilController@update_hasil')->middleware('auth');

//route pengguna_hasil
Route::get('/hasil', 'App\Http\Controllers\HasilController@pengguna_hasil');


//route jadwal
Route::get('/D_Jadwal', 'App\Http\Controllers\JadwalController@Jadwal');
Route::get('/D_InputJadwal', 'App\Http\Controllers\JadwalController@InputJadwal');
Route::post('/SaveJadwal',[JadwalController::class,'SaveJadwal']);

//route delete jadwal
Route::get('/delete_jadwal/{id}', 'App\Http\Controllers\JadwalController@delete_jadwal')->middleware('auth');

// route untuk menampilkan formulir edit hasil
Route::get('/edit_jadwal/{id}', 'App\Http\Controllers\JadwalController@edit_jadwal')->middleware('auth');

// route untuk menyimpan hasil edit
Route::post('/update_jadwal/{id}', 'App\Http\Controllers\JadwalController@update_jadwal')->middleware('auth');

//route pengguna_jadwal
Route::get('/next', 'App\Http\Controllers\JadwalController@pengguna_jadwal');


//route statistik
Route::get('/D_Statistik', 'App\Http\Controllers\StatistikController@Statistik');
Route::get('/D_InputStatistik', 'App\Http\Controllers\StatistikController@InputStatistik');
Route::post('/SaveStatistik',[StatistikController::class,'SaveStatistik']);

//route delete statistik
Route::get('/delete_statistik/{id}', 'App\Http\Controllers\StatistikController@delete_statistik')->middleware('auth');

// route untuk menampilkan formulir edit statistik
Route::get('/edit_statistik/{id}', 'App\Http\Controllers\StatistikController@edit_statistik')->middleware('auth');

// route untuk menyimpan statistik edit
Route::post('/update_statistik/{id}', 'App\Http\Controllers\StatistikController@update_statistik')->middleware('auth');

//route pengguna_statistik
Route::get('/statistik', 'App\Http\Controllers\StatistikController@pengguna_statistik');


//route laporan
Route::get('/D_Laporan', 'App\Http\Controllers\LaporanController@Laporan');
Route::get('/index', 'App\Http\Controllers\LaporanController@InputLaporan');
Route::post('/SaveLaporan',[LaporanController::class,'SaveLaporan']);

//route delete laporan
Route::get('/delete_Laporan/{id}', 'App\Http\Controllers\LaporanController@delete_Laporan')->middleware('auth');
