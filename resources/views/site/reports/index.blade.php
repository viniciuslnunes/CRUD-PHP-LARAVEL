@extends('layouts.master')
@section('title','Relatórios')

@section('content')
<div class="container mx-auto mt-4">
            <div class="row">
                <div class="col-8 d-flex flex-row align-items-center">
                    <b>Relatórios</b>
                </div>
                <div class="col-4">
                    <nav class="nav nav-pills flex-column flex-sm-row">
                        <a
                            class="text-sm-center nav-link active"
                            aria-current="page"
                            href="#"
                            >Mês</a
                        >
                        <a class="text-sm-center nav-link" href="#">Semana</a>
                        <a class="text-sm-center nav-link" href="#">Hoje</a>
                    </nav>
                </div>
            </div>
            <div class="row mt-4 justify-content-between">
                <div class="col-md-6 col-12">
                    <div class="card text-dark bg-light px-0 mb-4">
                        <div class="card-header fw-bold">
                            Acima de 18 com renda média maior
                        </div>
                        <div class="card-body">
                            <p class="fs-3 mb-0">150 clientes</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card text-dark bg-light px-0 mb-4">
                        <div class="card-header fw-bold">
                            Quantidade de clientes por classe
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="row">
                                <div class="col-4 text-center">A</div>
                                <div class="col-4 text-center">B</div>
                                <div class="col-4 text-center">C</div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-4 text-center">
                                    <div class="badge-ui bg-success">20</div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="badge-ui bg-warning text-dark">
                                        40
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="badge-ui bg-danger">90</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection