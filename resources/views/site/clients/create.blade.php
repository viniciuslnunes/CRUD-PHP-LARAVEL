@extends('layouts.master')
@section('title','Cadastrar Cliente')

@section('content')
<div class="container mx-auto mt-4">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form class="row g-3 border p-4 rounded mt-4 cards" method="POST" action="{{ route('clientes.store') }}">
        @csrf
        <div class="col-md-6 col-lg-6">
            <label for="nome" class="form-label">Nome: </label>
            <input type="nome" class="form-control cards" name="nome" id="nome" required maxlength="150" value="{{ old('nome') }}"/>
        </div>
        <div class="col-md-6 col-lg-6">
            <label for="cpf" class="form-label">CPF: </label>
            <input class="form-control cards" name="cpf" id="cpf" type="cpf" required maxlength="14" value="{{ old('cpf') }}" />
        </div>
        <div class="col-md-6 col-lg-6">
            <label for="data_nasc" class="form-label">Data de nascimento:
            </label>
            <input type="date" name="data_nasc" class="form-control cards" id="date" required/>
        </div>
        <div class="col-md-6 col-lg-6">
            <label for="data_cadastro" class="form-label">Data de cadastro:
            </label>
            <input type="date" name="data_cadastro" class="form-control cards" id="cadastro" required/>
        </div>
        <div class="col-md-6 col-lg-6">
            <label for="renda" class="form-label">Renda: </label>
            <input type="number" name="renda" class="form-control cards" id="renda"  value="{{ old('renda') }}"/>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary cards">
                Cadastro
            </button>
        </div>
    </form>
</div>
<script type="text/javascript">
$("#cpf").mask("000.000.000-00");
</script>
@endsection