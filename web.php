<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
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

Route::get('/create', [StudentController::class,'create'])->name('create');
Route::post('/store', [StudentController::class,'store'])->name('store');
Route::get('/index', [StudentController::class,'index'])->name('index');
Route::get('/show/{id}', [StudentController::class,'show'])->name('show');
Route::get('/edit/{id}', [StudentController::class,'edit'])->name('edit');
Route::post('/update/{id}', [StudentController::class,'update'])->name('update');
Route::get('/delete/{id}', [StudentController::class,'destroy'])->name('delete');