<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
Route::get('/', function () {
    return view('auth.form');
});

use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/dashboard', function () {
    return Auth::check() ?view('dashboard'): redirect('/');
})->name('dashboard');
// PROJECTS
Route::get('/projects/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/projects/store', [ProjectController::class, 'store'])->name('project.store');

// TASKS
Route::get('/tasks/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/tasks/store', [TaskController::class, 'store'])->name('task.store');

// TEAM MEMBERS
Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/settings', function () {
    return view('settings');
})->name('settings.update');
