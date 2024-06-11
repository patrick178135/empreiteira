<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/servicos/edit.css') }}">
        <script src="{{ asset('js/servicos.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Servico</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Servico</h1>
            <form action="{{ route('servicos.update', $servico->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="descricao">Descição:</label>
                    <input type="text" name="descricao" value="{{ $servico->descricao }}">
                </div>
                <div class="form-group">
                    <label for="preco">Preço:</label>
                    <input type="number" name="preco" value="{{ $servico->preco }}">
                </div>
                <div class="form-group">
                    <label for="funcionario_id">Funcionário</label>
                    <select class="form-control" name="funcionario_id" required>
                        <option value="">Selecione uma Funcionário</option>
                        @foreach($funcionarios as $funcionario)
                            <option value="{{ $funcionario->id }}" {{ $funcionario->id == $servico->funcionario_id ? 'selected' : '' }}>{{ $funcionario->nome }} ({{ $funcionario->funcao }})</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success" onclick="editado()">Salvar Alterações</button>
                <a href="{{ route('servicos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>

