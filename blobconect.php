<?PHP
function conectaobr()
{
    $servidor="localhost";
    $usuario="root";
    $password="12345678";
    $vinculo = mysql_connect($servidor,$usuario,$password);
    if (!$vinculo)
    {
        die('Error de conexión' . mysql_error());
    }
    if (!mysql_select_db("recursos_humanos",$vinculo))
    {
        echo "Error seleccionando la base de datos.";
        exit();
    }
    return $vinculo;
}
    conectaobr();
?>

