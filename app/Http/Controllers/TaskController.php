<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:3',
            'descricao' => 'nullable|string',
        ]);

        Task::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'completo' => false,
        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|min:3',
            'descricao' => 'nullable|string',
        ]);

        $task = Task::findOrFail($id);

        $task->update([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect('/');
    }

    public function toggleComplete($id)
    {
        $task = Task::findOrFail($id);

        $task->completo = !$task->completo;
        $task->save();

        return redirect('/');
    }
}
