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
    <td height="283" colspan="3" > <iframe src="banner3.php"  align="center" frameborder="0" scrolling="no" width="1902" height="200"> </iframe> </td>
  </tr>
  <tr align="center" valign="top">
    <td height="215" colspan="3" > <iframe src="menu_admi.php" align="center" frameborder="0" scrolling="no" width="1902" height="300" ></iframe></td>
  </tr>
  
  <tr>
    <td width="423" height="280" align="center" valign="middle">&nbsp;</td>
    <td width="423" height="280" align="center" valign="middle">
	<center>
        <?php
	class Superadministrador
	{
		public function registrar ($nombres,$apellidos,$fecha_de_nacimiento,$nivel_de_formacion,$ocupacion,$pais,$ciudad,$contrasena,$numero_de_documento,$correo_electronico,$telefono)
		{
			include('conexion.php');
			$uno="1";
			mysqli_query ($db, "INSERT INTO registro(nombres,apellidos,fecha_de_nacimiento,nivel_de_formacion,ocupacion,pais,ciudad,contrasena,numero_de_documento,correo_electronico,telefono,fk_id_rol)
			
	VALUES ('$nombres','$apellidos','$fecha_de_nacimiento','$nivel_de_formacion','$ocupacion','$pais','$ciudad','$contrasena','$numero_de_documento','$correo_electronico','$telefono','$uno')")
or die(mysqli_error($db));
echo "Datos registrados correctamente!!!";
			
		}

	}
	
	$nuevo=new Superadministrador();
$nuevo->registrar($_POST["nombres"],$_POST["apellidos"],$_POST["fecha_de_nacimiento"],$_POST["nivel_de_formacion"],$_POST["ocupacion"],$_POST["pais"],$_POST["ciudad"],$_POST["contrasena"],$_POST["numero_de_documento"],$_POST["correo_electronico"],$_POST["telefono"]);


	
    ?>
	</center>	</td>
    <td width="423" height="280" align="center" valign="middle">
	<center>
	</center>   </td>
  </tr>
  <tr align="center" valign="top">
    <td height="102" colspan="3" valign="bottom"> <iframe src="footer.php" align="center" frameborder="0" scrolling="no" width="1902" height="200"></iframe></td>
  </tr>
</table>
</center>
</div>
<h1 align="center" class="Estilo1">&nbsp;</h1>


</body>


</html>
