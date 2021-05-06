<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Editar usuario</title>
</head>
<body>
<?php 

require 'logica/conexion.php';

$id = $_GET["id"];

$query = "SELECT * FROM usuarios where id=$id";

$consulta = mysqli_query($conexion,$query);
$array = mysqli_fetch_array($consulta);

?>


 <center><form action = "logica/editar_usuario.php" method = "POST"> 
       
        <h1>Modificar usuario</h1>
        <input name="id" type="text" hidden="hidden" placeholder="id" value="<?php echo $array['id'] ?>">
        <p>Usuario: <input name="usuario" type="text" placeholder=" Nuevo nombre" value="<?php echo $array['usuario'] ?>"></p>
        <p>Clave: <input name="clave" type="text" placeholder=" Nueva Clave"value="<?php echo $array['clave'] ?>"></p>
        <p>Nombre: <input name="nombre" type="text" placeholder=" Nuevo Nombre"value="<?php echo $array['nombre'] ?>"></p>
        <p>Email: <input name="email" type="text" placeholder=" Nuevo Email"value="<?php echo $array['email'] ?>"></p>
        <input class="button" name="guardar" value="Actualizar" type="submit">
        <input class="button" type="button" value="Regresar" onclick="location='usuarios.php'"/><br>
            
        </form>
        </center>
</body>
</html>