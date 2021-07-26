@extends('default.layout')

<a href="../index">Back</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Razao</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($empresas as $e)
            <th scope="row">1</th>
            <td><?php echo $e['nome']; ?></td>
            <td><?php echo $e['cnpj']; ?></td>
            <td><?php echo $e['razao']; ?></td>
            </tr>
        @endforeach

    </tbody>
</table>
