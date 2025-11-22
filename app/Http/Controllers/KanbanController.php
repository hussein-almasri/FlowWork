<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;

class KanbanController extends Controller
{
   public function index()
{
    $todo = [
        (object) ['name' => 'Task 1', 'priority' => 'High', 'deadline' => '2025-01-10'],
        (object) ['name' => 'Task 2', 'priority' => 'Low', 'deadline' => '2025-01-15'],
    ];

    $inProgress = [
        (object) ['name' => 'Task 3', 'deadline' => '2025-01-08'],
    ];

    $done = [
        (object) ['name' => 'Task 4'],
    ];

    return view('kanban.index', compact('todo', 'inProgress', 'done'));
}

=======
use App\Models\Task;

class KanbanController extends Controller
{
    public function index()
    {
        // Get tasks based on status
        $todo = Task::where('status', 'todo')->get();
        $inProgress = Task::where('status', 'in_progress')->get();
        $done = Task::where('status', 'done')->get();

        return view('kanban.index', compact('todo', 'inProgress', 'done'));
    }
>>>>>>> 3cafa3c14c5488658de336cea52e9522df12e173
}
