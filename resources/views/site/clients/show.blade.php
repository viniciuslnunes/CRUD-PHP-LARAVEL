@extends('layouts.master')
@section('title','Detalhes do Cliente')


@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-list">
            <tbody>
                <tr>
                    <td class="title">Nome do cliente:</td>
                    <td>{{$clientes->nome}}</td>
                </tr>
                <tr>
                    <td class="title">CPF:</td>
                    <td>{{$clientes->cpf}}</td>
                    <td class="title">Data de Nascimento:</td>
                    <td>{{$clientes->data_nasc}}</td>
                </tr>
                <tr>
                    <td class="title">Data de Cadastro:</td>
                    <td>{{$clientes->data_cadastro}}</td>
                    <td class="title">Renda:</td>
                    <td>{{$clientes->renda}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection