<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');
Route::get('/calender', function () {
    return view('calender.calender');
})->name('calendar');
Route::get('/tasks', [TaskController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::resource('tasks', TaskController::class);
});
