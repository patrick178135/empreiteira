<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/clientes/edit.css') }}">
        <script src="{{ asset('js/clientes.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Cliente</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Cliente</h1>
            <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $cliente->nome }}">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" value="{{ $cliente->endereco }}">
                </div>
                <div class="form-group">
                    <label for="cidade_id">Cidade</label>
                    <select class="form-control" name="cidade_id" required>
                        <option value="">Selecione uma cidade</option>
                        @foreach($cidades as $cidade)
                            <option value="{{ $cidade->id }}" {{ $cidade->id == $cliente->cidade_id ? 'selected' : '' }}>{{ $cidade->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success" onclick="editado()">Salvar Alterações</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>

