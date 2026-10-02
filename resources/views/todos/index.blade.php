@extends('layouts.app')

@section('title', 'My Todos')

@section('content')
    <div class="header">
        <h1>My Todos</h1>
        <div class="actions">
            <a href="{{ route('todos.trash') }}" class="btn btn-secondary">Trash</a>
            <a href="{{ route('todos.create') }}" class="btn btn-primary">+ Add Todo</a>
        </div>
    </div>

    @forelse ($todos as $todo)
        <div class="todo">
            <div>
                <div class="todo-title">{{ $todo->title }}</div>
                @if ($todo->description)
                    <div class="todo-desc">{{ $todo->description }}</div>
                @endif
            </div>

            <div class="actions">
                <a href="{{ route('todos.edit', $todo) }}" class="btn btn-secondary btn-small">Edit</a>

                <form action="{{ route('todos.destroy', $todo) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-small">Delete</button>
                </form>
            </div>
        </div>
    @empty
        <div class="empty">No todos here.</div>
    @endforelse
@endsection
