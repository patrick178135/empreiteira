<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/clientes/show.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>
    <section class="clientee-details">
      <div class="clientee-content">
        <div class="clientee-meta">
          <span class="clientee-label">ID:</span>
          <span class="clientee-info">{{ $cliente->id }}</span>
        </div>
        <div class="clientee-meta">
          <span class="clientee-label">Nome:</span>
          <span class="clientee-info">{{ $cliente->nome }}</span>
        </div>
        <div class="clientee-meta">
          <span class="clientee-label">Endereço:</span>
          <span class="clientee-info">{{ $cliente->endereco }}</span>
        </div>
        <div class="clientee-meta">
          <span class="clientee-label">Cidade:</span>
          <span class="clientee-info">{{ $cliente->cidade->nome }}</span>
        </div>
        <div class="clientee-meta">
          <span class="clientee-label">UF:</span>
          <span class="clientee-info">{{ $cliente->cidade->uf }}</span>
        </div>
      </div>
      <a href="{{ route('clientes.index') }}" class="btn-return">Voltar</a>
    </section>
  </x-app-layout>
