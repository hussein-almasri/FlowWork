<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\ActivityLog;

class DashboardController extends Controller
{
    public function index()
{
    $userId = auth()->id();

    $projects = Project::where('user_id', $userId)->count();

    $tasks = Task::where('user_id', $userId)->count();

    $completed = Task::where('user_id', $userId)
        ->where('status', 'done')
        ->count();

    $overdue = Task::where('user_id', $userId)
        ->where('deadline', '<', now())
        ->where('status', '!=', 'done')
        ->count();

    // 🔥 NEW: recent tasks
    $recentTasks = Task::where('user_id', $userId)
        ->latest()
        ->take(5)
        ->get();
     $activities = ActivityLog::with('user')
            ->latest()
            ->take(5)
            ->get();
            $todo = Task::where('user_id', $userId)
    ->where('status', 'todo')
    ->count();

    $inProgress = Task::where('user_id', $userId)
        ->where('status', 'in_progress')
        ->count();

    $done = Task::where('user_id', $userId)
        ->where('status', 'done')
        ->count();

    return view('dashboard', compact(
    'projects',
    'tasks',
    'completed',
    'overdue',
    'recentTasks',
    'activities',
    'todo',
    'inProgress',
    'done'
));
}
}