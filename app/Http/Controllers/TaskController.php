<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $allTask = Task::all(); 
        return view('tasks.index', ['tasks' => $allTask]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|string',
            'due_date' => 'required',
        ]);

        $newTask = Task::create($data);

        return redirect(route('task.index'));
    }

    public function show(Task $id){
        return view('tasks.show', ['task' => $id]);
    }

    public function edit(Task $id){
        // dd($id);
        return view('tasks.edit', ['task' => $id]);
    }

    public function update(Task $id, Request $request){
        // dd($id);
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|string',
            'due_date' => 'required',
        ]);
       
        $id->update($data);

        return redirect(route('task.show',  ['id' => $id->id]))->with('Success', 'Task updated successfully!');
    }

    public function delete(Task $id){
        $id->delete();

        return redirect(route('task.index'))->with('Success', 'Task deleted successfully!');
    }
}

