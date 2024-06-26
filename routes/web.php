<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\JurusanController; 



Route::get('/', function () {
    return view('welcome');
});

Route::get('test',[TestController::class,'index']);


//route jurusan
Route::get('jurusan',[JurusanController::class,'index'])->name('jurusan.index');
Route::get('create-jurusan', [JurusanController::class,'create'])->name('jurusan.create');
Route::post('jurusan-store',[JurusanController::class,'store'])->name('jurusan.store');
Route::get('jurusan-edit/edit/{id}',[JurusanController::class,'edit'])->name('jurusan.edit');
Route::put('jurusan-update/update/{id}', [JurusanController::class,'update'])->name('jurusan.update');
Route::get('jurusan-delete/{id}',[JurusanController::class,'destroy'])->name('jurusan.destroy');