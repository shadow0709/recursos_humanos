<?php 
	$conexion=mysqli_connect('localhost','root','12345678','recursos_humanos');
	
	$id_r=$_POST['id_ref'];
	$puesto=$_POST['puesto'];
	$sucursal=$_POST['sucursal'];
	$fecha=$_POST['fecha_ingreso'];
	$estado=$_POST['activo'];
	
	$datos_generales=$_POST['datos_generales'];
	$solicitud_empleo=$_POST['solicitud_empleo'];
	$evaluacion_psicometrica=$_POST['evaluacion_psicometrica'];
	$estudio_sociolaboral=$_POST['estudio_sociolaboral'];
	$formato_referencias_laborales=$_POST['formato_referencias_laborales'];
	
	$copia_acta_nacimiento=$_POST['copia_acta_nacimiento'];
	$copia_curp=$_POST['copia_curp'];
	$copia_comprobante_estudios=$_POST['copia_comprobante_estudios'];
	$copia_comprobante_domicilio=$_POST['copia_comprobante_domicilio'];
	$copia_credencial_elector=$_POST['copia_credencial_elector'];
	$cartas_recomendacion=$_POST['cartas_recomendacion'];
	$licencia_manejo=$_POST['licencia_manejo'];
	$fotografias=$_POST['fotografias'];
	$contrato=$_POST['contrato'];
	$reglamento=$_POST['reglamento'];
	
	
	$sql1="INSERT INTO `empleado`(`id_ref`, `puesto`, `sucursal`, `fecha_ingreso`, `datos_generales`, `solicitud_empleo`, `evaluacion_psicometrica`, `estudio_sociolaboral`, `formato_referencias_laborales`, `copia_acta_naciemiento`, `copia_curp`, `copia_comprobante_estudios`, `copia_comprobante_domicilio`, `copia_credencial_elector`, `cartas_recomendacion`, `licencia_manejo`, `fotografias`, `contrato`, `reglamento`, `activo`) 
	VALUES ('$id_r','$puesto','$sucursal','$fecha','$datos_generales','$solicitud_empleo','$evaluacion_psicometrica','$estudio_sociolaboral','$formato_referencias_laborales','$copia_acta_nacimiento','$copia_curp','$copia_comprobante_estudios','$copia_comprobante_domicilio','$copia_credencial_elector','$cartas_recomendacion','$licencia_manejo','$fotografias','$contrato','$reglamento','$estado')";

	//$sql="INSERT into persona (rfc,nombre,direccion,cp,estado)
			//values ('$rfc','$nombre','$direccion','$cp','$estado')";
			
	echo mysqli_query($conexion,$sql1);
 ?>