<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StokController;
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

Route::get('/Dashboard', function () {
    return view('Index');
});

Route::get('/Stok',[StokController::class,'index']);
Route::get('/Input-Stok',[StokController::class,'create']);
Route::post('/Stok-proses',[StokController::class,'store']);
Route::get('/Stok-Edit/{id}',[StokController::class,'edit']);
Route::post('/Stok-Update/{id}',[StokController::class,'update']);
Route::get('/Stok-Delete/{id}',[StokController::class,'destroy']);
Route::get('/Stok-cetak',[StokController::class,'downloadpdf']);