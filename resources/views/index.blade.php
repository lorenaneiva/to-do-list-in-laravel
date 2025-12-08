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
        }
    </style>
</head>
<body>
 <h1>Página Inicial</h1>

    <form action="{{ route('tasks.store') }}" method="POST" class="mb-4">
        @csrf
        <input type="text" name="titulo" placeholder="Título" required>
        <input type="text" name="descricao" placeholder="Descrição">
        <button type="submit">Adicionar</button>
    </form>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->titulo }}</li>
        @endforeach
    </ul>

</body>
</html>