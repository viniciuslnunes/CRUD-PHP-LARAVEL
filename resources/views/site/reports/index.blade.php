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
                            class="text-sm-center nav-link {{ request()->query('filter') === 'month' ? 'active' : '' }}"
                            aria-current="page"
                            href="{{ url('relatorios?filter=month')}}"
                            >Mês</a
                        >
                        <a class="text-sm-center nav-link {{ request()->query('filter') === 'week' ? 'active' : '' }}" href="{{ url('relatorios?filter=week')}}">Semana</a>
                        <a class="text-sm-center nav-link {{ request()->query('filter') === 'today' ? 'active' : '' }}" href="{{ url('relatorios?filter=today')}}">Hoje</a>
                    </nav>
                </div>
            </div>
            <div class="row mt-4 justify-content-between">
                <div class="col-md-6 col-12">
                    <div class="card text-dark bg-light px-0 mb-4">
                        <div class="card-header fw-bold">
                            Clientes acima de 18 anos com renda média maior que a renda média de todos os clientes cadastrados deste {{ request()->query('filter') }}
                        </div>
                        <div class="card-body">
                            <p class="fs-3 mb-0">
                            @if (request()->query('filter'))
                                    {{ request()->query('filter') . ': ' . $clientsReport[request()->query('filter')]->count() }}
                                @else
                                    @foreach ($clientsReport as $i => $report)
                                        {{ $i . ': ' . $report->count() }}
                                        <br>
                                    @endforeach
                                @endif
                            </p>
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