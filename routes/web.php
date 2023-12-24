<?php

use App\Http\Controllers\KursusController;
use App\Http\Controllers\MateriController;
use App\Models\Materi;
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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/kursus', [KursusController::class,'index'])->name('kursus');

Route::get('/materi', [MateriController::class,'index'])->name('materi');

Route::get('/materi/create', [MateriController::class,'create'])->name('materi.create');
Route::post('/materi/store', [MateriController::class,'store'])->name('materi.store');
Route::get('/materi/edit/{materi}', [MateriController::class,'edit'])->name('materi.edit');
Route::post('/materi/update/{materi}', [MateriController::class,'update'])->name('materi.update');
Route::delete('/materi/delete/{materi}', [MateriController::class,'destroy'])->name('materi.delete');

Route::get('/kursus/create', [KursusController::class,'create'])->name('kursus.create');
Route::post('/kursus/store', [KursusController::class,'store'])->name('kursus.store');
Route::get('/kursus/edit/{course}', [KursusController::class,'edit'])->name('kursus.edit');
Route::post('/kursus/update/{id}', [KursusController::class,'update'])->name('kursus.update');
Route::delete('/kursus/delete/{course}', [KursusController::class,'destroy'])->name('kursus.delete');