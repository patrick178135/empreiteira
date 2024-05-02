<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/solicitacoes/create.css') }}">
        <title>Nova Solicitação de serviço</title>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Criar Solicitção') }}
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
            <form action="{{ route('solicitacoes.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="preco_final">Preço Final:</label>
                    <input type="number" name="preco_final" required>
                </div> 
                <div class="form-group">
                    <label for="contrato_id">Contrato</label>
                    <select class="form-control" name="contrato_id" required>
                        <option value="">Selecione um contrato</option>
                        @foreach($contratos as $contrato)
                            <option value="{{ $contrato->id }}">(ID Contrato:{{ $contrato->id}}) Cliente: {{ $contrato->cliente->nome}}</option>
                        @endforeach
                    </select>
                </div>              
                <div class="form-group">
                    <label for="servico_id">Servico</label>
                    <select class="form-control" name="servico_id" required>
                        <option value="">Selecione um serviço</option>
                        @foreach($servicos as $servico)
                            <option value="{{ $servico->id }}">{{ $servico->descricao}} R${{ $servico->preco}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('solicitacoes.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>

