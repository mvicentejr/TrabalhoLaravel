@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-right">
                <h2>Editar Funcionário</h2>
            </div>
        </div>
    </div>
    <br><br>
    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="field">
            <strong>ID: </strong> {{$funcionario->id}}
        </div>
        <div class="field">
            <strong>Nome: </strong>
            <div class="control">
                <input type="text" class="input" name="nome" value="{{$funcionario->nome}}">
            </div>
        </div>
        <div class="field">
            <strong>Cargo: </strong>
            <div class="control">
                <input type="text" class="input" name="cargo" value="{{$funcionario->cargo}}">
            </div>
        </div>
        <div class="field">
            <strong>Data da Matrícula: </strong>
            <div class="control">
                <input type="text" class="input" name="data_matricula" value="{{$funcionario->data_matricula}}">
            </div>
        </div>
        <div class="field">
            <strong>Salário: </strong>
            <div class="control">
                <input type="text" class="input" name="salario" value="{{$funcionario->salario}}">
            </div>
        </div>
        <br>
        <input type="submit" class="button is-success" value="Gravar">
        <input type="reset" class="button is-warning" value="Limpar">
        <a class="btn btn-primary" href="{{route('funcionarios.index')}}">Voltar</a>
    </form>

    <br><br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Opa!!!</strong>Existem erros na entrada de dados. <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

@endsection
