<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\DashboardController;

Route::resource('employees', EmployeeController::class);
Route::resource('courses', CourseController::class);
Route::resource('schedules', ScheduleController::class);
Route::get('/', [DashboardController::class, 'index']);
