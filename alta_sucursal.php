<?php
include("blobconect.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="publicar.css">
	<title>Registrar persona</title>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#btnguardar').click(function(){
			var datos=$('#frmajax').serialize();
			$.ajax({
				type:"POST",
				url:"alta_sucursal2.php",
				data:datos,
				success:function(r){
					if(r==1){
						alert("agregado con exito");
					}else{
						alert("Fallo el server");
					}
				}
			});

			return false;
		});
	});
</script>
	
</head>
<body>
	<form id="frmajax" method="POST" align="center">
	
		<fieldset style="width:350px">
		<legend>REGISTRAR SUCURSALES</legend>
		
		<label>Sucursal</label>
		<p></p>
		<input type="text" name="sucursal" id="sucursal">
		<p></p>
		</fieldset><br /><br />
		
		
		<center><button id="btnguardar">Registrar</button></center>
	</form>
</body>
</html>