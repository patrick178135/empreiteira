<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/funcionarios/index.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Funcionários') }}
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
                <a href="{{ route('funcionarios.create') }}" class="btn btn-primary">Novo Funcionário</a>
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
                        @foreach($funcionarios as $funcionario)
                        <tr>
                            <td>{{ $funcionario->id }}</td>
                            <td>{{ $funcionario->nome }}</td>
                            <td>{{ $funcionario->funcao }}</td>
                            <td>
                                <a href="{{ route('funcionarios.show', $funcionario->id) }}" class="btn btn-info">Detalhes</a>
                                <a href="{{ route('funcionarios.edit', $funcionario) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('funcionarios.destroy', $funcionario) }}" method="POST" style="display:inline;">
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
