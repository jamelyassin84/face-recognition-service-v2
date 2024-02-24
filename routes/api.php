<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(
    [
        'prefix' => 'auth',
    ],
    function () {
        Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
    }
);

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth:sanctum',
], function () {
    Route::resource('students', \App\Http\Controllers\StudentController::class);
    Route::resource('departments', \App\Http\Controllers\DepartmentController::class);
    Route::resource('courses', \App\Http\Controllers\CourseController::class);
    Route::resource('subjects', \App\Http\Controllers\SubjectController::class);
    Route::resource('rooms', \App\Http\Controllers\RoomController::class);
    Route::resource('faculties', \App\Http\Controllers\FacultyController::class);
    Route::resource('sections', \App\Http\Controllers\SectionController::class);
    Route::resource('schedules', \App\Http\Controllers\ScheduleController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
