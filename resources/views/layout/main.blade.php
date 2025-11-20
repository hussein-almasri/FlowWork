<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>

    <link rel="stylesheet" href="/css/topheader.css">
    <link rel="stylesheet" href="/css/sidebar.css">
</head>

<body>

<!-- TOP HEADER -->
<header class="top-header">
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" class="logo-image">
        <span class="logo-text">FlowWork</span>
    </div>

    <div class="nav-actions">

        <a href="/dashboard" class="nav-link">Home</a>
        <a href="/about" class="nav-link">About</a>
        <a href="/settings" class="nav-link">Settings</a>

    </div>

    <div class="logout-area">
        <form action="/logout" method="POST" class="logout-form">
            @csrf
            <button class="logout-btn">Logout</button>
        </form>
    </div>
</header>

<!-- SIDEBAR -->
<div class="sidebar">
    <a href="/projects">📁 Projects</a>
    <a href="/tasks">📝 Tasks</a>
    <a href="/team">👥 Team</a>
    <a href="/kanban">🗂 Kanban</a>
    <a href="/calendar">📅 Calendar</a>
</div>

<!-- MAIN CONTENT -->
<div class="page-content" style="margin-left:260px;">
    @yield('content')
</div>

</body>
</html>