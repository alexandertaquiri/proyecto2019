<?php
//echo '<script> alert("usuario registrado")</script>';

session_start();
include("conexion.php");
$con=conectar();  
$n=$_POST['nombre'];
$a=$_POST['apellido'];
$d=$_POST['dni'];
$f=$_POST['fecha'];

$con=conectar();
       $resul=mysqli_query($con,"SELECT dni FROM usuarios  WHERE dni='$d' ");//verificamos si dni igual
      
        if(mysqli_num_rows($resul)==1){//si existe un usuario con el mismo dni
            echo '<script> alert("USUARIO EXISTENTE, INGRESE OTRO DNI");</script>';
            echo '<script> window.location ="registrarse.php";</script>';    
        }
        else{//si el usuario no existe se da de alta en la base de  datos;
            $query="INSERT INTO usuarios (nombre,apellido,dni,fecha_nacimiento)values('$n','$a','$d','$f')";
           // echo  $query;
            //die().

            $resul5=mysqli_query($con,$query);//doy de alta a usuario

            //$id=mysqli_insert_id($con);
        }
        if($resul5){  //SE INGRESO CORRECTAMENTE
           
            echo '<script> alert("usuario registrado")</script>';
            echo '<script> window.location = "index.php";</script>';
            //echo json_encode($resul5);
        }
        else{
          echo '<script> alert("NO SE PUDO CREAR SU CUENTA!! INTENTE NUEVAMENTE");</script>';
          echo '<script> window.location ="registrarse.php";</script>';
          //echo json_encode($resul5);
        }   
?>