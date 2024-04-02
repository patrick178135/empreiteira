<body>
    <div class="container">
        <h1>Nova Cidade</h1>
        <form action="{{ route('cidades.store') }}" method="POST">
            <!-- Token CSRF para proteção contra ataques CSRF -->
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome">
            </div>
            <div class="form-group">
                <label for="uf">UF:</label>
                <input type="text" name="uf">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('cidades.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
