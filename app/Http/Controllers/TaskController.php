<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index');
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required',
            'deadline' => 'required|date',
            'priority' => 'required'
        ]);

        Task::create([
            'name' => $request->name,
            'deadline' => $request->deadline,
            'priority' => $request->priority,
            'project_id' => $request->project_id || "1",
            'status' => $request->status || "todo",
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task added successfully!');
    }
    
}
