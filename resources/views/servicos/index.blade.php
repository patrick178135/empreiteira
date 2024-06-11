<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/servicos/index.css') }}">
        <script src="{{ asset('js/servicos.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Servicos') }}
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
                <a href="{{ route('servicos.create') }}" class="btn btn-primary">Novo Serviço</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Funcionário</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($servicos as $servico)
                        <tr>
                            <td>{{ $servico->id }}</td>
                            <td>{{ $servico->descricao }}</td>
                            <td>{{ $servico->preco }}</td>
                            <td>{{ $servico->funcionario->nome }}</td>
                            <td>
                                <a href="{{ route('servicos.show', $servico->id) }}" class="btn btn-info">Detalhes</a>
                                <a href="{{ route('servicos.edit', $servico) }}" class="btn btn-warning">Editar</a>
                                <form id ="form-{{ $servico->id  }}" action="{{ route('servicos.destroy', $servico) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger" onclick ="deletar({{ $servico->id }})">Deletar</button>
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
