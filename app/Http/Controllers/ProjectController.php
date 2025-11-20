<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index');
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        // save later after DB setup

        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }



}