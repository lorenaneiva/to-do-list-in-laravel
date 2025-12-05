<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
</head>
<body>
    <h1>Pagina inicial</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <input type="text" name="titulo" placeholder="Título" required>
    <input type="text" name="descricao" placeholder="Descrição">
    <button type="submit">Adicionar</button>
    </form>
<ul>
    @foreach ($tasks as $task)
        <li>
            {{ $task->titulo }}
        </li>
    @endforeach
</ul>

</body>
</html>