<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        return view('tasks.index'); // أنشئ الملف لو مش موجود
=======
        return view('tasks.index');
>>>>>>> 3cafa3c14c5488658de336cea52e9522df12e173
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
<<<<<<< HEAD
        // تخزين المهمة
        return redirect('/dashboard')->with('success', 'Task added successfully!');
=======
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
>>>>>>> 3cafa3c14c5488658de336cea52e9522df12e173
    }
}
