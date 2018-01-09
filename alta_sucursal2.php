<?php 
	$conexion=mysqli_connect('localhost','root','12345678','recursos_humanos');
	
$sucursal=$_POST['sucursal'];
	
	
	
	$sql1="INSERT INTO `sucursales`( `sucursal`) VALUES ('$sucursal')";

	//$sql="INSERT into persona (rfc,nombre,direccion,cp,estado)
			//values ('$rfc','$nombre','$direccion','$cp','$estado')";
			
	echo mysqli_query($conexion,$sql1);
 ?>