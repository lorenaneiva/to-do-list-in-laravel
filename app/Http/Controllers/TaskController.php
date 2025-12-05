<?php
    namespace App\Http\Controllers; 
    use App\Models\Task;
    use Illuminate\Http\Request;

    class TaskController extends Controller{
        public function index()
        {
            $tasks = Task::all();
            //busca todos os registros da tabela task ou seja mostra tudo que tiver naquela tabela, é realmente a página inicial das tarefas e armazena dentro da varioável $tasks
            return view ('tasks.index', compact('tasks'));
            //o compact cria um array com o nome do controller pega os dados e manda para a view
        }

        public function show($id){
            $task = Task::findOrFail($id);
            //cada tarefa recebe um id para a visualização correspondente, e busca no banco de dados o elemento correspondente ao id senão ele dá um erro, e armazena na variável
            return view('tasks.show', compact('task'));
        }
        public function create(){
            //apenas view de criação da tarefa
            return view('tasks.create');
        }
        public function store(Request $request){
            //validar dados do formulário,
            $request -> validate([
                'titulo' => 'required|min:3',
                'descricao' => 'nullable|string',]);
            Task::create([  //aqio ele ta criando a nova tarefa no banco depois de validar se os dados do formulário eram coerentes
                'titulo' => $request->titulo,
                'descricao' => $request->descricao,
                'completado' => false, // nova tarefa começa como não concluída
            ]);
            return redirect()->route('tasks.index');  
            //depois de fazer qaulquer ação ele é redirecionado para a pagina principal da tarefa
}       
        public function edit($id){
            $task = Task::findOrFail($id);
            //mesma coisa do outro, busca a tarefa por id para poder editar
            return view('tasks.edit', compact('task'));
}
}

//LOrena: por favor adiciona as rotas esqueci como que faz, falta os metodos de atualizar e apagar e marcar como concluido que eu acho bom a gente fazer