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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/form_view', [App\Http\Controllers\CrudController::class, 'form_view'])->name('form_view');
Route::post('/insert', [App\Http\Controllers\CrudController::class, 'insert'])->name('insert');
Route::get('/display', [App\Http\Controllers\CrudController::class, 'display'])->name('display');
Route::get('/edit/{id}', [App\Http\Controllers\CrudController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [App\Http\Controllers\CrudController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [App\Http\Controllers\CrudController::class, 'delete'])->name('delete');
