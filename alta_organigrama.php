<?php
include("blobconect.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="publicar.css">
	<title>Registrar puesto de trabajo</title>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#btnguardar').click(function(){
			var datos=$('#frmajax').serialize();
			$.ajax({
				type:"POST",
				url:"alta_organigrama2.php",
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
		<legend>REGISTRAR PUESTO DE TRABAJO</legend>
		
		<label>Puesto</label>
		<p></p>
		<input type="text" name="puesto" id="puesto">
		<p></p>
		</fieldset><br /><br />
		
		
		<center><button id="btnguardar">Registrar</button></center>
	</form>
</body>
</html>