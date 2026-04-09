@extends('layout.main')

@section('content')

<style>
.kanban {
    display: flex;
    gap: 20px;
}
.column {
    flex: 1;
    background: #f3f4f6;
    padding: 15px;
    border-radius: 10px;
}
.task {
    background: white;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    cursor: grab;
}
</style>

<div class="kanban">

    <div class="column" ondrop="drop(event, 'todo')" ondragover="allowDrop(event)">
        <h3>To Do</h3>
        @foreach($todo as $task)
            <div class="task" draggable="true" ondragstart="drag(event)" data-id="{{ $task->id }}">
                {{ $task->name }}
            </div>
        @endforeach
    </div>

    <div class="column" ondrop="drop(event, 'in_progress')" ondragover="allowDrop(event)">
        <h3>In Progress</h3>
        @foreach($inProgress as $task)
            <div class="task" draggable="true" ondragstart="drag(event)" data-id="{{ $task->id }}">
                {{ $task->name }}
            </div>
        @endforeach
    </div>

    <div class="column" ondrop="drop(event, 'done')" ondragover="allowDrop(event)">
        <h3>Done</h3>
        @foreach($done as $task)
            <div class="task" draggable="true" ondragstart="drag(event)" data-id="{{ $task->id }}">
                {{ $task->name }}
            </div>
        @endforeach
    </div>

</div>

<script>
let taskId = null;

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    taskId = ev.target.getAttribute("data-id");
}

function drop(ev, status) {
    ev.preventDefault();

    fetch(`/tasks/${taskId}/move`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ status: status })
    })
    .then(() => location.reload());
}
</script>

@endsection