@extends('default.layout')
<a href="../index">Back</a>
<script type="text/javascript" src="../js/cliente.js"></script>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Descricao</th>
            <th scope="col">Açoes</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $p)
            <th scope="row">1</th>
            <td>{{ $p['nome'] }}</td>
            <td>{{ $p['quantidade'] }}</td>
            <td>{{ $p['descricao'] }}</td>
            <td>

                <div onclick="comprar({{$p['id']}},{{$p['quantidade']}})">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-cart-check" viewBox="0 0 16 16">
                        <path
                            d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                        <path
                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg>
                </div>

            </td>
            </tr>
        @endforeach

    </tbody>
</table>

<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
