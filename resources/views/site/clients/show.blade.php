@extends('layouts.master')
@section('title','Detalhes do Cliente')


@section('content')
<div class="cards">
    <div class="container mx-auto mt-4 row g-3 border p-4 rounded mt-4 cards">
        <div class="card-header cards fw-bold mb-4">
            Detalhes do Cliente
        </div>
        <table class="table table-list">
            <tbody>
                <tr class="cards">
                    <td class="title bold fw-bold">Nome do cliente:</td>
                    <td class="title">{{$clientes->nome}}</td>
                </tr>
                <tr class="cards" style="padding-top: 2.rem;">
                    <td class="title fw-bold">CPF:</td>
                    <td class="title">{{$clientes->cpf}}</td>
                    <td class="title fw-bold">Data de Nascimento:</td>
                    <td class="title">{{$clientes->data_nasc}}</td>
                </tr>
                <tr class="cards">
                    <td class="title fw-bold">Data de Cadastro:</td>
                    <td class="title">{{$clientes->data_cadastro}}</td>
                    <td class="title fw-bold">Renda:</td>
                    <td class="title">{{$clientes->renda}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection