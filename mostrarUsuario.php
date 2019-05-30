<?php
	include("conexion.php");
	$con=conectar();
    $result= mysqli_query($con, "SELECT  nombre, apellido, dni, fecha_nacimiento FROM usuarios order by  IdUsuario  desc limit 10");

       $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($row);

    
?>
