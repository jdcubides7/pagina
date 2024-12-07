<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <!--iconos fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" />
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--archivo css-->
    <link rel="stylesheet" href="{{ url('/static/css/connect.css?v='.time()) }}" />
</head>

<body>
  <div>
    <!--buscador-->
    <nav class="navbar">
      <div class="container-fluid">
        <a class="navbar-brand">Art Grafic Ltda</a>
        <form class="d-flex" role="search">
          <!--<a href="#" class="btn1" type="submit">Registrarse</a>-->
          <!--<button type="button" class="btn btn-primary">Primary</button>-->
          <!--boton con clases-->
          <a class="btn-register" href="{{url('/registro')}}">Registrarse</a>
          <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
          <a class="btn-login" href="{{url('/login')}}">Ingresar a Art Grafic</a>
        </form>
      </div>
  </div>

  <!--carrousel -->




  <!--columnas
    <div class="container">
        <div class="row">
            <div class="col-3">hola columna</div>
            <div class="col-4">hola columna</div>
            <div class="col-5">hola columna</div>
        </div>
    </div>
-->
  <div id="Control" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ url('/static/img/file1.jpg') }}" class="d-block w-100" alt="banner 1" width="1500" height="250">
      </div>
      <div class="carousel-item">
        <img src="{{ url('/static/img/file2.jpg') }}" class="d-block w-100" alt="banner 2" width="1500" height="250">
      </div>
      <div class="carousel-item">
        <img src="{{ url('/static/img/file3.jpg') }}" class="d-block w-100" alt="banner 3" width="1500" height="250">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#Control" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#Control" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>

  <div>
    <img src="{{ url('/static/img/productos.jpg') }}" class="d-block w-100" alt="productos_img" width="1500" height="400">
  </div>
  </div>

  <div>
    <p>Contactanos: </p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>


@stop