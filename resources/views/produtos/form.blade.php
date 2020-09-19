<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Novo Produto</title>
</head>
<body>
@if(empty($produtos->id))
    <form action="/produto" method="post">
        @csrf
        <div>
            <h1>Cadastrar Produto</h1>
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="custo" placeholder="Custo">
            <input type="text" name="preco" placeholder="Preço">
            <input type="text" name="quantidade" placeholder="Quantidade">
            <div class="btn-register">
                <a class="btn-produto btn-cancel" onclick="javascript:location.href='/'">Cancelar</a>
                <button class="btn-produto" type="submit">Criar</button>
            </div>
        </div>
    </form>
@else
    <form action="/produto/{{ $produtos->id}}" method="post">
        @csrf
        <div>
            <h1>{{ $produtos->nome }}</h1>
            <input value="{{ $produtos->nome}}" type="text" name="nome" placeholder="Nome">
            <input value="{{ $produtos->custo}}" type="text" name="custo" placeholder="Custo">
            <input value="{{ $produtos->preco}}" type="text" name="preco" placeholder="Preço">
            <input value="{{ $produtos->quantidade}}" type="text" name="quantidade" placeholder="Quantidade">
            <div class="btn-register">
                <a class="btn-produto btn-cancel" onclick="javascript:location.href='/'">Cancelar</a>
                <button class="btn-produto" type="submit">Salvar</button>
            </div>
        </div>
    </form>
@endif
</body>
</html>



