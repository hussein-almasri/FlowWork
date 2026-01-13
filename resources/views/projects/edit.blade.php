@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/pagebox.css">

<div class="page-box">
    <h1>Edit Project</h1>

    <form method="POST" action="{{ route('projects.update', $project->id) }}">
        @csrf
        @method('PUT')

        <label>Project Name:</label>
        <input type="text" name="name" value="{{ $project->name }}" required>

        <label>Description:</label>
        <input type="text" name="description" value="{{ $project->description }}" required>

        <!-- 🔥 اختيار أعضاء الفريق -->
        <label>Assign Team Members:</label>
        <select name="team_members[]" multiple required>
            @foreach ($teamMembers as $member)
                <option value="{{ $member->id }}"
                    {{ $project->team->contains($member->id) ? 'selected' : '' }}>
                    {{ $member->name }}
                </option>
            @endforeach
        </select>

        <p style="font-size:13px;color:#666">اضغط Ctrl لاختيار أكثر من عضو</p>

        <button type="submit" class="save-btn">Update Project</button>
    </form>
</div>
@endsection
