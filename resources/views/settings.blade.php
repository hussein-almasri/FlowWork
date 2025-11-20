@extends('layout.main')

@section('content')
<link rel="stylesheet" href="/css/pagebox.css">
<div class="page-box">

    <h1>Settings</h1>

    <h2>User Profile</h2>
    <form method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
        @csrf

        <label>Name:</label>
        <input type="text" name="name" value="{{ auth()->user()->name }}">

        <label>Email:</label>
        <input type="email" name="email" value="{{ auth()->user()->email }}">

        <label>Change Password:</label>
        <input type="password" name="password">

        <button class="save-btn">Save Changes</button>
    </form>

    <h2>Preferences</h2>
    <ul>
        <li>🌙 Theme: Light / Dark</li>
        <li>🔔 Notifications: On / Off</li>
        <li>🌐 Language: English</li>
    </ul>

</div>
@endsection
