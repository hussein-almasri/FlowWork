<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /* عرض المشاريع */
    public function index()
    {
        $projects = Project::with('team')->get();
        return view('projects.index', compact('projects'));
    }

    /* صفحة الإنشاء */
    public function create()
    {
        $teamMembers = TeamMember::all();
        return view('projects.create', compact('teamMembers'));
    }

    /* تخزين مشروع جديد */
    public function store(Request $request)
    {
        $project = Project::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // ربط أعضاء الفريق
        $project->team()->attach($request->team_members);

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully!');
    }

    /* صفحة التعديل */
    public function edit(Project $project)
    {
        $teamMembers = TeamMember::all();
        $project->load('team');

        return view('projects.edit', compact('project', 'teamMembers'));
    }

    /* تحديث المشروع */
    public function update(Request $request, Project $project)
    {
        $project->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // تحديث أعضاء الفريق
        $project->team()->sync($request->team_members);

        return redirect()->route('projects.index')
            ->with('success', 'Project updated successfully!');
    }
}

