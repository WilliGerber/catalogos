<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="LALD Home Cat¨¢logos">
    <meta property="og:title" content="Catalogos">
    <meta property="og:description" content="Pagina de catalogos dos fornecedores parceiros da LALD Home">
    <meta property="og:image" itemprop="image" content="https://catalogos.laldhome.com.br/public/img/catalogos.png">
    <meta property="og:type" content="website">
        
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('public/css/login.css')}}" rel="stylesheet">
  </head>
  <body class="principal">
    

    <main class="form-signin">
      
      <a href="https://www.laldhome.com.br"><img src="https://s3-sa-east-1.amazonaws.com/rocky-03e2ba4703ebb3280dd2bd099dfd585a/common/logo.png" alt=""></a>
      <form action="{{route('login.entrar')}}" method="post" >
        @csrf
        @if($errors->all())
          @foreach($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
            {{$error}}
          </div>
          @endforeach
        @endif

        <h1 class="">Acesse sua conta</h1>

        <div class="form-floating">
          <input type="email" class="form-control" name="email" id="floatingInput" placeholder="nome@email.com.br">
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" name="senha" id="floatingPassword" placeholder="Senha">
        </div>

        <!-- <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me">
          </label>
        </div> -->
        <button class="" type="submit">Entrar</button>
      </form>

      <div class="cadastre-se">
        <a href="{{route('usuarios.adicionar')}}">Cadastre-se</a>
      </div>
    </main>
    
  </body>
</html>
