<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
            display: flex;
            gap: 10px;
        }
        input {
            padding: 8px;
            border: 1px solid #bbb;
            border-radius: 4px;
        }
        button {
            padding: 8px 14px;
            border: none;
            background: #4CAF50;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        button.edit-btn {
            background: #FF9800;
            margin-left: 10px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: white;
            padding: 10px;
            margin-bottom: 6px;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .task-content {
            flex-grow: 1;
        }
        .task-actions {
            display: flex;
            gap: 8px;
        }
    </style>
</head>
<body>
    <h1>Página Inicial</h1>

    <form action="{{ route('tasks.store') }}" method="POST" class="mb-4">
        @csrf
        <input type="text" name="titulo" placeholder="Título" required>
        <textarea name="descricao" id="descricao"placeholder="Descrição"></textarea>
        <button type="submit">Adicionar</button>
    </form>

  <ul>
    @foreach ($tasks as $task)
        <li>

            <div class="task-content" style="display: flex; align-items: center; gap: 10px;">

                {{-- CHECKBOX CONCLUIR / DESCONCLUIR --}}
                <form action="{{ route('tasks.toggle', $task->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input 
                        type="checkbox" 
                        onchange="this.form.submit()"
                        {{ $task->completo ? 'checked' : '' }}
                    >
                </form>

                {{-- TÍTULO DA TAREFA --}}
                <strong style="{{ $task->completo ? 'text-decoration: line-through; color: gray;' : '' }}">
                    {{ $task->titulo }}
                </strong>

            </div>

            <div class="task-actions">

                {{-- EDITAR --}}
                <a href="{{ route('tasks.edit', $task->id) }}">
                    <button type="button" class="edit-btn">Editar</button>
                </a>

                {{-- EXCLUIR --}}
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: #e53935;">Excluir</button>
                </form>

            </div>
        </li>
    @endforeach
    </ul>


</body>
</html>