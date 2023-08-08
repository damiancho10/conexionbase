<?php
    

// conexion simple al servidor//

if($conexion=mysqli_connect("localhost","root","", "futbol")){
    echo"<p> Ya tienes acceso al servidor para hacer las consultas </p>";

    //preparar  la consulta sql//

$consulta = "SELECT * FROM futbol";
//seleccionar la  BD y ejecutar las consultas//

mysqli_select_db( $conexion, "futbol");
$datos=mysqli_query($conexion, "SELECT DATABASE()");
}



?>