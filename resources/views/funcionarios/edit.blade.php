<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/funcionarios/edit.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Funcionário</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Funcionário</h1>
            <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $funcionario->nome }}">
                </div>
                <div class="form-group">
                    <label for="funcao">Função:</label>
                    <input type="text" name="funcao" value="{{ $funcionario->funcao }}">
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>

