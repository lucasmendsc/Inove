@extends('default.layout')

<a href="../index">Back</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Empresa</th>
            <th scope="col">Quantidade</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $p)
            <th scope="row">1</th>
            <td><?php echo $p['nome']; ?></td>
            <td><?php echo $p['empresa']; ?></td>
            <td><?php echo $p['quantidade']; ?></td>
            </tr>
        @endforeach

    </tbody>
</table>
