<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/solicitacoes/edit.css') }}">
        <script src="{{ asset('js/solicitacoes.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Solicitação</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Solicitação</h1>
            <form action="{{ route('solicitacoes.update', $solicitacao->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="preco_final">Preço final:</label>
                    <input type="text" name="preco_final" value="{{ $solicitacao->preco_final }}">
                </div>
                <div class="form-group">
                    <label for="contrato_id">Contrato</label>
                    <select class="form-control" name="contrato_id" required>
                        <option value="">Selecione uma contrato</option>
                        @foreach($contratos as $contrato)
                            <option value="{{ $contrato->id }}" {{ $contrato->id == $solicitacao->contrato_id ? 'selected' : '' }}>(ID Contrato:{{ $contrato->id}}) Cliente: {{ $contrato->cliente->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="servico_id">Serviço</label>
                    <select class="form-control" name="servico_id" required>
                        <option value="">Selecione uma servico</option>
                        @foreach($servicos as $servico)
                            <option value="{{ $servico->id }}" {{ $servico->id == $solicitacao->servico_id ? 'selected' : '' }}>{{ $servico->descricao}} (R${{ $solicitacao->servico->preco}},00)</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success" onclick="editado()">Salvar Alterações</button>
                <a href="{{ route('solicitacoes.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>

