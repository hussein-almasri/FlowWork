<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return view('team.index'); // اعمل الملف إذا مش موجود
    }

    public function create()
    {
        return view('team.create');
    }

    public function store(Request $request)
    {
        // تخزين عضو جديد في الفريق

        return redirect('/dashboard')->with('success', 'Team member added!');
    }
}
