@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-right">
                <h2><center>Mostrar Funcionário</center></h2>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-6 margin-tb">
        <div class="field">
            <strong>ID: </strong> {{$funcionario->id}}
        </div>
        <br>
        <div class="field">
            <strong>Nome: </strong> {{$funcionario->nome}}
        </div>
        <br>
        <div class="field">
            <strong>Cargo: </strong> {{$funcionario->cargo}}
        </div>
        <br>
        <div class="field">
            <strong>Data Matrícula: </strong> {{$funcionario->data_matricula}}
        </div>
        <br>
        <div class="field">
            <strong>Salário: </strong> R$ {{$funcionario->salario}}
        </div>
        <br>
        <a class="btn btn-primary" href="{{route('funcionarios.index')}}">Voltar</a>
    </div>
    </div>

@endsection
