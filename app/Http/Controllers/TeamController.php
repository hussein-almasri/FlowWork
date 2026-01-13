<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;

class TeamController extends Controller
{
    public function index()
    {
        $team = TeamMember::all();
        return view('team.index', compact('team'));
    }

    public function create()
    {
        return view('team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:team_members,email',
            'role'  => 'required'
        ]);

        TeamMember::create([
            'name'  => $request->name,
            'email' => $request->email,
            'role'  => $request->role
        ]);

        return redirect()->route('team.index')
                         ->with('success', 'Team member added successfully!');
    }

    public function edit($id)
    {
        $member = TeamMember::findOrFail($id);
        return view('team.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:team_members,email,' . $id,
            'role'  => 'required'
        ]);

        $member = TeamMember::findOrFail($id);
        $member->update([
            'name'  => $request->name,
            'email' => $request->email,
            'role'  => $request->role
        ]);

        return redirect()->route('team.index')
                         ->with('success', 'Team member updated successfully!');
    }

    public function destroy($id)
    {
        TeamMember::findOrFail($id)->delete();

        return redirect()->route('team.index')
                         ->with('success', 'Team member deleted successfully!');
    }
}
