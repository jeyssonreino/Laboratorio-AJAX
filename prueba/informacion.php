<?php 
include('conexion.php');
$valorurl = $_GET['q'];
$sql2= "select * from colegios where idcol ='$valorurl'";
$res= $con->query($sql2);

foreach($res as $respuestas){
    echo "<table>";
    echo "<thead>";
    echo "<tr><th>colegio</th>";
    echo "<th>id</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr><td>" . $respuestas['cnom'] . "<td> <td>" . $respuestas['idcol']. "</td></tr>";
    echo "</tbody>";
    echo "</table>";
}


?>