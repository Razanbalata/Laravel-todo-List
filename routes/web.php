<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function(){
    return view('dashboard.index');
});
Route::get('/calender', function(){
    return view('calender.calender');
});
Route::get('/tasks', [TaskController::class, 'index']);

Route::resource('tasks', TaskController::class);
