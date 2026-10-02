<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Models\Todo;

use Illuminate\View\View;
use App\Http\Requests\UpdateTodoRequest;



class TodoController
{
    public function index(): View
    {
        $todos = Todo::latest()->get();

        return view('todos.index', compact('todos'));
    }

    public function create(): View
    {
        return view('todos.create');
    }

    public function store(StoreTodoRequest $storeTodoRequest)
    {

        Todo::create([
            'title' => $storeTodoRequest->title,
            'description' => $storeTodoRequest->description,
        ]);

        return redirect()->route('todos.index')->with('success', 'Todo added.');
    }

    public function edit(Todo $todo): View
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(UpdateTodoRequest $updateTodoRequest, Todo $todo)
    {
        $todo->update([
            'title' => $updateTodoRequest->title,
        ]);

        return redirect()->route('todos.index')->with('success', 'Todo updated.');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return back()->with('success', 'Todo moved to trash.');
    }

    public function trash(): View
    {
        $todos = Todo::onlyTrashed()->latest('deleted_at')->get();

        return view('todos.trash', compact('todos'));
    }

    public function restore(Todo $todo)
    {
        $todo->restore();

        return back()->with('success', 'Todo restored.');
    }

    public function forceDelete(Todo $todo)
    {
        $todo->forceDelete();

        return back()->with('success', 'Todo permanently deleted.');
    }
}
