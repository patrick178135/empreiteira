<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/cidades/show.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cidades') }}
        </h2>
    </x-slot>
    <section class="cidadee-details">
      <div class="cidadee-content">
        <div class="cidadee-meta">
          <span class="cidadee-label">ID:</span>
          <span class="cidadee-info">{{ $cidade->id }}</span>
        </div>
        <div class="cidadee-meta">
          <span class="cidadee-label">Nome:</span>
          <span class="cidadee-info">{{ $cidade->nome }}</span>
        </div>
        <div class="cidadee-meta">
          <span class="cidadee-label">UF:</span>
          <span class="cidadee-info">{{ $cidade->uf }}</span>
        </div>
      </div>
      <a href="{{ route('cidades.index') }}" class="btn-return">Voltar</a>
    </section>
  </x-app-layout>
