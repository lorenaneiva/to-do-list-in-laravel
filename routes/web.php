<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// ----------------------- PAGINA INDEX -----------------------

// Página inicial (lista tudo)
Route::get('/', [TaskController::class, 'index'])->name('tasks.index');

// Criar nova tarefa (AÇÃO)
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

// Marcar / desmarcar como concluída (AÇÃO)
Route::patch('/tasks/{id}/toggle', [TaskController::class, 'toggleComplete'])->name('tasks.toggle');

// Apagar tarefa (AÇÃO)
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');

// ----------------------- PAGINA EDIÇÃO -----------------------

// Página de edição (VIEW)
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

// Atualizar tarefa (AÇÃO)
Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');
