<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/solicitacoes/show.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Solicitações') }}
        </h2>
    </x-slot>
    <section class="solicitacaoo-details">
      <div class="solicitacaoo-content">
        <div class="solicitacaoo-meta">
          <span class="solicitacaoo-label">ID solcitção:</span>
          <span class="solicitacaoo-info">{{ $solicitacao->id }}</span>
        </div>
        <div class="solicitacaoo-meta">
          <span class="solicitacaoo-label">ID contrato:</span>
          <span class="solicitacaoo-info">{{ $solicitacao->contrato->id }}</span>
        </div>
        <div class="solicitacaoo-meta">
          <span class="solicitacaoo-label">Data:</span>
          <span class="solicitacaoo-info">{{ $solicitacao->contrato->data }}</span>
        </div>
        <div class="solicitacaoo-meta">
          <span class="solicitacaoo-label">Cliente:</span>
          <span class="solicitacaoo-info">{{ $solicitacao->contrato->cliente->nome }}</span>
        </div>
        <div class="solicitacaoo-meta">
          <span class="solicitacaoo-label">Servicço:</span>
          <span class="solicitacaoo-info">{{ $solicitacao->servico->descricao }}</span>
        </div>
        <div class="solicitacaoo-meta">
          <span class="solicitacaoo-label">Funcionario (função)</span>
          <span class="solicitacaoo-info">{{ $solicitacao->servico->funcionario->nome }} - {{ $solicitacao->servico->funcionario->funcao }}</span>
        </div>
        <div class="solicitacaoo-meta">
          <span class="solicitacaoo-label">Preço Final:</span>
          <span class="solicitacaoo-info">R$ {{ $solicitacao->preco_final }},00</span>
        </div>
      </div>
      <a href="{{ route('solicitacoes.index') }}" class="btn-return">Voltar</a>
    </section>
  </x-app-layout>
