@extends('layouts.master')
@section('title','Cadastrar Cliente')

@section('content')
        <div class="container mx-auto mt-4">
            <form class="row g-3 border p-4 rounded mt-4">
                <div class="col-md-6 col-lg-4 mt-0">
                    <label for="nome" class="form-label">Nome: </label>
                    <input
                        type="nome"
                        class="form-control"
                        id="nome"
                        required
                        maxlength="150"
                    />
                </div>
                <div class="col-md-6 col-lg-4 mt-0">
                    <label for="cpf" class="form-label">CPF: </label>
                    <input
                        class="form-control"
                        id="cpf"
                        type="number"
                        maxlength="10"
                    />
                </div>
                <div class="col-md-6 col-lg-4">
                    <label for="date" class="form-label"
                        >Data de nascimento:
                    </label>
                    <input
                        type="date"
                        class="form-control"
                        id="date"
                        required
                    />
                </div>
                <div class="col-md-6 col-lg-4">
                    <label for="cadastro" class="form-label"
                        >Data de cadastro:
                    </label>
                    <input
                        type="date"
                        class="form-control"
                        id="cadastro"
                        required
                    />
                </div>
                <div class="col-12">
                    <label for="renda" class="form-label">Renda: </label>
                    <input type="number" class="form-control" id="renda" />
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">
                        Cadastro
                    </button>
                </div>
            </form>
        </div>     
    @endsection

