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
    <title>Produtos</title>
</head>
<body>
<h2>Lista de Produtos</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>Custo</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>
                <button class="btn-produto" onclick="javascript:location.href='/produto'">Adicionar Produto</button>
            </th>
        </tr>
        @forelse ( $produtos as $produto )
            <tr>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->custo }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->quantidade }}</td>
                <td class="btn-action">
                    <div>
                        <a href="produto/{{ $produto->id }}">
                            <img src="{{ asset('img/edit-3.svg')}}" alt="Edit">
                        </a>
                    </div>
                    <div>
                        <a href="destroy/{{ $produto->id }}">
                            <img src="{{ asset('img/trash-2.svg')}}" alt="Trash">
                        </a>
                    </div>
                </td>
            </tr>
        @empty
            <p>Nenhum produto cadastrado</p>
        @endforelse
    </table>
</body>
</html>
