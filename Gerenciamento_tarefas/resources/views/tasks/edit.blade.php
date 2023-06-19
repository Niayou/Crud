<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Tarefa</title>
    <link rel="stylesheet" href="https://unpkg.com/chota@latest">
</head>
<body>
    <div class="container">
        <h1 class="title">Editar Tarefa</h1>

        <form method="post" action="{{ route('tasks.update', $task) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title" class="label">Título</label>
                <input type="text" class="input" name="title" id="title" value="{{ $task->title }}" required>
            </div>
            <div class="form-group">
                <label for="description" class="label">Descrição</label>
                <textarea class="input" name="description" id="description">{{ $task->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>

