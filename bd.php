
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="ajax_plano.js"></script>
        <title>Ejemplo 3 - Cargar registreo de DB</title>
        
    </head>
    <body>
        <style>table,th,td {border : 1px solid black;  border-collapse: collapse;  }  th,td {padding: 2px;  }</style>
        <div id="carga" style="align-content: center; border: 1px solid black; padding: 10px;">
        <h2>Listado de Colegios </h2>
                <form action=""> 
                <select name="col" onchange="mostrar_col(this.value)">
                <option value="">Seleccione un colegio:</option>
                        <?php
                         include('conexion.php');
                         $sql='select * from colegios';
                         $res = $con->query($sql);
                         foreach($res as $datos){
                        ?>
                          <option value="<?php echo $datos['idcol']; ?>"><?php echo $datos['cnom']; ?></option>
                        <?php
                         }
                         $con->close();
                        ?>
                        </select>
                    </form>
                    <div id="info">
                    </div>
        </div>
    </body>
</html>