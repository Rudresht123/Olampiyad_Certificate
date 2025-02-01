<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalSetting\FinancialSetting\FinancialController;
use App\Http\Controllers\GlobalSetting\DeleteRecord;
use App\Http\Controllers\GlobalSetting\School\CourseController;
use App\Http\Controllers\GlobalSetting\School\MapSchoolWithCourse;
use App\Http\Controllers\GlobalSetting\School\SchoolController;
use App\Http\Controllers\GlobalSetting\Certificate\CorrectiveAdviceCategory;

Route::prefix('GlobalSetting/MasterAdmin/financial-year')->group(function() {
    Route::get('index', [FinancialController::class, 'index'])->name('admin.global-setting.financialYear');
    Route::post('create', [FinancialController::class, 'store'])->name('admin.global-setting.create-financialYear');
    Route::get('ednt/{id}',[FinancialController::class,'edit'])->name('admin.global-setting.edit.financialYear')->middleware(['auth','verified']);
    Route::put('edit/{id}',[FinancialController::class,'update'])->name('admin.global-setting.edit.financialYear')->middleware(['auth','verified']);
})->middleware(['auth', 'verified']);


Route::prefix('GlobalSetting/MasterAdmin/school')->group(function() {
    Route::get('index', [SchoolController::class, 'index'])->name('admin.global-setting.school');
    Route::post('create', [SchoolController::class, 'store'])->name('admin.global-setting.create-school');
    Route::get('edit/{id}',[SchoolController::class,'edit'])->name('admin.global-setting.edit.school')->middleware(['auth','verified']);
    Route::put('edit/{id}',[SchoolController::class,'update'])->name('admin.global-setting.edit.school')->middleware(['auth','verified']);
})->middleware(['auth', 'verified']);



Route::prefix('GlobalSetting/MasterAdmin/courses')->group(function() {
    Route::get('index', [CourseController::class, 'index'])->name('admin.global-setting.course');
    Route::post('create', [CourseController::class, 'store'])->name('admin.global-setting.create-course');
    Route::get('edit/{id}',[CourseController::class,'edit'])->name('admin.global-setting.edit.course')->middleware(['auth','verified']);
    Route::put('edit/{id}',[CourseController::class,'update'])->name('admin.global-setting.edit.course')->middleware(['auth','verified']);
})->middleware(['auth', 'verified']);


Route::prefix('GlobalSetting/MasterAdmin/map-school-with-courses')->group(function() {
    Route::get('index', [MapSchoolWithCourse::class, 'index'])->name('admin.global-setting.map-school-withcourse');
    Route::post('create', [MapSchoolWithCourse::class, 'store'])->name('admin.global-setting.map-school-create-withcourse');
})->middleware(['auth', 'verified']);


// Delete Record Url
Route::get('RecordDelete/{id}/{table_name}/delete',[DeleteRecord::class,'DeleteRecord'])->name('RecordDelete');


// Certificate Setting Start here

// correctie advice categoryu
Route::prefix('GlobalSetting/MasterAdmin/Carrective-advice/Category')->group(function() {
    Route::get('index', [CorrectiveAdviceCategory::class, 'index'])->name('admin.global-setting.corrective-advice.category');
    Route::post('create', [CorrectiveAdviceCategory::class, 'store'])->name('admin.global-setting.create.corrective-advice.category');
    Route::get('edit/{id}',[CorrectiveAdviceCategory::class,'edit'])->name('admin.global-setting.edit.corrective-advice.category')->middleware(['auth','verified']);
    Route::put('edit/{id}',[CorrectiveAdviceCategory::class,'update'])->name('admin.global-setting.edit.corrective-advice.category')->middleware(['auth','verified']);
})->middleware(['auth', 'verified']);
