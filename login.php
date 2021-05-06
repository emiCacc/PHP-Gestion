<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Login</title>
</head>
<body>
<div class="login">
<h1>BIENVENIDO</h1>
<h2>Ingrese sus datos</h2>

 <form action="logica/loguear.php" method="POST">
 <br><br>
 <input type="text" name="usuario" placeholder="Ingrese su usuario">
 <br><br>
 <input type="password" name="clave" placeholder="Ingrese su clave">
 <br><br>
 <button type="submit" class="button">ENTRAR</button>
 <button type="reset" class="button">BORRAR</button>
 <br><br>
 <a href="loginToRegistro.php">¿No tiene cuenta? <b>Regístrese</b></a>

</form>
</div>

</body>
</html>

