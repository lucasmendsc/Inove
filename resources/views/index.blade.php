@extends('default.layout')
<form> <input type="text" value="{{ $cliente->nome }}" />
    <input type="text" value="{{ $cliente->cpf }}" />
</form>

<a href="{{ $indexUrl }}">Back</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Descriçao</th>
            <th scope="col">Empresa</th>

        </tr>
    </thead>
    <tbody>
        @for ($i = 1; $i <= 4; $i++)
            <th scope="row">1</th>
            <td>{{ $i }}</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
        @endfor
    </tbody>
</table>
