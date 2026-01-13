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
            padding:20px;
            border:1px solid #ddd;
            border-radius:12px;
            margin-bottom:15px;
            background:#fff;
        ">
            
            <h3 style="margin-bottom:5px;">{{ $project->name }}</h3>
            <p style="margin-bottom:10px;color:#555;">{{ $project->description }}</p>

            <p style="margin-bottom:15px;">
                <b>Team:</b> 
                @foreach ($project->team as $member)
                    {{ $member->name }}{{ !$loop->last ? ', ' : '' }}
                @endforeach
            </p>

            <!-- 🔥 أزرار Edit & Delete المتناسقة -->
            <div style="display:flex; gap:12px; align-items:center;">
                
                <a href="{{ route('projects.edit', $project->id) }}"
                   style="
                    min-width:90px;
                    text-align:center;
                    padding:10px 0;
                    background:#28a745;
                    color:white;
                    border-radius:8px;
                    text-decoration:none;
                    font-weight:600;
                    display:inline-block;
                   ">
                   Edit
                </a>

                <form action="{{ route('projects.destroy', $project->id) }}" 
                      method="POST"
                      onsubmit="return confirm('هل أنت متأكد من حذف المشروع؟');"
                      style="margin:0;">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            style="
                                min-width:90px;
                                padding:10px 0;
                                background:#dc3545;
                                color:white;
                                border:none;
                                border-radius:8px;
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
