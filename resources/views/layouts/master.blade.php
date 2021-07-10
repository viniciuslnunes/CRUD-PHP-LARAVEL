<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>


<body>
    <style>
        .badge-ui {
            display: inline-block;
            padding: 6px 7px 7px;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container mx-auto">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" style="color: white; padding:8px; cursor:pointer ">
                        <a>Bem vindo(a), {{ auth()->user()->name ?? 'Convidado' }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clientes.index') }}">Listagem de clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('clientes.create') }}">Cadastro de clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('relatorios.index') }}">Relatórios</a>
                    </li>
                    <li class="nav-item">
                        <a class="mega-menu" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="zmdi zmdi-power"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <div class="container mx-auto">
        @yield('content')
    </div>
    <script>
        $(".navbar-toggler").on('click', function() {
            $("html").toggleClass("nav-open");
        });
        //=============================================================================
        $('.form-control').on("focus", function() {
            $(this).parent('.input-group').addClass("input-group-focus");
        }).on("blur", function() {
            $(this).parent(".input-group").removeClass("input-group-focus");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>