<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/solicitacoes/index.css') }}">
        <script src="{{ asset('js/solicitacoes.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Solicitações') }}
        </h2>
    </x-slot>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('solicitacoes.create') }}" class="btn btn-primary">Solicitar novo serviço </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID solicitação</th>
                            <th>(ID contrato) Cliente </th>
                            <th>Preço final</th>
                            <th>Serviço (valor)</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($solicitacoes as $solicitacao)
                        <tr>
                            <td>{{ $solicitacao->id }}</td>
                            <td>({{ $solicitacao->contrato_id}}) {{ $solicitacao->contrato->cliente->nome }}</td>
                            <td>R${{ $solicitacao->preco_final }},00</td>
                            <td>{{ $solicitacao->servico->descricao}} (R${{ $solicitacao->servico->preco}},00)</td>
                            <td>
                                <a href="{{ route('solicitacoes.show', $solicitacao->id) }}" class="btn btn-info">Detalhes</a>
                                <a href="{{ route('solicitacoes.edit', $solicitacao) }}" class="btn btn-warning">Editar</a>
                                <form id ="form-{{ $solicitacao->id  }}" action="{{ route('solicitacoes.destroy', $solicitacao) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger" onclick ="deletar({{ $solicitacao->id }})">Deletar</button>
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
