<?php
include ('seguridad_usuario.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>biblio inc</title>
<link rel="stylesheet" href="estilos.css"  type="text/css"/>

<style type="text/css">
<!--
body {
	background-image: url(66.jpg);
}
.Estilo3 {font-size: 10px}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style></head>

<body class="Estilo1" >

<div><center>

<table width="1500" height="673" border="0" align="center" >
  <tr align="center" valign="top">
    <td height="283" colspan="3" > <iframe src="banner2.php"  align="center" frameborder="0" scrolling="no" width="1902" height="200"> </iframe> </td>
  </tr>
  
  <tr>
    <td width="4" height="280" align="center" valign="middle">&nbsp;</td>
    <td width="1470" height="280" align="center" valign="middle">
      <center>
        <table width="900" border="0">
          <tr>
            
            <td> CAMBIO DE CONTRASEÑA USUARIOS</td>
            </tr>
          </table>
        <p>
          <?php
	include ('conexion.php');

$ccontrsena_actual=$_POST["contrsena_actual"];
$ccontrasena_nueva=$_POST["contrasena_nueva"];
$cconfirmar_contrasena=$_POST["confirmar_contrasena"];
$document=$_SESSION['usuarioactualdoc'];
	
	 
	 $sql="SELECT * FROM usuario WHERE contrasena ='$ccontrsena_actual'";
 
	if (!$result = $db->query($sql))
	{
		echo('DATOS NO ECONTRADOS!!! [' . $db->error . ']');
		
    }
	
	while($row = $result->fetch_assoc())
	{ 
	      $ccontrasena=stripslashes($row["contrasena"]);	    
	
	

///////////////////////////////**************************************************************
if ($ccontrasena_nueva==$cconfirmar_contrasena){
mysqli_query($db,"UPDATE usuario SET contrasena='$ccontrasena_nueva' WHERE numero_de_documento='$document'")	
or die(mysqli_error ($db));
echo"contraseña actualizada: su nueva contraseña es $ccontrasena_nueva";
}
////////////////////////////***************************************************************************		  
if ($ccontrasena_nueva!=$cconfirmar_contrasena)
{
	echo"las contraseñas son incorrectas Vuelva a ingresar los datos"; 
}
}

?>
          
          </p>
        </center>	</td>
    <td width="0" height="280" align="center" valign="middle">
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
