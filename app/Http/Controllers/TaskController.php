<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // validate
        $request->validate([
            'name' => 'required',
            'deadline' => 'required|date',
            'priority' => 'required'
        ]);
        Task::create([
            'name' => $request->name,
            'deadline' => $request->deadline,
            'priority' => $request->priority,
            'project_id' => $request->project_id,
            'status' => $request->status,
        ]);


        // لاحقاً بنربطها بالDB
        return redirect()->route('tasks.index')->with('success', 'Task added successfully!');
    }
}
