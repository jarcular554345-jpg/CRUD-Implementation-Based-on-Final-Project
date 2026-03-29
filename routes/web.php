<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [EmployeeController::class,'index'])->name('home');
Route::resource('employees', EmployeeController::class);