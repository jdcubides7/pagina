@extends('connect.master')
@section('title','Art Grafic')
@section('content')
<script src="https://kit.fontawesome.com/486b5a1cdf.js" crossorigin="anonymous"></script>


<div>
    <!--buscador-->
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand">Art Grafic Ltda</a>
            <form class="d-flex" role="search">
                <!--<a href="#" class="btn1" type="submit">Registrarse</a>-->
                <!--<button type="button" class="btn btn-primary">Primary</button>-->
                <!--boton con clases-->
                <a class="btn-pagina-inicio" href="{{url('/pagina')}}">Art Grafic</a>
                <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
                <a class="btn-registro-datos" href="{{url('/registro')}}">Registrarse</a>
            </form>
        </div>
</div>


<body class="body-login">
    <div>
        <form action="/login" class="form-register" method="post"> <!--registro base de datos con metodo post-->
            @csrf
            <div>
                <center>
                    <h4>Acceder al sistema</h4>
                </center>
            </div>
            <div>
                <i class="fa-solid fa-hand"></i>
                <input class="input" type="text" name="correo" id="correo" placeholder="Ingrese su Correo" required />
            </div>
            <div>
                <i class="fa-regular fa-hand"></i>
                <input class="input" type="password" name="password" id="password" placeholder="Ingrese su Contraseña" required />
            </div>
            <div>
                <label>Seleccione su rol: </label>
                <select class="selection" name="rol" id="rol" required>
                    <option value="admin" id="admin">Administrador</option>
                    <option value="usuario" id ="usuario">Usuario</option>
                </select>
            </div>


            <!--  <input class="input" type="password" name="correo" id="correo" placeholder="Ingrese su Contraseña"> -->
            <input class="btn-registro" id="btnSave" type="submit" value="Ingresar" />
        </form>
    </div>
</body>
@stop

<!--

INSERT INTO PRODUCTOS (ID,NOMBRE) VALUES(1,'FOLLETOS');
INSERT INTO PRODUCTOS (ID,NOMBRE) VALUES(2,'TARGETAS');
INSERT INTO PRODUCTOS (ID,NOMBRE) VALUES(3,'CARTAS');
INSERT INTO PRODUCTOS (ID,NOMBRE) VALUES(4,'TRABAJOS DE SQL');
INSERT INTO PRODUCTOS (ID,NOMBRE) VALUES(5,'APLICACIONES EN JAVA');



-->