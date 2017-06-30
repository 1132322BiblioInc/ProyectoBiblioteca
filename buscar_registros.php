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

<table width="1500" height="917" border="3" align="center" >
  <tr align="center" valign="top">
    <td height="283" colspan="3" > <iframe src="banner.php"  align="center" frameborder="0" scrolling="no" width="1467" height="300"> </iframe> </td>
  </tr>
  <tr align="center" valign="top">
    <td height="215" colspan="3" > <iframe src="menu_admi.php" align="center" frameborder="0" scrolling="no" width="1467" height="300" ></iframe></td>
  </tr>
  
  <tr>
    <td width="4" height="280" align="center" valign="middle">&nbsp;</td>
    <td width="1470" height="280" align="center" valign="middle">
	<center>
     <table width="900" border="0">
       <tr>
       
           <td>ELIMINAR  USUARIOS</td>
       </tr>
     </table>
     <p>
       <?php
	include ('conexion.php');
		
		
		 $sql="SELECT * FROM usuario JOIN rol ON usuario.fk_id_rol=rol.id_rol;";
 
	if (!$result = $db->query($sql))
	{
		echo('DATOS NO ECONTRADOS!!! [' . $db->error . ']');
		
    }
	echo"<table width=400 border=1 class=Estilo2>";
    echo"<tr bgcolor=#A6F38B>";
	echo"<td>ID</td>";
	echo "<td>DOCUMENTO</td>";
	echo "<td>ROL</td>";
	echo "</tr>";
	while($row = $result->fetch_assoc())
	{ 
	          
		  $nnumero_de_documento=stripslashes($row["numero_de_documento"]);
		
		  
		  
		  echo"<tr>";


echo"<td></td>";
echo"<td>$nnumero_de_documento</td>";
echo"<td></td>";

		  
	}// fin de while
	echo"</table>";
	
		?>
	</p>
	</center>	</td>
    <td width="0" height="280" align="center" valign="middle">
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
