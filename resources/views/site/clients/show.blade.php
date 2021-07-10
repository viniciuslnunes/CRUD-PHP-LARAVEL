@extends('layouts.master')
@section('title','Detalhes do Cliente')


@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-list">
            <tbody>
                <tr>
                    <td class="title">Nome do cliente:</td>
                    <td>{{$clientes->nome_empresa}}</td>
                </tr>
                <tr>
                    <td class="title">CNPJ:</td>
                    <td>{{$clientes->cnpj}}</td>
                    <td class="title">Responsável:</td>
                    <td>{{$clientes->nome_responsavel}}</td>
                </tr>
                <tr>
                    <td class="title">Email:</td>
                    <td>{{$clientes->email}}</td>
                    <td class="title">Celular:</td>
                    <td>{{$clientes->celular}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection