@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/pagebox.css">

<div class="page-box">
    <h1>Create New Project</h1>

    <form method="POST" action="{{ route('projects.store') }}">
        @csrf

        <label>Project Name:</label>
        <input type="text" name="name" required>

        <label>Description:</label>
        <input type="text" name="description" required>

        <button type="submit" class="save-btn">Save Project</button>
    </form>

</div>
@endsection