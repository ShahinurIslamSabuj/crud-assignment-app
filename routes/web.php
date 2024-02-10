<?php

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
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/view', [App\Http\Controllers\ResultController::class, 'display'])->name('display');
//Route::get('/form', [App\Http\Controllers\ResultController::class, 'form'])->name('form');
//Route::get('/edit/{$s_id}', [App\Http\Controllers\ResultController::class, 'edit'])->name('edit');


use App\Http\Controllers\ResultController;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/result', [ResultController::class, 'display'])->name('display');
Route::get('/result/student-form', [ResultController::class, 'form'])->name('form');
Route::post('/result/student-insert', [ResultController::class, 'insert'])->name('insert.student');
Route::get('/result/edit/{id}', [ResultController::class, 'edit'])->name('edit');
Route::put('/result-update/{id}', [ResultController::class, 'update'])->name('update');
Route::delete('/result-delete/{id}', [ResultController::class, 'delete'])->name('delete');
