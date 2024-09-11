<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::query();

        if ($request->has('query')) {
            $tasks->where('title', 'like', '%' . $request->get('query') . '%');
        }

        return response()->json($tasks->get());
    }

    public function store(Request $request)
    {
        $task = Task::create([
            'title' => $request->title
        ]);

        return response()->json($task, 201);
    }
}

