<?php
include('conexion.php');
$col=$_GET['q'];
$sql = "select * from colegios where idcol ='$col'";
$res = $con->query($sql); 
echo "<br><table>";
foreach($res as $datos){
echo "<tr>";
echo "<th> ID </th>";
echo "<td>" . $datos['idcol'] . "</td></tr>";
echo "<tr><th> Nombre del Colegio </th>";
echo "<td>".  $datos['cnom']  ."</td></tr>";
echo "<tr><th> Dirección</th>";
echo "<td>".  $datos['cdir']  ."</td></tr>";
echo "<tr><th> Celular </th>";
echo "<td>".  $datos['ctel']  ."</td><tr>";
echo "<tr><th>Fecha Creación </th>";
echo "<td>".  $datos['fecha_creacion']  ."</td></tr>";
echo "<tr><th> Tipo </th>";
echo "<td> ". $datos['tipo']."</td>";
echo "</tr>";
}
$con->close();
echo "</table>";
?>