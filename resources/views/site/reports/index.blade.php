@extends('layouts.master')
@section('title','Relatórios')

@section('content')
<div class="container mx-auto mt-4 row g-3 border p-4 rounded mt-4 cards">
            <div class="col">
                <div class="card-header cards fw-bold mb-4">
                    <b>Relatórios</b>
                </div>
                <div class="col-12 mt-2">
                    <nav class="nav nav-pills flex-column flex-sm-row">
                        <a
                            style="margin-right: .5rem!important"
                            class="text-sm-center time-button raise cards {{ request()->query('filter') === 'month' ? 'active' : '' }}"
                            aria-current="page"
                            href="{{ url('relatorios?filter=month')}}"
                            >Mês</a
                        >
                        <a  style="margin-right: .5rem!important" class="cards text-sm-center time-button raise {{ request()->query('filter') === 'week' ? 'active' : '' }}" href="{{ url('relatorios?filter=week')}}">Semana</a>
                        <a  style="margin-right: .5rem!important" class="cards text-sm-center time-button raise {{ request()->query('filter') === 'today' ? 'active' : '' }}" href="{{ url('relatorios?filter=today')}}">Hoje</a>
                    </nav>
                </div>
            </div>
            <div class="mt-4 justify-content-between">
                <div class="col-md-12 col-12">
                    <div class="card text-dark bg-light px-0 mb-4 cards">
                        <div class="card-header cards fw-bold">
                            +18 anos com renda média maior que a renda média
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
                <div class="col-md-12 col-12">
                    <div class="card text-dark bg-light px-0 mb-4 cards">
                        <div class="card-header cards fw-bold">
                            Quantidade de clientes por classe
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="row">
                                <div class="col-4 text-center">A</div>
                                <div class="col-4 text-center">B</div>
                                <div class="col-4 text-center">C</div>
                            </div>
                            @php
                                if (request()->query('filter')) {
                                    $classA = $clientsReport[request()->query('filter')]->filter(function ($report) {
                                        return $report['renda'] <= 980;
                                    });

                                    $classB = $clientsReport[request()->query('filter')]->filter(function ($report) {
                                        return $report['renda'] > 980 && $report['renda'] < 2500;
                                    });

                                    $classC = $clientsReport[request()->query('filter')]->filter(function ($report) {
                                        return $report['renda'] > 2500;
                                    });
                                } else {
                                    foreach ($clientsReport as $i => $report) {
                                        $classA = $report->filter(function ($report) {
                                            return $report['renda'] <= 980;
                                        });

                                        $classB = $report->filter(function ($report) {
                                            return $report['renda'] > 980 && $report['renda'] < 2500;
                                        });

                                        $classC = $report->filter(function ($report) {
                                            return $report['renda'] > 2500;
                                        });
                                    }
                                }
                            @endphp
                            <div class="row mt-2">
                                <div class="col-4 text-center">
                                    <div class="badge-ui bg-success cards">
                                        {{ $classA->count() }}
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="badge-ui bg-warning text-dark cards">
                                        {{ $classB->count() }}
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="badge-ui bg-danger cards">
                                        {{ $classC->count() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection