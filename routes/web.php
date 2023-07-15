<?php

namespace App\Http\Controllers;
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
    return view('home');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/index', function () {
        return view('backend.contohdashboard');
    });

    Route::get('/pegawai',[pegawaiController::class,'index']);
    Route::get('/pegawai/create',[pegawaiController::class,'create']);
    Route::post('/pegawai/simpan-data',[pegawaiController::class,'store']);

    Route::get('/pegawai/edit/{id}',[pegawaiController::class,'edit']);
    Route::post('/pegawai/update/{id}', [pegawaiController::class,'update']);
    Route::get('/pegawai/delete/{id}', [pegawaiController::class, 'delete']);

    Route::get('/posisipekerjaan',[posisiPekerjaanController::class,'index']);
    Route::get('/posisipekerjaan/create',[posisiPekerjaanController::class,'create']);
    Route::post('/posisipekerjaan/simpan-data',[posisiPekerjaanController::class,'store']);

    Route::get('/posisipekerjaan/edit/{id}',[posisiPekerjaanController::class,'edit']);
    Route::post('/posisipekerjaan/update/{id}', [posisiPekerjaanController::class,'update']);
    Route::get('/posisipekerjaan/delete/{id}', [posisiPekerjaanController::class, 'delete']);

    Route::get('/menu',[menuController::class,'index']);
    Route::get('/menu/create',[menuController::class,'create']);
    Route::post('/menu/simpan-data',[menuController::class,'store']);

    Route::get('/menu/edit/{id}',[menuController::class,'edit']);
    Route::post('/menu/update/{id}', [menuController::class,'update']);
    Route::get('/menu/delete/{id}', [menuController::class, 'delete']);

    Route::get('/kategorimenu',[kategoriMenuController::class,'index']);
    Route::get('/kategorimenu/create',[kategoriMenuController::class,'create']);
    Route::post('/kategorimenu/simpan-data',[kategoriMenuController::class,'store']);

    Route::get('/kategorimenu/edit/{id}',[kategoriMenuController::class,'edit']);
    Route::post('/kategorimenu/update/{id}', [kategoriMenuController::class,'update']);
    Route::get('/kategorimenu/delete/{id}', [kategoriMenuController::class, 'delete']);

    Route::get('/inventarisrestoran',[inventarisRestoranController::class,'index']);
    Route::get('/inventarisrestoran/create',[inventarisRestoranController::class,'create']);
    Route::post('/inventarisrestoran/simpan-data',[inventarisRestoranController::class,'store']);

    Route::get('/inventarisrestoran/edit/{id}',[inventarisRestoranController::class,'edit']);
    Route::post('/inventarisrestoran/update/{id}', [inventarisRestoranController::class,'update']);
    Route::get('/inventarisrestoran/delete/{id}', [inventarisRestoranController::class, 'delete']);
});

Route::get('/login', [Auth\LoginController::class, 'index'])->name('login');
Route::post('/login/proses', [Auth\LoginController::class, 'login']);
Route::get('/logout', [Auth\LoginController::class, 'logout']);

Route::get('/register', [Auth\RegisterController::class, 'index']);
Route::post('/register/proses', [Auth\RegisterController::class, 'register']);

