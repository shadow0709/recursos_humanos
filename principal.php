<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Desplegar</title>

  <link rel="stylesheet" type="text/css" href="hr.css">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#alta_registro').click(function(){
        $('#centro').load("alta_registro.php");
      });
    });

    $(document).ready(function(){
      $('#alta_empleado').click(function(){
        $('#centro').load("alta_empleado.php");
      });
    });

    $(document).ready(function(){
      $('#alta_organigrama').click(function(){
        $('#centro').load("alta_organigrama.php");
      });
    });

    $(document).ready(function(){
      $('#alta_sucursal').click(function(){
        $('#centro').load("alta_sucursal.php");
      });
    });
    
    $(document).ready(function(){
      $('#calendario').click(function(){
        $('#centro').load("index.php");
      });
    });
  </script>

</head>

<body>
  <div id="menu" class="menu">
        <ul id="nav">

          <a id="main_title" href="principal.php">RECURSOS HUMANOS</a>
          
          <input type="busqueda" id="busqueda" name="busqueda" align="left" autofocus="" onkeyup="searchSuggest()" onfocusout="deleteAutocomplete()">
          <button class="submit" name="enviar" value="enviar" onclick="consulta()">Buscar</button>


          <a id="alta_registro"  href="#">Alta Registro</a>
          <a id="alta_empleado" href="#">Alta Empleado</a>
	  <a id="alta_organigrama"  href="#">Alta Puesto</a>
          <a id="alta_sucursal" href="#">Alta Sucursal</a>
          
          <a id="calendario" href="#">Calendario de eventos</a>


          <a id="baja_registro"  href="#">Baja Registro</a>
          <a id="baja_empleado" href="#">Baja Empleado</a>

          <div id="menu_left" name="menu_left">
            <a id="reportes" href="#"></a>
            <a id="alta_clientes" href="#"></a>
          </div>

        </ul>

  </div>


  <div id="centro" class="centro">

  </div>

  <div id="search_suggest">

  </div>



</body>
</html>
