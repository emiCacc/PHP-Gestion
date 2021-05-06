<?php
require 'conexion.php';

$variable=null;
$variable_accion =0;

if (isset($_GET['variable_accion'])){
  
    $variable=$_GET['variable_accion'];
} 

if ($variable==2){
      
      echo "entro aca";
      $id_tarea=$_POST['id_tarea'];
      $nomb = $_POST['proyecto'];
      $tit = $_POST['titulo'];
      $fe = $_POST['fecha_limite'];
      $av = $_POST['avance'];
  
      $agregar = "UPDATE tareas SET proyecto='$nomb', titulo='$tit', fecha_limite=$fe, avance=$av where id_tarea=$id_tarea";
  
      //var_dump($insertar); exit();
    echo "agrega".$agregar;
      $query = mysqli_query($conexion, $agregar);
  
      if($query){
          ?>
          <script> alert('¡Proyecto editado con exito!'); 
          
                  location.href="../paginaprincipal.php";
          </script>";
          <?php
          
      }else{
          echo "<script> alert('¡Se produjo un error al editar el proyecto!'); </script>";
      }

}
//if (isset($_GET['variable_accion'])){
  // $variable_accion =1;
 //   echo "entro aca o no?";
//}

if ($variable == 1){
    //Crear nuevo registro
    $nomb = $_POST['proyecto'];
    $a = $_POST['id_usuario'];
    $tit = $_POST['titulo'];
    $fe = $_POST['fecha_limite'];
    $av = $_POST['avance'];

    $agregar = "INSERT INTO tareas (proyecto, id_usuario, titulo, fecha_limite, avance) VALUES ('$nomb', $a, '$tit', $fe, $av)";
    
    //echo "argregar".$agregar;
    //var_dump($insertar); exit();

    $query = mysqli_query($conexion, $agregar);

    if($query){
        ?>
        <script> alert('¡Proyecto creado con exito!'); 
        
                location.href="../paginaprincipal.php";
        </script>";
        <?php
        
    }else{
        echo "<script> alert('¡Se produjo un error al crear el proyecto!'); </script>";
    }
}

?>  