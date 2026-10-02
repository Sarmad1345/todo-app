@extends('layouts.app')

@section('title', 'Add Todo')

@section('content')
    <div class="header">
        <h1>Add Todo</h1>
    </div>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf

        @include('todos._form')

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('todos.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
