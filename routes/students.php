<?php

use App\Http\Controllers\GlobalSetting\students\RegistrationController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Students\StudentIndexController;


Route::prefix('Students/Information')->group(function(){
    Route::get('index',[StudentIndexController::class,'index'])->name('student.dashboard');
})->middleware(['auth','verifyied']);


Route::prefix('Students/Information/Registration')->group(function(){
    Route::get('index',[RegistrationController::class,'index'])->name('student.registration.index');
})->middleware(['auth','verifyied']);