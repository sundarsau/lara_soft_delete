<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TrainingCourseController;

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

Route::get('/', [TrainingCourseController::class, 'index'])->name('course.index');
Route::group(['prefix' => 'course'], function () {
    Route::post('move-trash', [TrainingCourseController::class, 'moveToTrash'])->name('soft.delete');
    Route::get('trashed', [TrainingCourseController::class, 'showTrash'])->name('show.trashed');
    Route::post('restore', [TrainingCourseController::class, 'restore'])->name('course.restore');
    Route::post('delete-trash', [TrainingCourseController::class, 'forceDelete'])->name('permanent.delete');
});

