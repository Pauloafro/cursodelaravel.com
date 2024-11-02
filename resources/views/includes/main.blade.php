<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- css do projecto-->
    <link rel="stylesheet" href="/css/style.css">
    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- fontes do projecto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
              <img src="/img/hdcevents_logo.svg" alt="HDC Events" >
            </a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/" class="navlink">Home</a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">Produtos</a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">Eventos</a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">Contactos</a>
              </li>
              <li class="nav-item">
                <a href="/events/createevents" class="nav-link">Criar Eventos</a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">Entrar</a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">Cadastrar</a>
              </li>
            </ul>
          </div>
        </nav>
    </header>
      <div class="container-fluid">
        <div class="row">
          @if(session('msg'))
          <p class="msg">{{session('msg')}}</p>
          @endif
          @yield('content')
        </div>
      </div>
    <center>
      <footer>
        <p>HDC Events  | &copy; 2020 | Todos os direitos reservados </p>
      </footer>
      </center>
</body>
</html>