<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/contratos/index.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Solicitações de serviço') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('solicitacoes.create') }}" class="btn btn-primary">Nova solicitacao</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID Contrato</th>
                            <th>Cliente</th>
                            <th>ID Serviço</th>
                            <th>Serviço</th>
                            <th>Preço Final</th> 
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($solicitacoes as $solicitacao)
                        <tr>  
                            <td>{{ $solicitacao->contrato_id }}</td>
                            <td>{{ $solicitacao->contrato->cliente->nome }}</td>
                            <td>{{ $solicitacao->servico_id }}</td>
                            <td>{{ $solicitacao->servico->descricao}}</td>
                            <td>R${{ $solicitacao->preco_final }},00</td>
                            <td>
                                <a href="{{ route('solicitacoes.edit', $solicitacao) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('solicitacoes.destroy', $solicitacao) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Deletar</button>
                                    </form>
                            </td>        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>