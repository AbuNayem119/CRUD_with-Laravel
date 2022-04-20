<?php

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

Route::get('/student', [App\Http\Controllers\studentController::class, 'index']) -> name('student.index');

Route::get('/student/create', [App\Http\Controllers\studentController::class, 'create']) -> name('student.create');

Route::get('/student/edit/{id}', [App\Http\Controllers\studentController::class, 'edit']) -> name('student.edit');

Route::get('/student/show/{id}', [App\Http\Controllers\studentController::class, 'show']) -> name('student.show');

Route::get('/student/destroy/{id}', [App\Http\Controllers\studentController::class, 'destroy']) -> name('student.destroy');

Route::post('/student/store', [App\Http\Controllers\studentController::class, 'store']) -> name('student.store');

Route::post('/student/update/{id}', [App\Http\Controllers\studentController::class, 'update']) -> name('student.update');

