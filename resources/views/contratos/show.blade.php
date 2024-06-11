<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/contratos/show.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contratos') }}
        </h2>
    </x-slot>
    <section class="contratoo-details">
      <div class="contratoo-content">
        <div class="contratoo-meta">
          <span class="contratoo-label">ID:</span>
          <span class="contratoo-info">{{ $contrato->id }}</span>
        </div>
        <div class="contratoo-meta">
          <span class="contratoo-label">Data:</span>
          <span class="contratoo-info">{{ $contrato->data }}</span>
        </div>
        <div class="contratoo-meta">
          <span class="contratoo-label">Valor Total:</span>
          <span class="contratoo-info">{{ $contrato->valor_total }}</span>
        </div>
        <div class="contratoo-meta">
          <span class="contratoo-label">Cliente:</span>
          <span class="contratoo-info">{{ $contrato->cliente->nome }}</span>
        </div>
      </div>
      <a href="{{ route('contratos.index') }}" class="btn-return">Voltar</a>
    </section>
  </x-app-layout>
