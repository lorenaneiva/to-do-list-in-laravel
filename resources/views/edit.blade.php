<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa - {{ $task->titulo }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 20px auto;
            padding: 0 15px;
        }
        
        h1 {
            color: #333;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
        }
        
        .erros {
            background: #ffebee;
            color: #c62828;
            border: 1px solid #ffcdd2;
            padding: 10px;
            margin: 15px 0;
            border-radius: 4px;
        }
        
        .campo {
            margin: 15px 0;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        
        .checkbox {
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 15px 0;
        }
        
        .info {
            background: #f5f5f5;
            padding: 15px;
            border-radius: 4px;
            margin: 20px 0;
            border-left: 4px solid #2196F3;
        }
        
        .info p {
            margin: 8px 0;
        }
        
        .botoes {
            display: flex;
            gap: 10px;
            margin: 20px 0;
        }
        
        .salvar {
            background: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .cancelar {
            background: #757575;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
        }
        
        .voltar {
            display: inline-block;
            margin-top: 15px;
            color: #2196F3;
            text-decoration: none;
        }
        
        .voltar:hover {
            text-decoration: underline;
        }
        
        .status {
            display: inline-block;
            padding: 2px 8px;
            border-radius: 3px;
            font-size: 0.9em;
        }
        
        .concluida {
            background: #d4edda;
            color: #155724;
        }
        
        .pendente {
            background: #fff3cd;
            color: #856404;
        }
    </style>
</head>
<body>
    <!-- título da página -->
    <h1>Editar Tarefa: {{ $task->titulo }}</h1>
    
    <!-- aqui mostram os erros -->
    @if ($errors->any())
        <div class="erros">
            <strong>Erros:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <!-- FORMULÁRIO DE EDIÇÃO -->
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- TÍTULO -->
        <div class="campo">
            <label for="titulo">Título:</label>
            <input
                type="text"
                id="titulo"
                name="titulo"
                value="{{ old('titulo', $task->titulo) }}"
                required
            >
        </div>

        <!-- DESCRIÇÃO -->
        <div class="campo">
            <label for="descricao">Descrição:</label>
            <textarea
                id="descricao"
                name="descricao"
                rows="4"
            >{{ old('descricao', $task->descricao) }}</textarea>
        </div>

        <!-- CHECKBOX CONCLUÍDA -->
        <div class="checkbox">
            <input
                type="checkbox"
                id="completo"
                name="completo"
                value="1"
                {{ $task->completo ? 'checked' : '' }}
            >
            <label for="completo">Tarefa concluída</label>
        </div>

        <!-- INFORMAÇÕES DA TAREFA -->
        <div class="info">
            <h3>Informações da Tarefa:</h3>

            <p><strong>ID:</strong> {{ $task->id }}</p>

            <p><strong>Criada em:</strong>
                {{ $task->created_at->format('d/m/Y H:i') }}
            </p>

            <p><strong>Última atualização:</strong>
                {{ $task->updated_at->format('d/m/Y H:i') }}
            </p>

            <p>
                <strong>Status:</strong>
                <span class="status {{ $task->completo ? 'concluida' : 'pendente' }}">
                    {{ $task->completo ? 'Concluída' : 'Pendente' }}
                </span>
            </p>
        </div>

        <!-- BOTÕES -->
        <div class="botoes">
            <button type="submit" class="salvar">
                Salvar Alterações
            </button>

            <a href="{{ route('tasks.index') }}" class="cancelar">
                Cancelar
            </a>
        </div>
    </form>
    
    <a href="{{ route('tasks.index') }}" class="voltar">← Voltar para a lista</a>
</body>
</html>