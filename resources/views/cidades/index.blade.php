<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/cidades/index.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Cidades') }}
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
                <a href="{{ route('cidades.create') }}" class="btn btn-primary">Nova Cidade</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>UF</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cidades as $cidade)
                        <tr>
                            <td>{{ $cidade->id }}</td>
                            <td>{{ $cidade->nome }}</td>
                            <td>{{ $cidade->uf }}</td>
                            <td>
                                <a href="{{ route('cidades.show', $cidade->id) }}" class="btn btn-info">Detalhes</a>
                                <a href="{{ route('cidades.edit', $cidade) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('cidades.destroy', $cidade) }}" method="POST" style="display:inline;">
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
