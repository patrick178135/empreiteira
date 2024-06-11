<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/contratos/index.css') }}">
        <script src="{{ asset('js/contratos.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Contratos') }}
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
                <a href="{{ route('contratos.create') }}" class="btn btn-primary">Novo Contrato</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Data</th>
                            <th>Valor Total</th>
                            <th>Cliente</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contratos as $contrato)
                        <tr>
                            <td>{{ $contrato->id }}</td>
                            <td>{{ $contrato->data }}</td>
                            <td>${{ $contrato->valor_total }},00</td>
                            <td>{{ $contrato->cliente->nome }}</td>
                            <td>
                                <a href="{{ route('contratos.show', $contrato->id) }}" class="btn btn-info">Solicitações</a>
                                <a href="{{ route('contratos.edit', $contrato) }}" class="btn btn-warning">Editar</a>
                                <form id ="form-{{ $contrato->id  }}" action="{{ route('contratos.destroy', $contrato) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger" onclick ="deletar({{ $contrato->id }})">Deletar</button>
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
