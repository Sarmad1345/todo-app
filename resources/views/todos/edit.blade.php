@extends('layouts.app')

@section('title', 'Edit Todo')

@section('content')
    <div class="header">
        <h1>Edit Todo</h1>
    </div>

    <form action="{{ route('todos.update', $todo) }}" method="POST">
        @csrf
        @method('PUT')

        @include('todos._form')

        <button type="submit" class="btn btn-primary">Update</button>
        <input type="submit" value="delete">
        <a href="{{ route('todos.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
