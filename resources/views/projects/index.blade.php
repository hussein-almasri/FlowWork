@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/pagebox.css">

<div class="page-box">

    <h1>Projects</h1>

    <a href="{{ route('projects.create') }}"
       style="
        padding:12px 20px;
        background:#0073e6;
        color:white;
        border-radius:10px;
        text-decoration:none;
        font-weight:600;
        display:inline-block;
        margin-bottom:20px;
       ">
       + Add New Project
    </a>

    <h2 style="margin-top:25px;">Your Projects</h2>

    @foreach ($projects as $project)
        <div style="
            padding:0px 20px 20px 20px;
            border:1px solid #ddd;
            border-radius:12px;
            margin-bottom:15px;
            background:#fff;
        ">

            <!-- HEADER (Project name + Tasks button same level) -->
            <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:10px;">
                <h3 style="font-size:32px; ">
                    {{ $project->name }}
                </h3>

                <a href="{{ route('tasks.index', ['project_id' => $project->id]) }}"
                   style="
                        padding:16px 32px;
                        font-size:18px;
                        font-weight:600;
                        border-radius:8px;
                        background:#272727;
                        color:white;
                        text-decoration:none;
                        display:inline-block;
                   ">
                    Manage Tasks
                </a>
            </div>

            <!-- Description -->
            <p style="margin-bottom:10px; color:#555; font-size:16px;">
                {{ $project->description }}
            </p>

            <!-- Team -->
            <div style="margin-bottom:8px;">
                <b style="font-size:12px;">Team:</b>
                 <ol style="display:inline-table; margin:0 0 0 10px; padding-left:20px;">
                    @foreach ($project->team as $member)
                        <li style="font-size: 12px; display:flexbox; margin-left:5px; color:#312424;">
                            {{ $member->name }}
                        </li>
                    @endforeach
                </ol>
            </div>

            <!-- Buttons -->
            <div style="display:flex; gap:12px; margin-top:8px;">

                <!-- Edit -->
                <form action="{{ route('projects.edit', $project->id) }}" method="GET" style="margin:0;">
                    <button type="submit"
                            style="
                                min-width:90px;
                                padding:10px 0;
                                background:#28a745;
                                color:white;
                                border-radius:8px;
                                border:none;
                                cursor:pointer;
                                font-weight:600;
                            ">
                        Edit
                    </button>
                </form>

                <!-- Delete -->
                <form action="{{ route('projects.destroy', $project->id) }}" 
                      method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this project?');"
                      style="margin:0;">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            style="
                                min-width:90px;
                                padding:10px 0;
                                background:#dc3545;
                                color:white;
                                border-radius:8px;
                                border:none;
                                cursor:pointer;
                                font-weight:600;
                            ">
                        Delete
                    </button>
                </form>

            </div>

        </div>
    @endforeach

</div>
@endsection
