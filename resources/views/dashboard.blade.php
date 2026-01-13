@extends('layout.main')

@section('content')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="/css/dashboard.css">
</head>
<body>

    <div class="dashboard-wrapper">

        <h1 class="dashboard-title">Welcome, {{ auth()->user()->name }} 👋</h1>

        {{-- 1. STATISTICS --}}
        <div class="section">
            <h3>📊 Statistics</h3>

            <div class="grid">
                <div class="stat-box">Projects<br><b>12</b></div>
                <div class="stat-box">Tasks<br><b>57</b></div>
                <div class="stat-box">Completed<br><b>19</b></div>
                <div class="stat-box">Overdue<br><b>5</b></div>
            </div>
        </div>

        {{-- 2. RECENT TASKS --}}
        <div class="section">
            <h3>📝 Recent Tasks</h3>
            <p>- Fix Login Bug (Deadline: 2025-01-12)</p>
            <p>- Create Dashboard UI (Deadline: 2025-01-10)</p>
            <p>- Update API Routes (Deadline: 2025-01-05)</p>
        </div>

        {{-- 3. PROJECT LIST --}}
        <div class="section">
            <h3>📁 Projects</h3>
            <p>- CRM System — Progress: 40%</p>
            <p>- HR System — Progress: 75%</p>
            <p>- Website Redesign — Progress: 20%</p>
        </div>

        {{-- 4. ACTIVITY LOG --}}
        <div class="section">
            <h3>📌 Activity Log</h3>
            <p>✔ Faisal completed task “Design Homepage”</p>
            <p>➕ Ali created new project “HR System”</p>
            <p>✏️ Sara updated task “Fix API Bug”</p>
        </div>

        {{-- 5. KANBAN BOARD --}}
        <div class="section">
            <h3>🗂 Kanban Board</h3>

            <div class="kanban">
                <div class="kanban-column">
                    <h4>To Do</h4>
                    <div class="kanban-task">Create Landing Page</div>
                    <div class="kanban-task">Set up Database</div>
                </div>

                <div class="kanban-column">
                    <h4>In Progress</h4>
                    <div class="kanban-task">Dashboard UI</div>
                </div>

                <div class="kanban-column">
                    <h4>Done</h4>
                    <div class="kanban-task">Login System</div>
                </div>
            </div>
        </div>

        {{-- 6. CALENDAR --}}
        <div class="section">
            <h3>📅 Calendar</h3>
            <p>Project deadlines will appear here.</p>
        </div>


    </div>

</body>
</html>
@endsection
 