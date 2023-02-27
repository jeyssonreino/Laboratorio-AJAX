<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="codigoajax.js"></script>

    <title>Prueba ajax</title>
</head>

<body>
    <div>

        <select name="col" onchange="mostrar_nomcol(this.value)">
            <option value="">Seleccione</option>

            <?php
            include('conexion.php');
            $sql = 'select * from colegios';
            $query = $con->query($sql);
            foreach ($query as $dato) {
            ?>

                <option value="<?php echo $dato['idcol'] ?>"><?php echo $dato['cnom'] ?></option>

            <?php } ?>



        </select>


        <div id="aqui">

        </div>
    </div>

</body>

</html>