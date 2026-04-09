<?php

namespace App\Http\Controllers;

use App\Models\Task;

class KanbanController extends Controller
{
   public function index()
{
    $userId = auth()->id();

    return view('kanban.index', [
        'todo' => Task::where('user_id', $userId)->where('status', 'todo')->get(),
        'inProgress' => Task::where('user_id', $userId)->where('status', 'in_progress')->get(),
        'done' => Task::where('user_id', $userId)->where('status', 'done')->get(),
    ]);

    }
    public function updateStatus(Request $request, Task $task)
{
    $task->update([
        'status' => $request->status
    ]);

    return response()->json(['success' => true]);
}
}
