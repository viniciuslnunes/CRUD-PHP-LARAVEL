@extends('layouts.master')
@section('title','Cadastrar Cliente')

@section('content')
<!-- <div class="container mx-auto mt-4">
            <table
                class="
                    table table-dark table-hover table-striped table-responsive
                "
            >
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Renda</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Mark</td>
                        <td><div class="badge-ui bg-danger">R$ 512</div></td>
                    </tr>
                    <tr>
                        <td scope="row">Jacob</td>
                        <td>
                            <div class="badge-ui bg-warning text-dark">
                                R$ 1.200
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Tanaca</td>
                        <td><div class="badge-ui bg-success">R$ 6.000</div></td>
                    </tr>
                </tbody>
            </table>
        </div> -->
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
            <!-- <th scope="col">Mês</th>
            <th scope="col">Dia</th>
            <th scope="col">Semana</th> -->
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
            <!-- <td>{{date('d-m-Y h:i:s', mktime(date('h'),date('i'),date('s'),date('m'),date('d')-30,date('Y')))."\n"}}</td>
            <td>{{date('d-m-Y h:i:s', mktime(date('h'),date('i'),date('s'),date('m'),date('d'),date('Y')))."\n"}}</td>
            <td>{{date('d-m-Y h:i:s', mktime(date('h'),date('i'),date('s'),date('m'),date('d')-7,date('Y')))."\n"}}</td> -->


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

@endsection