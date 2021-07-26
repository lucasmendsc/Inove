@extends('default.layout')

<a href="../index">Back</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">E-mail</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $c)
            <th scope="row">1</th>
            <td><?php echo $c['nome']; ?></td>
            <td><?php echo $c['cpf']; ?></td>
            <td><?php echo $c['email']; ?></td>
            </tr>
        @endforeach

    </tbody>
</table>
