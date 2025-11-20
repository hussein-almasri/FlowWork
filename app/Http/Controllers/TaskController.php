<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index'); // أنشئ الملف لو مش موجود
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // تخزين المهمة
        return redirect('/dashboard')->with('success', 'Task added successfully!');
    }
}
