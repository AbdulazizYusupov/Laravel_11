<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[JobController::class,'index'])->name('job.index');
Route::post('/create',[JobController::class,'create'])->name('job.create');
