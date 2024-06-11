<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/funcionarios/create.css') }}">
        <title>Novo Funcionário</title>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Criar Funcionário') }}
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
            <h1>Novo Funcionário</h1>
            <form action="{{ route('funcionarios.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome">
                </div>
                <div class="form-group">
                    <label for="funcao">Função:</label>
                    <input type="text" name="funcao">
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('funcionarios.store') }}" class="btn btn-secundary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>