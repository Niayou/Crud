<!-- <!DOCTYPE html>
<html>
<head>
    <title>Tarefas</title>
    <link rel="stylesheet" href="https://unpkg.com/chota@latest">
</head>
<body>
    <div class="container">
        <h1 class="title">Tarefas</h1>
        <ul class="list-unstyled">
            @foreach($tasks as $task)
                <li class="card">
                    <div class="card-body">
                        <h3>{{ $task->title }}</h3>
                        <p>{{ $task->description }}</p>
                        <div class="btn-group">
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-error">Editar</a>
                            <form method="post" action="{{ route('tasks.destroy', $task) }}" style="display: inline-block;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-error">Excluir</button>
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

        <a href="{{ route('tasks.create') }}" class="btn btn-error">Nova Tarefa</a>
    </div>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
    <title>Tarefas</title>
    <link rel="stylesheet" href="https://unpkg.com/chota@latest">
    <style>
        .btn-error, .btn-success, .btn-create {
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 3px;
            display: inline-block;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .btn-error {
            background-color: #ff4136;
            color: #fff;
        }

        .btn-success {
            background-color: #2ecc71;
            color: #fff;
        }

        .btn-create {
            background-color: #2ecc71;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Tarefas</h1>
        <ul class="list-unstyled">
            @foreach($tasks as $task)
                <li class="card">
                    <div class="card-body">
                        <h3>{{ $task->title }}</h3>
                        <p>{{ $task->description }}</p>
                        <div class="btn-group">
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-success">Editar</a>
                            <form method="post" action="{{ route('tasks.destroy', $task) }}" style="display: inline-block;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-error">Excluir</button>
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

        <a href="{{ route('tasks.create') }}" class="btn btn-create">Nova Tarefa</a>
    </div>
</body>
</html>