<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\KanbanController;
use App\Http\Controllers\CalendarController;

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Route::get('/', fn () => view('auth.form'));
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', fn () =>
    auth()->check() ? view('dashboard') : redirect('/')
)->name('dashboard');

/*
|--------------------------------------------------------------------------
| Team Members
|--------------------------------------------------------------------------
*/
Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('team.destroy'); // 🔥 الحذف

/*
|--------------------------------------------------------------------------
| Projects
|--------------------------------------------------------------------------
*/
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');

/*
|--------------------------------------------------------------------------
| Tasks
|--------------------------------------------------------------------------
*/
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');

/*
|--------------------------------------------------------------------------
| Other Pages
|--------------------------------------------------------------------------
*/
Route::get('/kanban', [KanbanController::class, 'index'])->name('kanban.index');
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/settings', fn () => view('settings'))->name('settings');
Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');
Route::resource('projects', ProjectController::class);


Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');

