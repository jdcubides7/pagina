@extends('connect.master')
@section('title','Art Grafic')
@section('content')
<script src="https://kit.fontawesome.com/486b5a1cdf.js" crossorigin="anonymous"></script>

<!--formulario de registro-->
<!--<div class="container">
    <form class="row g-3">
        <div class="col-4">
            <label for="emailInput" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailRegistro" placeholder="Escribe tu E-mail">
        </div>

        <div class="col-4">
            <label for="passwordInput" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Ingresa tu contraseña">
        </div>

        <div class="col-4">
            <label for="InputDireccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="InputDireccion" placeholder="Direccion">

        </div>

    </form> -->

<div>
    <!--buscador-->
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand">Art Grafic Ltda</a>
            <form class="d-flex" role="search">
                <!--<a href="#" class="btn1" type="submit">Registrarse</a>-->
                <!--<button type="button" class="btn btn-primary">Primary</button>-->
                <!--boton con clases-->
                <a class="btn-pagina" href="{{url('/pagina')}}">Art Grafic Inicio</a>
                <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
                <a class="btn-login" href="{{url('/login')}}">Ingresar</a>
            </form>
        </div>
</div>


<!--modal de confirmacion-->


<script>
    function confirmacion() {

        var respuesta = confirm("¿Quiere registrar la informacion?");
        if (respuesta == false) {
            alert('No se registro informacion en la base de datos');
            return false;
        } else {
            alert('Registro Exitosamente');
            return true;
        }
    }
</script>


<!-- ok formulario prueba-->

<body class="body-registro">
    <div>
        <form action="/registro" class="form-register" method="post"> <!--registro base de datos con metodo post-->
            @csrf
            <div>
                <h4 class="titulo1">Formulario de Registro</h4>
            </div>
            <div>
                <i class="fa-solid fa-hand"></i>
                <input class="input" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre" required />
            </div>
            <div>
                <i class="fa-regular fa-hand"></i>
                <input class="input" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido" required />
            </div>
            <div>
                <i class="fa-solid fa-envelope"></i>
                <input class="input" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" required /></i>
            </div>
            <div>
                <i class="fa-solid fa-phone"></i>
                <input class="input" type="text" name="telefono" id="telefono" placeholder="Ingrese su Telefono" required />
            </div>

            <label>Producto de su interes</label>

            <select class="selection" name="lenguajes" id="lang" required>
                <option value="Aplicacion Java">Aplicacion Java</option>
                <option value="Folleto">Folleto</option>
                <option value="Targetas">Targetas</option>
                <option value="Infografia">Infografia</option>
            </select>
            <!--  <input class="input" type="password" name="correo" id="correo" placeholder="Ingrese su Contraseña"> -->
            <input class="btn-registro" id="btnSave" type="submit" value="Registrar nuevo usuario" onclick="return confirmacion()" />

        </form>
    </div>
</body>



@stop