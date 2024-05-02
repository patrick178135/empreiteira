<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/servicos/show.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Serviços') }}
        </h2>
    </x-slot>
    <section class="servicoo-details">
      <div class="servicoo-content">
        <div class="servicoo-meta">
          <span class="servicoo-label">ID:</span>
          <span class="servicoo-info">{{ $servico->id }}</span>
        </div>
        <div class="servicoo-meta">
          <span class="servicoo-label">Descrição:</span>
          <span class="servicoo-info">{{ $servico->descricao }}</span>
        </div>
        <div class="servicoo-meta">
          <span class="servicoo-label">Preço:</span>
          <span class="servicoo-info">{{ $servico->preco }}</span>
        </div>
        <div class="servicoo-meta">
          <span class="servicoo-label">Funcionário:</span>
          <span class="servicoo-info">{{ $servico->funcionario->nome }}</span>
        </div>
        <div class="servicoo-meta">
          <span class="servicoo-label">Função:</span>
          <span class="servicoo-info">{{ $servico->funcionario->funcao }}</span>
        </div>
      </div>
      <a href="{{ route('servicos.index') }}" class="btn-return">Voltar</a>
    </section>
  </x-app-layout>
