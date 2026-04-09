<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use App\Models\ActivityLog;

class ProjectController extends Controller
{
    /* show projects */
    public function index()
    {
       $projects = Project::with('team')
        ->where('user_id', auth()->id())
        ->get();
        return view('projects.index', compact('projects'));
    }

    /* create projects */
    public function create()
    {
        $teamMembers = TeamMember::all();
        return view('projects.create', compact('teamMembers'));
    }

    /* store new project */
    public function store(Request $request)
    {
            $project = Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => auth()->id(), // 🔥 هذا المهم
        ]);
        ActivityLog::create([
            'user_id' => auth()->id(),
            'action' => 'created',
            'target_type' => 'project',
            'target_name' => $project->name,
        ]);
        // ربط أعضاء الفريق
        $project->team()->attach($request->team_members);

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully!');
    }

    // this is to load the edit page with current project data
    public function edit(Project $project)
    {
        $teamMembers = TeamMember::all();
        $project->load('team');

        return view('projects.edit', compact('project', 'teamMembers'));
    }

    // this is update the values for the current project
    public function update(Request $request, Project $project)
    {
        $project->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        ActivityLog::create([
            'user_id' => auth()->id(),
            'action' => 'updated',
            'target_type' => 'project',
            'target_name' => $project->name,
        ]);

        // update team members
        $project->team()->sync($request->team_members);

        return redirect()->route('projects.index')
            ->with('success', 'Project updated successfully!');
    }
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')
            ->with('success', 'Project deleted successfully!');
    }
}

