<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;

class CalendarController extends Controller
{
    public function index()
    {
        $projects = Project::select('name', 'deadline')->get();
        $tasks = Task::select('name', 'deadline')->get();

        return view('calendar.index', compact('projects', 'tasks'));
    }
}

