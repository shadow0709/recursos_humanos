<?php 
	$conexion=mysqli_connect('localhost','root','12345678','recursos_humanos');
	
	$puesto=$_POST['puesto'];
	
	
	
	$sql1="INSERT INTO `organigrama`( `puesto`) VALUES ('$puesto')";

	//$sql="INSERT into persona (rfc,nombre,direccion,cp,estado)
			//values ('$rfc','$nombre','$direccion','$cp','$estado')";
			
	echo mysqli_query($conexion,$sql1);
 ?>