<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>
</head>
<body>
    <h1>Editar Tarefa: {{ $task->titulo }}</h1>
    <!-- aqui mostram os erros -->
    @if ($errors->any())
        <div style="color: red; background: #ffe6e6; padding: 10px; margin: 10px 0;">
            <strong>Erros:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- formulário de edição -->
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- campos do formulário -->
        <div style="margin: 15px 0;">
            <label for="titulo"><strong>Título:</strong></label><br>
            <input type="te\xt" id="titulo" name="titulo" value="{{ old('titulo', $task->titulo) }}" required style="width: 300px; padding: 5px;">
        </div>
        
        <div style="margin: 15px 0;">
            <label for="descricao"><strong>Descrição:</strong></label><br>
            <textarea id="descricao" name="descricao" rows="4" style="width: 300px; padding: 5px;">{{ old('descricao', $task->descricao) }}</textarea>
        </div>
        
        <div style="margin: 15px 0;">
            <label>
                <input type="checkbox" name="concluida" value="1" {{ $task->concluida ? 'checked' : '' }}>
                Tarefa concluída
            </label>
        </div>
        <!-- informações da tarefa -->
        <div style="background: #f0f0f0; padding: 10px; margin: 15px 0;">
            <h3>Informações da Tarefa:</h3>
            <p><strong>ID:</strong> {{ $task->id }}</p>
            <p><strong>Criada em:</strong> {{ $task->created_at->format('d/m/Y H:i') }}</p>
            <p><strong>Última atualização:</strong> {{ $task->updated_at->format('d/m/Y H:i') }}</p>
            <p><strong>Status:</strong> {{ $task->concluida ? 'Concluída' : 'Pendente' }}</p>
        </div>
        <!-- botões de salvar alterações, cancelar e voltar pra lista -->
        <div style="margin: 20px 0;">
            <button type="submit" style="padding: 10px 20px; background: green; color: white; border: none; margin-right: 10px;">
                Salvar Alterações
            </button>
            
            <a href="{{ route('tasks.index') }}" style="padding: 10px 20px; background: gray; color: white; text-decoration: none;">
                Cancelar
            </a>
        </div>
    </form>
    
    <hr>
    <a href="{{ route('tasks.index') }}">← Voltar para a lista</a>
</body>
</html>