<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>prueba</title>
<link rel="stylesheet" href="estilos.css"  type="text/css"/>

<style type="text/css">
<!--
body {
	background-image: url();
}
.Estilo3 {font-size: 10px}
-->
</style></head>

<body class="Estilo1" >

<div><center>

<table width="1500" height="917" border="0" align="center" >
  <tr align="center" valign="top">
    <td height="283" colspan="3" > <iframe src="banner.php"  align="center" frameborder="0" scrolling="no" width="1467" height="300"> </iframe> </td>
  </tr>
  <tr align="center" valign="top">
    <td height="215" colspan="3" > <iframe src="menu.php" align="center" frameborder="0" scrolling="no" width="1467" height="300" ></iframe></td>
  </tr>
  
  <tr>
    <td width="423" height="280" align="center" valign="middle">&nbsp;</td>
    <td width="423" height="280" align="center" valign="middle">
	<center>
        <?php
	class Usuario
	{
		public function registrar ($genero,$nombres,$fecha_de_nacimiento,$correo_electronico,$pais,$ciudad,$telefono,$ocupacion,$temas_de_interes,$novedades,$tipo_de_documento,$numero_de_documento,$contrasena,$confirmar_contrasena)
		{
			include('conexion.php');
			
			mysqli_query ($db, "INSERT INTO registro(genero,nombres,fecha_de_nacimiento,correo_electronico,pais,telefono,ciudad,ocupacion,temas_de_interes,novedades,tipo_de_documento,numero_de_documento,contrasena,confirmar_contrasena,fk_id_rol)
			
	VALUES ('$genero','$nombres','$fecha_de_nacimiento','$correo_electronico','$pais','$ciudad','$telefono','$ocupacion','$temas_de_interes','$novedades','$tipo_de_documento','$numero_de_documento','$contrasena','$confirmar_contrasena','2')")
or die(mysqli_error($db));
echo "Datos registrados correctamente!!!";
			
		}

	}
	
	$nuevo=new Usuario();
$nuevo->registrar($_POST["genero"],$_POST["nombres"],$_POST["fecha_de_nacimiento"],$_POST["correo_electronico"],$_POST["pais"],$_POST["ciudad"],$_POST["telefono"],$_POST["ocupacion"],$_POST["temas_de_interes"],$_POST["novedades"],$_POST["tipo_de_documento"],$_POST["numero_de_documento"],$_POST["contrasena"],$_POST["confirmar_contrasena"]);


	
    ?>
	</center>	</td>
    <td width="423" height="280" align="center" valign="middle">
	<center>
	</center>   </td>
  </tr>
  <tr align="center" valign="top">
    <td height="102" colspan="3" valign="bottom"> <iframe src="footer.php" align="center" frameborder="0" scrolling="no" width="1467" height="81"> </iframe></td>
  </tr>
</table>
</center>
</div>
<h1 align="center" class="Estilo1">&nbsp;</h1>


</body>


</html>
