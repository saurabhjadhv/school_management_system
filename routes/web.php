<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class, 'create'])->name('Student-form');
Route::post('/Student-form/add', [StudentController::class, 'store'])->name('Student-form.add');

Route::get('/Student-table', [StudentController::class, 'index'])->name('Student-table');

Route::get('/Student-show/{id}', [StudentController::class, 'show'])->name('Student-show');

Route::get('/Student-edit/{id}', [StudentController::class, 'edit'])->name('Student-edit');

Route::put('/Student-update/{id}', [StudentController::class, 'update'])->name('Student-update');

Route::delete('/Student-delete/{id}', [StudentController::class, 'destroy'])->name('Student-delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
