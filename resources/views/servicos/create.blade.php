<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/servicos/create.css') }}">
        <title>Novo Serviço</title>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Criar Serviço') }}
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
            <form action="{{ route('servicos.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <input type="text" name="descricao" required>
                </div>
                <div class="form-group">
                    <label for="preco">Preço:</label>
                    <input type="number" name="preco" required>
                </div>
                <div class="form-group">
                    <label for="funcionario_id">Funcionário</label>
                    <select class="form-control" name="funcionario_id" required>
                        <option value="">Selecione uma funcionario</option>
                        @foreach($funcionarios as $funcionario)
                            <option value="{{ $funcionario->id }}">{{ $funcionario->nome }} ({{ $funcionario->funcao }})</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('servicos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>

