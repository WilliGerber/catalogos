<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
        <link href="{{ asset('public/css/master.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset ('public/css/usuario-adicionar.css') }}">
        <title>Novo Usuário</title>
    </head>
    <body>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="{{route('catalogos')}}"> 
                <img class="logo" src="https://s3-sa-east-1.amazonaws.com/rocky-03e2ba4703ebb3280dd2bd099dfd585a/common/logo.png" alt="">
            </a>

        </nav>

    <div class="page-usuarios">
        <main>
            <form action="{{route('usuarios.salvar')}}" method="post">
                @include('usuarios._form')
                <button class="btn btn-success mt-4" type="submit">Salvar</button>
            </form>
        </main>
        
    </div>
    



