<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Agrega aquí tus enlaces a las librerías jQuery y Bootstrap -->
   
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Evaluacion</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src='js/login.js'></script>
</head>
<body>

<body>

<br>
<div class="container mt-3">
        <h2 class=" text-center link-success">GOOGLE CHROME COMPANY</a></h2>
        <img src="Gifs/giphy.gif" class="rounded float-start imagenpequeña" style="width: 150px;">
        <br><br>
        <br><br>
        <p><strong><em>Bienvenidos sean todos!</em></strong></p>
        <br><br>
        <div class="contenedorInfo">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Iniciar Sesion</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Registrarse</button>
                </div>
            </nav>
        <br>
        <br>

    </div>
<div class="container col-sm-4">
    <h2>Iniciar Sesión</h2>
    <br>
    <form id="formLogin">
        <div class="form-group">
            <label for="correo">Correo electrónico:</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
    </form>
</div>

<!-- Tus scripts JS -->
<script src='js/login.js'></script>
</body>
</html>

