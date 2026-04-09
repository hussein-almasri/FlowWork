@extends('layout.main')

@section('content')

<link rel="stylesheet" href="/css/dashboard.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="dashboard-wrapper">

    <h1 class="dashboard-title">
        Welcome, {{ auth()->user()->name }} 👋
    </h1>

    {{-- 1. STATISTICS --}}
    <div class="section">
        <h3>📊 Statistics</h3>

        <div class="grid">
            <div class="stat-box">Projects<br><b>{{ $projects }}</b></div>
            <div class="stat-box">Tasks<br><b>{{ $tasks }}</b></div>
            <div class="stat-box">Completed<br><b>{{ $completed }}</b></div>
            <div class="stat-box">Overdue<br><b>{{ $overdue }}</b></div>
        </div>
    </div>

    {{-- 2. CHART --}}
    <div class="section">
        <h3>📊 Tasks Analytics</h3>
        <canvas id="tasksChart"></canvas>
    </div>

    {{-- 3. RECENT TASKS --}}
    <div class="section">
        <h3>📝 Recent Tasks</h3>

        @if($recentTasks->count() == 0)
            <p>No recent tasks.</p>
        @else
            @foreach($recentTasks as $task)
                <p>
                    - {{ $task->name }}
                    (Deadline: {{ $task->deadline }})
                </p>
            @endforeach
        @endif
    </div>

    {{-- 4. ACTIVITY LOG --}}
    <div class="section">
        <h3>📌 Activity Log</h3>

        @if($activities->count() == 0)
            <p>No activity yet.</p>
        @else
            @foreach($activities as $activity)
                <p>
                    ✔ {{ $activity->user->name }}
                    {{ $activity->action }}
                    {{ $activity->target_type }}
                    "{{ $activity->target_name }}"
                </p>
            @endforeach
        @endif
    </div>

    {{-- 5. KANBAN (placeholder حالياً) --}}
    <div class="section">
        <h3>🗂 Kanban Board</h3>

        <div class="kanban">
            <div class="kanban-column">
                <h4>To Do</h4>
            </div>

            <div class="kanban-column">
                <h4>In Progress</h4>
            </div>

            <div class="kanban-column">
                <h4>Done</h4>
            </div>
        </div>
    </div>

    {{-- 6. CALENDAR --}}
    <div class="section">
        <h3>📅 Calendar</h3>
        <p>Project deadlines will appear here.</p>
    </div>

</div>

{{-- 🔥 CHART SCRIPT --}}
<script>
const ctx = document.getElementById('tasksChart');

new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['To Do', 'In Progress', 'Done'],
        datasets: [{
            data: [
                {{ $todo }},
                {{ $inProgress }},
                {{ $done }}
            ],
            backgroundColor: [
                '#f59e0b',
                '#3b82f6',
                '#10b981'
            ]
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'bottom'
            }
        }
    }
});
</script>

@endsection