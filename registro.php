<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Registro</title>
</head>
<body>
    

<div class = "login">
    <h1>CREAR CUENTA</h1>

 <form action="logica/registrar.php" method="POST">
 Usuario <input type="text" name="usuario" placeholder="Ingrese su usuario">
 <br><br>
 Contraseña <input type="password" name="clave" placeholder="Ingrese su clave">
 <br><br>
 Nombre <input type="text" name="nombre" placeholder="Ingrese su Nombre">
 <br><br>
  Email <input type="text" name="email" placeholder="Ingrese su email">
 <br><br>
 <p><button type="submit" class="button">ENVIAR</button>
 <button type="reset" class="button">BORRAR</button></p>
 <a href="usuarios.php">Regresar</a>
 
</form>
</div>

</body>
</html>