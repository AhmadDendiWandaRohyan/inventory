<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrgkeluarController;
use App\Http\Controllers\BrgmasukController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\Dbarang;
use App\Http\Controllers\DUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CetakController;

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


//Route AuthController
Route::get('/', [AuthController::class, 'index'])->middleware('nobacklogin');

Route::post('/home', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout'])->middleware('Ceklogin');


//Route NotesController
Route::get('/notes', [NotesController::class, 'notes'])->middleware('Ceklogin');

Route::post('/store', [NotesController::class, 'store'])->middleware('Ceklogin');

Route::get('/note/{id}', [NotesController::class, 'hapus'])->middleware('Ceklogin');


//Route DbarangController
Route::get('/stock/dbarang', [Dbarang::class, 'dbarang'])->middleware('Ceklogin');

Route::post('/tambahdata', [Dbarang::class, 'store'])->middleware('Ceklogin');

Route::get('/hapusdata/{idx}', [Dbarang::class, 'hapusdata'])->middleware('Ceklogin');

Route::get('/editdata/{idx}', [Dbarang::class, 'edit'])->middleware('Ceklogin');

Route::post('/updatedata/{idx}', [Dbarang::class, 'simpanupdate'])->middleware('Ceklogin');

Route::get('/exportstock', [Dbarang::class, 'exportstkbhn'])->middleware('Ceklogin');

Route::get('/pdfstock', [Dbarang::class, 'pdfstkbhn'])->middleware('Ceklogin');


//Route BrgmasukController
Route::get('/stock/brg_masuk', [BrgmasukController::class, 'index'])->middleware('Ceklogin');

Route::post('/datamasuk', [BrgmasukController::class, 'store'])->middleware('Ceklogin');

Route::get('/hapusdatamsk/{id}', [BrgmasukController::class, 'hapusdatamsk'])->middleware('Ceklogin');

Route::get('/editdatamsk/{id}', [BrgmasukController::class, 'editmsk'])->middleware('Ceklogin');

Route::post('/updatedatamsk/{id}', [BrgmasukController::class, 'simpanupdatemsk'])->middleware('Ceklogin');

Route::get('/exportdatamasuk', [BrgmasukController::class, 'exportdatamsk'])->middleware('Ceklogin');


//Route BrgkeluarController
Route::get('/stock/brg_keluar', [BrgkeluarController::class, 'index'])->middleware('Ceklogin');

Route::post('/datakeluar', [BrgkeluarController::class, 'store'])->middleware('Ceklogin');

Route::get('/hapusdataklr/{id}', [BrgkeluarController::class, 'hapusdataklr'])->middleware('Ceklogin');

Route::get('/editdataklr/{id}', [BrgkeluarController::class, 'editklr'])->middleware('Ceklogin');

Route::post('/updatedataklr/{id}', [BrgkeluarController::class, 'simpanupdateklr'])->middleware('Ceklogin');

Route::get('/exportdatakeluar', [BrgkeluarController::class, 'exportdataklr'])->middleware('Ceklogin');


//Route RegisterController
Route::get('/register', [RegisterController::class, 'index'])->middleware('Ceklogin');

Route::post('/tambahakun', [RegisterController::class, 'store'])->middleware('Ceklogin');

Route::get('/dataaccount', [DUserController::class, 'duser'])->middleware('Ceklogin');

Route::post('/tambahakun', [DUserController::class, 'store'])->middleware('Ceklogin');

Route::get('/hapusdatausr/{id}', [DUserController::class, 'hapusdatauser'])->middleware('Ceklogin');

Route::get('/editdatausr/{id}', [DUserController::class, 'edituser'])->middleware('Ceklogin');

Route::post('/updatedatausr/{id}', [DUserController::class, 'simpanupdateuser'])->middleware('Ceklogin');


Route::get('/dashboard', [DashController::class, 'dashboard'])->middleware('Ceklogin');
