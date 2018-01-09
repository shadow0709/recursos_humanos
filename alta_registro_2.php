<?php
  require("conexion.php");

	$ap_paterno = $_POST['ap_paterno'];
	$ap_materno = $_POST['ap_materno'];
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$sexo = $_POST['sexo'];
	$peso = $_POST['peso'];
	$estatura = $_POST['estatura'];
	$calle = $_POST['calle'];
	$colonia = $_POST['colonia'];
	$municipio = $_POST['municipio'];
	$cp = $_POST['cp'];
	$lugar_nac = $_POST['lugar_nac'];
	$tel_casa = $_POST['tel_casa'];
	$tel_cel = $_POST['tel_cel'];
	$e_mail = $_POST['e_mail'];
	$vive_con = $_POST['vive_con'];
	$estado_civil = $_POST['estado_civil'];
	$curp = $_POST['curp'];
	$rfc = $_POST['rfc'];
	$num_seg_social = $_POST['num_seg_social'];
	$afore = $_POST['afore'];
	$cart_serv_milit = $_POST['cart_serv_milit'];
	$pasaporte = $_POST['pasaporte'];
	$lic_manejo = $_POST['lic_manejo'];
	$tipo_lic_manejo = $_POST['tipo_lic_manejo'];
	$escolaridad = $_POST['escolaridad'];
	$idiomas = $_POST['idiomas'];
	$func_oficina = $_POST['func_oficina'];
	$maquinaria = $_POST['maquinaria'];
	$software = $_POST['software'];

  $check_query = "select * from registro where rfc = '$rfc' and curp = '$curp';";
  $check = mysqli_query($con, $check_query);
  $num_rows = $check->num_rows;
  if($num_rows > 0){
    echo "YA SE ENCUENTRA REGISTRADO";
  }else{
    $ver="insert into registro(ap_paterno, ap_materno, nombre, edad, sexo, peso, estatura, calle, colonia, municipio, cp, lugar_nac, tel_casa, tel_cel, e_mail, vive_con, estado_civil, curp, rfc, num_seg_social, afore, cart_serv_milit, pasaporte, lic_manejo, tipo_lic_manejo, escolaridad, idiomas, func_oficina, maquinaria, software) values('$ap_paterno', '$ap_materno', '$nombre', $edad, '$sexo', $peso, $estatura, '$calle', '$colonia', '$municipio', '$cp', '$lugar_nac', '$tel_casa', '$tel_cel', '$e_mail', '$vive_con', '$estado_civil', '$curp', '$rfc', '$num_seg_social', '$afore', '$cart_serv_milit', '$pasaporte', '$lic_manejo', '$tipo_lic_manejo', '$escolaridad', '$idiomas', '$func_oficina', '$maquinaria', '$software');";
    $ver2=mysqli_query($con,$ver);
    echo $ver;

  }
  mysqli_close($con);


 ?>
