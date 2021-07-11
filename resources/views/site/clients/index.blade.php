@extends('layouts.master')
@section('title','Cadastrar Cliente')

@section('content')
<table class="table table-striped table-bordered mt-4 cards">
    @if (Session::has('success'))
    <div class="contact-form-success alert alert-success mt-4">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="card-header cards fw-bold mt-4">
        Lista de Clientes
    </div>
    <form action="" method="GET">
        <div class="form-outline" style="margin: 20px 0;">
            <input type="text" name="search" class="cards" placeholder="Pesquisar...">
            <!-- <button type="submit">Enviar</button> -->
        </div>
    </form>

    <thead class="thead-dark">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Renda</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr class="tr-bottom">
            <td class="nome-cliente">{{$cliente->nome}}</td>
            <td class="renda-cliente">@if($cliente->renda <= 900 ) <div class="badge-ui danger cards">R$ {{ round($cliente->renda, 0) }}</div>
                    @endif
                    @if($cliente->renda > 900 && $cliente->renda < 2500) <div class="badge-ui warning cards">R$ {{ round($cliente->renda, 0) }}</div>
                        @endif
                        @if($cliente->renda >= 2500)
                        <div class="badge-ui success cards">R$ {{ round($cliente->renda, 0) }}</div>
                        @endif
            </td>
            <td>
                <form class="form-client" action="{{ route('clientes.destroy', $cliente->id)}}" method="post">
                    <a href="{{ route('clientes.show', $cliente->id)}}" class="btn btn-primary btn-sm mt-2 cards">Detalhes</a>
                    <a href="{{ route('clientes.edit', $cliente->id)}}" class="btn btn-primary btn-sm mt-2 cards">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm mt-2 cards" type="submit">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="cards">
{!! $clientes->links() !!}
</div>
@endsection