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
				url:"alta_empleado2.php",
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
	
		<fieldset style="width:450px">
		<legend>PERSONAL</legend>
		
		<label>ID del Empleado (selecciona del registro)</label>
		<p></p>
		<?PHP
  		 //LLenar combos..... */
         $link = conectaobr();   
         $sql="select * from registro";
         $listasup = mysql_query($sql,$link); 
  		 ?>     
         <select name = "id_ref" id = "id_ref" >
                    <?php
                        while ($datos= mysql_fetch_array($listasup))
                        {	
                            echo '<option value = "'.$datos["id"].'">'.$datos["id"]." ,  ".$datos["ap_paterno"]." ".$datos["ap_materno"]." ".$datos["nombre"].'</option>';
                        }
                        mysql_free_result($listasup);
                    ?>
                </select>
		<p></p>
		
		<label>Puesto</label>
		<p></p>
		<?PHP
  		 //LLenar combos..... */
         $link = conectaobr();   
         $sql="select * from organigrama";
         $listasup = mysql_query($sql,$link); 
  		 ?>     
         <select name = "puesto" id = "puesto" >
                    <?php
                        while ($datos= mysql_fetch_array($listasup))
                        {	
                            echo '<option value = "'.$datos["puesto"].'">'.$datos["puesto"].'</option>';
                        }
                        mysql_free_result($listasup);
                    ?>
                </select>
		<p></p>
		
		
		<label>Sucursal</label>
		<p></p>
		<?PHP
  		 //LLenar combos..... */
         $link = conectaobr();   
         $sql="select * from sucursales";
         $listasup = mysql_query($sql,$link); 
  		 ?>     
         <select name = "sucursal" id = "sucursal" >
                    <?php
                        while ($datos= mysql_fetch_array($listasup))
                        {	
                            echo '<option value = "'.$datos["sucursal"].'">'.$datos["sucursal"].'</option>';
                        }
                        mysql_free_result($listasup);
                    ?>
                </select>
		<p></p>
		
		<label>Fecha de ingreso</label>
		<p></p>
		<input type="date" name="fecha_ingreso" id="fecha_ingreso">
		<p></p>
		
		<label>Activo</label>
		<p></p>
		<select name="activo" id="activo" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		
		</fieldset><br /><br />
		
		
		
		<fieldset style="width:450px">
		<legend>I. DOCUMENTOS INTERNOS</legend>
		<label>a) Datos Generales</label>
		<p></p>
		<select name="datos_generales" id="datos_generales" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		
		<label>b) Solicitud de empleo</label>
		<p></p>
		<select name="solicitud_empleo" id="solicitud_empleo" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		
		<label>c) Evaluaci&oacute;n Psicom&eacute;trica</label>
		<p></p>
		<select name="evaluacion_psicometrica" id="evaluacion_psicometrica" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		
		<label>d) Estudio sociolaboral</label>
		<p></p>
		<select name="estudio_sociolaboral" id="estudio_sociolaboral" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		
		<label>e) Formato referencias laborales</label>
		<p></p>
		<select name="formato_referencias_laborales" id="formato_referencias_laborales" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		</fieldset><br /><br />
		
		
		
		
		<fieldset style="width:450px">
		<legend>II. DOCUMENTOS PERSONALES</legend>
		<label>f) Copia de acta de nacimiento</label>
		<p></p>
		<select name="copia_acta_nacimiento" id="copia_acta_nacimiento" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		
		<label>g) Copia CURP</label>
		<p></p>
		<select name="copia_curp" id="copia_curp" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		
		<label>h) Copia de comprobante de estudios</label>
		<p></p>
		<select name="copia_comprobante_estudios" id="copia_comprobante_estudios" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		
		<label>i) Copia de comprobante de domicilio</label>
		<p></p>
		<select name="copia_comprobante_domicilio" id="copia_comprobante_domicilio" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		
		<label>j) Copia credencial de elector</label>
		<p></p>
		<select name="copia_credencial_elector" id="copia_credencial_elector" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		
		<label>k) 2 Cartas de recomendaci&oacute;n en original</label>
		<p></p>
		<select name="cartas_recomendacion" id="cartas_recomendacion" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		
		<label>l) Licencia de manejo</label>
		<p></p>
		<select name="licencia_manejo" id="licencia_manejo" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		
		<label>m) 2 Fotografias</label>
		<p></p>
		<select name="fotografias" id="fotografias" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		</fieldset><br /><br />
		

		
		<fieldset style="width:450px">
		<legend>III. DOCUMENTOS OFICIALES Y PROCESOS</legend>
		<label>n) Contrato (firma y huella todas las hojas)</label>
		<p></p>
		<select name="contrato" id="contrato" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		
		<label>o) Reglamento interior de trabajo (firma y huella todas las hojas)</label>
		<p></p>
		<select name="reglamento" id="reglamento" >
            <option value = "si">Si</option>
            <option value = "no">No</option>
        </select>
		<p></p>
		</fieldset><br /><br />
		
		
		
		<center><button id="btnguardar">Registrar</button></center>
	</form>
</body>
</html>