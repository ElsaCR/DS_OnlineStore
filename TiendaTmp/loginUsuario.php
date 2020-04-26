<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css\loginUsr.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>INICIAR SESION</title>
</head>
<body>
    <!--Barra de navegacion-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Online Store</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="loginUsuario.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>   

    <!--Formulario-->
    <div class="wrapper">
        <h2>Iniciar Sesión</h2>
        <p>Ingresa tus datos.</p>
        <form action="" method="post">
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="emailUser" class="form-control"> 
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="contrasenia" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Iniciar Sesión">
            </div>
            <p>¿No tienes una cuenta? <a href="registro_Usuario.php"> Crear una cuenta</a>.</p>
        </form>
    </div>    
</body>
</html>