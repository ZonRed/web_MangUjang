<?php

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
Route::get('/index', function () {
    return view('pengguna.index');
});

Route::get('/transfer', function () {
    return view('pengguna.transfer');
});

Route::get('/hasil', function () {
    return view('pengguna.hasil');
});

Route::get('/next', function () {
    return view('pengguna.next');
});

Route::get('/statistik', function () {
    return view('pengguna.statistik');
});

//admin
Route::get('/D_Jadwal', function () {
    return view('admin.D_Jadwal');
})->middleware('auth');

Route::get('/D_InputJadwal', function () {
    return view('admin.D_InputJadwal');
})->middleware('auth');

Route::get('/D_Hasil', function () {
    return view('admin.D_Hasil');
})->middleware('auth');

Route::get('/D_InputHasil', function () {
    return view('admin.D_InputHasil');
})->middleware('auth');

Route::get('/D_Statistik', function () {
    return view('admin.D_Statistik');
})->middleware('auth');

Route::get('/D_InputStatistik', function () {
    return view('admin.D_InputStatistik');
})->middleware('auth');

Route::get('/Dashboard', function () {
    return view('admin.Dashboard');
})->middleware('auth');

Route::get('/D_User', function () {
    return view('admin.D_User');
})->middleware('auth');




//route register
Route::get('/register', 'App\Http\Controllers\AuthController@register')->middleware('guest');
Route::post('/simpanuser', 'App\Http\Controllers\Authcontroller@simpanuser');

//route login
Route::get('/login', 'App\Http\Controllers\AuthController@login')->middleware('guest')->name('login');
Route::post('/checklogin', 'App\Http\Controllers\Authcontroller@checklogin');

//route logout
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');
