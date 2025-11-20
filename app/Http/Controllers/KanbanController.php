<?php

namespace App\Http\Controllers;

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
}
