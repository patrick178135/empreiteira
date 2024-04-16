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