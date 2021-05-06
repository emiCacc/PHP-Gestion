<!-- A esta pagina solo se accede si el usuario NO TIENE CUENTA; entonces intenta registrarse.
La finalidad de esta pagina es que si el usuario se arrepiente de crear una cuenta, puede clickear en "Regresar"
y volverá al login. Ya que en la otra clase de registro ("registro.php") el usuario volvia al index ("paginaprincipal.php")-->
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
 <a href="login.php">Regresar</a>
 
</form>
</div>

</body>
</html>