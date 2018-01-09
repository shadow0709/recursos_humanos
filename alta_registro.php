
<!DOCTYPE HTML>
<html>

<link rel="stylesheet" type="text/css" href="publicar.css">

<script type="text/javascript" src="jquery.js"></script>
<script type='text/javascript'>
  $(document).ready(function(){
    $('#enviar').click(function(){
      var datos=$('#form_ajax').serialize();
      $.ajax({
        type:"POST",
        url:"alta_registro_2.php",
        data:datos,
        success:function(r){
          alert(r);
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



<h1 ><strong>REGISTRO</strong></h1>

<div id="publica_formulario">
<form method = "POST" id="form_ajax">

  <fieldset>
    <legend>Nombre</legend>
    <ol>
      <li>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Elias"></input>
      </li>
      <li>
        <label for="ap_paterno">Apellido Paterno:</label>
        <input type="text" id="ap_paterno" name="ap_paterno" placeholder="Islas"></input>
      </li>
      <li>
        <label for="ap_materno">Apellido Materno:</label>
        <input type="text" id="ap_materno" name="ap_materno" placeholder="Rodriguez"></input>
      </li>
    </ol>
  </fieldset>

  <br/><br/>

  <fieldset>
    <legend>Direccion</legend>
    <ol>
      <li>
        <label for="calle">Calle:</label>
        <input type="text" id="calle" name="calle" placeholder="Rio Balsas #132"></input>
      </li>
      <li>
        <label for="colonia">Colonia:</label>
        <input type="text" id="colonia" name="colonia" placeholder="Indeco Xoxo"></input>
      </li>
      <li>
        <label for="municipio">Municipio:</label>
        <input type="text" id="municipio" name="municipio" placeholder="Santa Cruz Xoxocotlan"></input>
      </li>
      <li>
        <label for="cp">Codigo Postal:</label>
        <input type="tel" id="cp" name="cp" placeholder="17230"></input>
      </li>
      <li>
        <label for="lugar_nac">Lugar de Nacimiento:</label>
        <input type="text" id="lugar_nac" name="lugar_nac" placeholder="Oaxaca"></input>
      </li>
    </ol>
  </fieldset>

  <br/><br/>

  <fieldset>
    <legend>Contacto</legend>
    <ol>
      <li>
        <label for="tel_casa">Telefono de Casa:</label>
        <input type="tel" id="tel_casa" name="tel_casa" max="15" placeholder="951 442 9583"></input>
      </li>
      <li>
        <label for="tel_cel">Telefono Celular:</label>
        <input type="tel" id="tel_cel" name="tel_cel" max="15" placeholder="951 442 9583"></input>
      </li>
      <li>
        <label for="e_mail">Correo Electronico:</label>
        <input type="email" id="e_mail" name="e_mail" placeholder="algo@hotmail.com"></input>
      </li>
    </ol>
  </fieldset>

  <br/><br/>

  <fieldset>
    <legend>Informacion General</legend>
    <ol>
      <li>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" step="1" min="10" max="100" placeholder="30"></input>
      </li>
      <li>
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo">
          <option value="m">Masculino</option>
          <option value="f">Femenino</option>
        </select>
      </li>
      <li>
        <label for="peso">Peso:</label>
        <input type="number" id="peso" name="peso" step="0.01" min="10" max="500" placeholder="70"></input>
      </li>
      <li>
        <label for="estatura">Estatura:</label>
        <input type="number" id="estatura" name="estatura" step="0.01" min="1" max="3" placeholder="1.70"></input>
      </li>
    </ol>
  </fieldset>

  <br/><br/>

  <fieldset>
    <legend>Informacion</legend>
    <ol>
      <li>
        <label for="vive_con">Vive Con:</label>
        <select id="vive_con" name="vive_con">
          <option value="padres">Padres</option>
          <option value="familiares">Familiares</option>
          <option value="hijos">Hijos</option>
          <option value="solo">Solo</option>
        </select>
      </li>
      <li>
        <label for="estado_civil">Estado Civil:</label>
        <select id="estado_civil" name="estado_civil">
            <option value="soltero">Soltero</option>
            <option value="casado">Casado</option>
            <option value="divorciado">Divorciado</option>
            <option value="viudo">Viudo</option>
            <option value="union_libre">Union Libre</option>
        </select>
      </li>
      <li>
        <label for="curp">CURP:</label>
        <input type="text" id="curp" name="curp" max="18" placeholder="AAPR630321HDFLRC09"></input>
      </li>
      <li>
        <label for="rfc">RFC:</label>
        <input type="text" id="rfc" name="rfc" max="13" placeholder="1938547382942"></input>
      </li>
      <li>
        <label for="num_seg_social">Num. Seguridad Social:</label>
        <input type="text" id="num_seg_social" name="num_seg_social" max="12" placeholder="410239419375"></input>
      </li>
      <li>
        <label for="afore">Afore:</label>
        <input type="text" id="afore" name="afore" max="20" placeholder="________"></input>
      </li>
      <li>
        <label for="cart_serv_milit">Cartilla Servicio Militar:</label>
        <input type="text" id="cart_serv_milit" name="cart_serv_milit" max="12" placeholder="102391938512"></input>
      </li>
      <li>
        <label for="pasaporte">Pasaporte:</label>
        <input type="text" id="pasaporte" name="pasaporte" max="12" placeholder="102391938512"></input>
      </li>
      <li>
        <label for="lic_manejo">Licencia de Manejo:</label>
        <input type="text" id="lic_manejo" name="lic_manejo" max="8" placeholder="93847291"></input>
      </li>
      <li>
        <label for="tipo_lic_manejo">Tipo de Licencia de Manejo:</label>
        <select id="tipo_lic_manejo" name="tipo_lic_manejo">
          <option value="18">Menor de 18</option>
          <option value="a">A</option>
          <option value="b">B</option>
          <option value="c">C</option>
          <option value="d">D</option>
        </select>
      </li>
      <li>
        <label for="escolaridad">Escolaridad:</label>
        <select id="escolaridad" name="escolaridad">
          <option value="primaria">Primaria</option>
          <option value="secundaria">Secundaria</option>
          <option value="bachillerato">Bachillerato</option>
          <option value="carrera">Carrera</option>
          <option value="posgrado">Posgrado</option>
        </select>
      </li>
      <li>
        <label for="idiomas">Idiomas:</label>
        <input type="text" id="idiomas" name="idiomas" max="20" placeholder="español"></input>
    </li>
  </ol>
  </fieldset>

  <br/><br/>

  <fieldset>
    <legend>Capacitacion Previa</legend>
    <ol>
      <li>
        <label for="func_oficina">Funciones de Oficina:</label>
        <input type="text" id="func_oficina" name="func_oficina" max="50" placeholder=""></input>
      </li>
      <li>
        <label for="maquinaris">Maquinaria:</label>
        <input type="text" id="maquinaria" name="maquinaria" max="50" placeholder=""></input>
      </li>
      <li>
        <label for="software">Software:</label>
        <input type="text" id="software" name="software" max="50" placeholder=""></input>
      </li>
    </ol>
  </fieldset>

  <br/><br/>

    <button class="submit" name="enviar" id="enviar" value="enviar">Enviar</button>



</form>
</div>

<div id="msg">
</div>

</html>


