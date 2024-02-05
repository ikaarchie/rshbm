<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontenController;

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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/', [HomeController::class, 'getData'])->name('getData');
Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::get('/konten', [KontenController::class, 'index'])->name('indexContent');
Route::get('/konten', [KontenController::class, 'getData'])->name('getDataContent');
Route::post('/konten/save', [KontenController::class, 'save'])->name('save');
Route::patch('/konten/update/{id}', [KontenController::class, 'update'])->name('update');
Route::get('/konten/delete/{id}', [KontenController::class, 'destroy'])->name('delete');
