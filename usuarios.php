<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css">
  <title>Document</title>
</head>
<body>

<?php
require_once 'logica/conexion.php';
session_start();
$usuario = $_SESSION['username'];
?>

<!-- NAVBAR (USUARIOS - GESTION) -->
<p>
  <a class="button" href="paginaprincipal.php"> Inicio</a>
  <a class="button" href='logica/salir.php' value="Salir">Salir</a>

</p>

    <div class="caja_usuarios">
<h1> Menú de usuarios </h1>
<p><a href='registro.php'><input type='button' class="button" value='Nuevo Usuario'></a></p>
<?php
//echo "<a href='agregar_usuario.php'> [Nuevo Usuario] </a>";

$select = "SELECT * FROM usuarios";
$query = mysqli_query($conexion, $select);
$array = [];

if (mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_array($query)){
    array_push($array,$row);
  }
}
?>

<center><table>
    <thead>
      <tr>
          <th>ID</th>
          <th>Usuario</th>
          <th>Nombre</th>
          <th>Email</th>
          <th colspan="2"> Acciones </th>
      </tr>
    </thead>
  </div>
<?php
foreach ($array as $user){
  ?>
  <div class="caja_usuarios">
  <tr>
  <td><label  name= 'idu'><?php echo $user['id'];?></label></td>
  <td><label  name= 'usuario'><?php echo $user['usuario'];?></label></td>
  <td><label  name= 'nombre'><?php echo $user['nombre'];?></label></td>
  <td><label  name= 'email'><?php echo $user['email'];?></label></td>
  <td><input type='button' class="button" onclick="irModificar(<?php echo $user['id'];?>)" value='Editar'>
  <td><input type='button' class="button"  onclick="irEliminar(<?php echo $user['id'];?>)" value='Borrar'>
  </tr>
  </div>
<?php
}
?>

</table>

<script>
function irModificar(idUsuario){

  location.href="modifico_usuarios.php?id="+idUsuario;
  
}

function irEliminar(idUsuario){

location.href="elimino_usuarios.php?id="+idUsuario;

}
</script>

 
</body>
</html>
