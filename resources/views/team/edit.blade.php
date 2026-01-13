@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/pagebox.css">

<div class="page-box">

    <h1>Edit Team Member</h1>

    @if ($errors->any())
        <div style="color:red; margin-bottom:15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('team.update', $member->id) }}">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', $member->name) }}" required>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $member->email) }}" required>

        <label>Role:</label>
        <select name="role" required
                style="width:100%;padding:12px;border-radius:10px;border:1px solid #ccc;">
            <option value="Admin" {{ old('role', $member->role) == 'Admin' ? 'selected' : '' }}>Admin</option>
            <option value="Manager" {{ old('role', $member->role) == 'Manager' ? 'selected' : '' }}>Manager</option>
            <option value="Developer" {{ old('role', $member->role) == 'Developer' ? 'selected' : '' }}>Developer</option>
            <option value="Assistant" {{ old('role', $member->role) == 'Assistant' ? 'selected' : '' }}>Assistant</option>
        </select>

        <div style="display:flex; gap:10px; margin-top:20px;">
            <button type="submit" class="save-btn">Update Member</button>
            <a href="{{ route('team.index') }}" class="save-btn"
               style="background:#777;text-decoration:none;text-align:center;">
                Cancel
            </a>
        </div>
    </form>

</div>
@endsection
