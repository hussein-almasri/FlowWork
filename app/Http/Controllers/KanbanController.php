<?php

namespace App\Http\Controllers;

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

}
