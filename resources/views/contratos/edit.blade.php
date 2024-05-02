<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/contratos/edit.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Contrato</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Contrato</h1>
            <form action="{{ route('contratos.update', $contrato->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="data">Data:</label>
                    <input type="date" name="data" value="{{ $contrato->data }}">
                </div>
                <div class="form-group">
                    <label for="valor_total">Valor total:</label>
                    <input type="text" name="valor_total" value="{{ $contrato->valor_total }}">
                </div>
                <div class="form-group">
                    <label for="cliente_id">Cliente</label>
                    <select class="form-control" name="cliente_id" required>
                        <option value="">Selecione uma cliente</option>
                        @foreach($clientes as $cliente)
                            <option value="{{ $cliente->id }}" {{ $cliente->id == $contrato->cliente_id ? 'selected' : '' }}>{{ $cliente->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('contratos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>

