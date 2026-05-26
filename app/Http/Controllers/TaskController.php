<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Priority;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $priorities= Priority::all();
        $tasks = Task::all();
        
        return view('tasks.index', [
            'tasks' => $tasks,
            'categories'=>$categories,
            'priorities'=>$priorities
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable'
        ]);
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'is_completed' => false,
            'user_id' => 1
        ]);

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return redirect()
            ->route("tasks.index")
            ->with('status', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()
            ->route("tasks.index")
            ->with('status', 'Task deleted successfully!');
    }
}
