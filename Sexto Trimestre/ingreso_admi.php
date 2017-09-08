<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
body {
	background-color: #FFF;
}
</style>
</head>

<body>
<table width="900" height="443" border="0" align="center">
  <tr>
    <td height="67" colspan="4" align="">
    <iframe src="banner.php" scrolling="no" frameborder="0" width="1030" ></iframe>
    </td>
  </tr>
  <tr>
    <td height="30" colspan="4">
    <iframe src="menu.php" frameborder="0" scrolling="no" width="1035"> </iframe></td>
    <td width="0"></td>
  </tr>
  <tr>
    <td width="166" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="700" bgcolor="#FFFFFF">
     
     
    
      <?php
	session_start();
	  
 class Administrador
 
 {
	 
  public function ingresar($numero_de_documento,$contrasena,$fk_id_rol)	 
    {
		
		
		
		$cont="0"; 
		include('conexion.php');
		
	$sql = "SELECT * FROM usuario WHERE numero_de_documento='$numero_de_documento' AND contrasena='$contrasena' AND fk_id_rol='$fk_id_rol'";
if (!$result = $db->query($sql))
	{
die('datos no encontrados¡¡¡ ['.$db->error.']');

}
	while($row=$result->fetch_assoc()) 
{
	$nnumero_de_documento=stripslashes($row["numero_de_documento"]);
	$nombres=stripslashes($row["nombres"]);
	$apellidos=stripslashes($row["apellidos"]);
	$ccontrasena=stripslashes($row["contrasena"]);
	$ffk_id_rol=stripslashes($row["fk_id_rol"]);
    $cont=$cont+1;
}
if ($cont=="0")
{
 header("location:index2.php");	
}

if (($cont!="0")&&($ffk_id_rol=="1"))
{
$_SESSION['administrador']="1";
$_SESSION['usuarioactualnom']=$nombres;
$_SESSION['usuarioactualape']=$apellidos;
$_SESSION['usuarioactualdoc']=$nnumero_de_documento;



header("location:alquiler_libro.php");

}	


    }
	

	
	
 }
 
	$nuevo=new Administrador();
$nuevo->ingresar($_POST["numero_de_documento"],$_POST["contrasena"],$_POST["fk_id_rol"]);	
    ?>
    
    </td>
    <td width="160" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="50" colspan="4">&nbsp;</td>
  </tr>
</table>
</body>
</html>