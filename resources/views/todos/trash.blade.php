@extends('layouts.app')

@section('title', 'Trash')

@section('content')
    <div class="header">
        <h1>Trash</h1>
        <a href="{{ route('todos.index') }}" class="btn btn-secondary">&larr; Back to Todos</a>
    </div>

    @forelse ($todos as $todo)
        <div class="todo">
            <div>
                <div class="todo-title">{{ $todo->title }}</div>
                @if ($todo->description)
                    <div class="todo-desc">{{ $todo->description }}</div>
                @endif
                <div class="todo-desc">Deleted {{ $todo->deleted_at->diffForHumans() }}</div>
            </div>

            <div class="actions">
                <form action="{{ route('todos.restore', $todo) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-primary btn-small">Restore</button>
                </form>

                <form action="{{ route('todos.force-delete', $todo) }}" method="POST"
                      onsubmit="return confirm('Permanently delete this todo?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-small">Delete Forever</button>
                </form>
            </div>
        </div>
    @empty
        <div class="empty">Trash is empty.</div>
    @endforelse
@endsection
