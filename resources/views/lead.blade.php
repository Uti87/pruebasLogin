<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard2.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>SitandPlug</title>
  </head>
  <body>
    <div class="d-flex">
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <img src="img/logo_blanco.png" class="img-fluid logo">
            </div>
            <hr>
            <div class="menu">
                <a href="/oficinas" class="d-block p-3"><i class="icon ion-md-home mr-2 lead"></i>Tus oficinas favoritas</a>
                <a href="/propuesta" class="d-block  p-3"><i class="icon ion-md-mail mr-2 lead"></i>Propuestas</a>
                <a href="/calendario" class="d-block  p-3"><i class="icon ion-md-calendar mr-2 lead"></i>Calendario</a>
                <a href="/perfil" class="d-block  p-3"><i class="icon ion-md-person mr-2 lead"></i>Perfil</a>
                <a href="/configuracion" class="d-block  p-3"><i class="icon ion-md-settings mr-2 lead"></i>Configuración</a>
            </div>
        </div>

        <div class="w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="d-flex position-relative d-inline-block">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn position-absolute btn-search" type="submit"><i class="icon ion-md-search"></i></button>
      </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
       
        <li class="nav-item dropdown">
            <div class="container">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="img/Captura1.PNG" class="img-fluid avatar rounded-circle mr-2 ">
          {{ Auth::user()->name }}
          </a>
          
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
@yield('oficinas')
  
  </body>
</html>

