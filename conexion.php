<?php
//archivo conexion.php
function conectar(){
	$link=mysqli_connect('localhost','root','','usuario')
	or die("Error". mysql_error($link));
	return $link;
}
?>