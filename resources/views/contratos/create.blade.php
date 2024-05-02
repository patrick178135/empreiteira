<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/contratos/create.css') }}">
        <title>Novo Contrato</title>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Criar Contrato') }}
        </h2>
    </x-slot>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Sucesso!</strong>
        <span class="block sm:inline">{{ session('success') }}</div>
        </div>
    @endif
    <body>
        <div class="container">
            <form action="{{ route('contratos.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="data">Data:</label>
                    <input type="date" name="data" required>
                </div>
                <div class="form-group">
                    <label for="valor_total">Valor total:</label>
                    <input type="number" name="valor_total" required>
                </div>
                <div class="form-group">
                    <label for="cliente_id">Cliente</label>
                    <select class="form-control" name="cliente_id" required>
                        <option value="">Selecione uma cliente</option>
                        @foreach($clientes as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('contratos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>

