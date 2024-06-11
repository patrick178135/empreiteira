<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/funcionarios/show.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Funcionários') }}
        </h2>
    </x-slot>
    <section class="funcionarioo-details">
      <div class="funcionarioo-content">
        <div class="funcionarioo-meta">
          <span class="funcionarioo-label">ID:</span>
          <span class="funcionarioo-info">{{ $funcionario->id }}</span>
        </div>
        <div class="funcionarioo-meta">
          <span class="funcionarioo-label">Nome:</span>
          <span class="funcionarioo-info">{{ $funcionario->nome }}</span>
        </div>
        <div class="funcionarioo-meta">
          <span class="funcionarioo-label">Função:</span>
          <span class="funcionarioo-info">{{ $funcionario->funcao }}</span>
        </div>
      </div>
      <a href="{{ route('funcionarios.index') }}" class="btn-return">Voltar</a>
    </section>
  </x-app-layout>
