@extends('layouts.master')
@section('title','Cadastrar Cliente')

@section('content')
<table class="table table-striped table-bordered mt-4">
    @if (Session::has('success'))
    <div class="contact-form-success alert alert-success mt-4">
        {{ Session::get('success') }}
    </div>
    @endif

    <thead class="thead-dark">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Renda</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{$cliente->nome}}</td>
            <td>@if($cliente->renda <= 900 ) <div class="badge-ui danger">{{$cliente->renda}}</div>
                    @endif
                    @if($cliente->renda > 900 && $cliente->renda < 2500)
                    <div class="badge-ui warning">{{$cliente->renda}}</div>
                    @endif
                    @if($cliente->renda >= 2500)
                    <div class="badge-ui success">{{$cliente->renda}}</div>
                    @endif
            </td>
            <td>
                <form action="{{ route('clientes.destroy', $cliente->id)}}" method="post">
                    <a href="{{ route('clientes.show', $cliente->id)}}" class="btn btn-primary btn-sm">Detalhes</a>
                    <a href="{{ route('clientes.edit', $cliente->id)}}" class="btn btn-primary btn-sm">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $clientes->links() !!}
@endsection