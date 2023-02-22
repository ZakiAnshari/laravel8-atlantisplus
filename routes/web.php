<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;


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
    return view('welcome');
});

Route::get('pendaftaran',[PendaftaranController::class,'pendaftaran']);
Route::post('add',[PendaftaranController::class,'add']);

Route::get('/smpkurikulum', function () {
    return view('smpkurikulum');
});


Route::get('/smpkeunggulan', function () {
    return view('smpkeunggulan');
});

Route::get('/smpprestasi', function () {
    return view('smpprestasi');
});

Route::get('/smpstrukturorganisasi', function () {
    return view('smpstrukturorganisasi');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/login', function () {
    return view('login');
});