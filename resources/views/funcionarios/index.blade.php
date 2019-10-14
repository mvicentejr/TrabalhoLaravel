@extends('layout')
@section('content')
<h2><center>Listar Funcionários</center></h2>

<br>
<form action="/funcionarios/create">
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Adicionar Novo</button>
        </div>
    </div>
</form>
<br>

<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cargo</th>
        <th>Data Matrícula</th>
        <th>Salário</th>
        <th></th>
    </tr>
    @foreach ($funcionarios as $funcionario)
        <tr>
            <td>{{$funcionario->id}}</td>
            <td>{{$funcionario->nome}}</td>
            <td>{{$funcionario->cargo}}</td>
            <td>{{$funcionario->data_matricula}}</td>
            <td>{{$funcionario->salario}}</td>
            <td>
                <form action="{{route('funcionarios.destroy', $funcionario->id)}}" method="POST">
                    <a class="btn btn-secondary" href="{{ route('funcionarios.show', $funcionario->id) }}">Mostrar</a>
                    <a class="btn btn-success" href="{{ route('funcionarios.edit', $funcionario->id) }}">Editar</a>
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger" type="submit">Remover</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<br>
<br>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

@endsection
