<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\KanbanController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\DashboardController;

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
| Protected Routes (🔥 أهم تعديل)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    /*
    | Dashboard
    */
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /*
    | Team Members
    */
    Route::get('/team', [TeamController::class, 'index'])->name('team.index');
    Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
    Route::get('/team/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');
    Route::put('/team/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('team.destroy');

    /*
    | Projects (🔥 استخدم resource فقط)
    */
    Route::resource('projects', ProjectController::class);

    /*
    | Tasks
    */
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');
    Route::post('/tasks/{task}/status', [TaskController::class, 'updateStatus'])->name('tasks.status');

    /*
    | Kanban (🔥 drag & drop)
    */
    Route::get('/kanban', [KanbanController::class, 'index'])->name('kanban.index');
    Route::post('/tasks/{task}/move', [KanbanController::class, 'updateStatus']);

    /*
    | Calendar
    */
    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');

    /*
    | Settings
    */
    Route::get('/settings', fn () => view('settings'))->name('settings');
    Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');

    /*
    | Other
    */
    Route::get('/about', fn () => view('about'))->name('about');
});