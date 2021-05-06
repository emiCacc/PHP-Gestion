<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="estilos.css">
            <title>Registro</title>
        </head>
            <body>
              <div class="login">
                    <h1>Nuevo Proyecto</h1>
                        <form action="logica/proyectos.php?variable_accion=1" method="POST">
                        <li><input type="text" name="proyecto" placeholder="Nombre del proyecto"></li>
                        <br>
                        <li><input type="number" name="id_usuario" placeholder="Usuario (solo ID)"></li>
                        <br>
                        <li><input type="text" name="titulo" placeholder="Título del proyecto"></li>
                        <br>
                        <li><input type="text" name="avance" placeholder="% realizado"></li>
                        <br>
                        <li><input type="date" name="fecha_limite"> Límite</li>
                        <br>
                        <button type="submit" class="button">ENVIAR</button>
                        <button type="reset" class="button">BORRAR</button>
                        <br><br>
                        <a href="paginaprincipal.php">Regresar</a>
                        </form>
                </div>
            </body>
    </html>