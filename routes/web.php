<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/todos');

Route::get('todos/trash', [TodoController::class, 'trash'])->name('todos.trash');
Route::patch('todos/{todo}/restore', [TodoController::class, 'restore'])->name('todos.restore')->withTrashed();
Route::delete('todos/{todo}/force', [TodoController::class, 'forceDelete'])->name('todos.force-delete')->withTrashed();

Route::resource('todos', TodoController::class)->except('show');
