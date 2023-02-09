<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabDetailController;
use App\Http\Controllers\DosenDetailController;
use App\Http\Controllers\KelasDetailController;
use App\Http\Controllers\GedungDetailController;

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

Route::get('listRuang', function () {
    return view('/client/listRuang');
});

Route::get('ruangLab', function () {
    return view('/client/ruangLab');
});

Route::get('ruangKelas', function () {
    return view('/client/ruangKelas');
});

Route::get('ruangDosen', function () {
    return view('/client/ruangDosen');
});

Route::get('gedungFti', function () {
    return view('/client/gedungFti');
});

Route::get('administrator', function () {
    return view('/admin/administrator');
});


Route::resource('LabDetail', LabDetailController::class);

Route::resource('DosenDetail', DosenDetailController::class);

Route::resource('KelasDetail', KelasDetailController::class);

Route::resource('GedungDetail', GedungDetailController::class);
