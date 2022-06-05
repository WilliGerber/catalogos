<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
        <link href="{{ asset('public/css/master.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="@yield('css')">
        <title>@yield('title')</title>
    </head>

    <body>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="{{route('catalogos')}}">
                <img class="logo" src="https://s3-sa-east-1.amazonaws.com/rocky-03e2ba4703ebb3280dd2bd099dfd585a/common/logo.png" alt="">
            </a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav px-3">
                <li class="sair nav-item text-nowrap">
                    <a class="nav-link" href="{{route('login.sair')}}">Sair</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar colapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('catalogos.lista')}}">
                                    <i class="fas fa-layer-group mr-2"></i>
                                    Catálogos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('fornecedores')}}">
                                    <i class="fas fa-layer-group mr-2"></i>
                                    Fornecedores
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('categorias')}}">
                                    <i class="fas fa-layer-group mr-2"></i>
                                    Categorias
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('usuarios')}}">
                                    <i class="fas fa-layer-group mr-2"></i>
                                    Usuários
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-betwen flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h3>@yield('title')</h3>
                    </div>
                    <div class="pt-2 pl-2 pr-2 pb-4 container-content">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>

        <footer>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
            <script src="{{ asset('js/master.js') }}"></script>
            <script src="@yield('js')"></script>
        </footer>
    </body>
</html>
