@extends('default.layout')



<a href="{{ $indexUrl }}">Back</a>
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
        @foreach ($arr as $a)
            <th scope="row">1</th>
            <td><?php echo $a['nome']; ?></td>
            <td><?php echo $a['cpf']; ?></td>
            <td><?php echo $a['email']; ?></td>
            </tr>
        @endforeach

    </tbody>
</table>
