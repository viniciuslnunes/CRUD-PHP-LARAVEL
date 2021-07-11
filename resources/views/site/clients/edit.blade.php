@extends('layouts.master')
@section('title', 'Bem estar - Editar cliente')


@section('content')
<div class="card mt-4">
    <div class="card-body cards">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="{{ route('clientes.update', $clientes->id) }}">
            <div class="row">
                <div class="col">
                    @csrf
                    @method('PATCH')
                    <label for="nome">Nome:</label>
                    <input type="nome" class="form-control cards" name="nome"
                        value="{{ $clientes->nome }}" />   </div>
                <div class="col">
                <label for="cpf">CPF:</label>
                    <input type="cpf" class="form-control cards" id= "cpf" name="cpf" value="{{ $clientes->cpf }}" /> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="data_nasc">Data de Nascimento:</label>
                    <input type="date" class="form-control cards" name="data_nasc"
                        value="{{ $clientes->data_nasc }}" />
                </div>
                <div class="col">
                    <label for="data_cadastro">Data de Cadastro:</label>
                    <input type="date" class="form-control cards" name="data_cadastro" value="{{ $clientes->data_cadastro }}" />
                </div>
            </div>
            <div class="form-group">
                <label for="renda">Renda:</label>
                <input type="text" class="form-control cards" id ="renda" name="renda" value="{{ $clientes->renda }}" />
            </div>
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </form>
    </div>
</div>
<script type="text/javascript">
$("#celular").mask("(00) 90000-0000");
$("#cnpj").mask("00.000.000/0000-00");
</script>
@endsection