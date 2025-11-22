<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;

class TeamController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        return view('team.index'); // اعمل الملف إذا مش موجود
=======
        $team = TeamMember::all();
        return view('team.index', compact('team'));
>>>>>>> 3cafa3c14c5488658de336cea52e9522df12e173
    }

    public function create()
    {
        return view('team.create');
    }

    public function store(Request $request)
    {
<<<<<<< HEAD
        // تخزين عضو جديد في الفريق

        return redirect('/dashboard')->with('success', 'Team member added!');
=======
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required'
        ]);

        TeamMember::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role
        ]);

        return redirect()->route('team.index')->with('success', 'Team member added successfully!');
>>>>>>> 3cafa3c14c5488658de336cea52e9522df12e173
    }
}
