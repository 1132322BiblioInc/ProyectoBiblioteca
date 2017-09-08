<?php
include ('seguridad.php');
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

<table width="1500" height="917" border="0" align="center" >
  <tr align="center" valign="top">
    <td height="283" colspan="3" > <iframe src="banner3.php"  align="center" frameborder="0" scrolling="no" width="1902" height="200"> </iframe> </td>
  </tr>
  <tr align="center" valign="top">
    <td height="215" colspan="3" > <iframe src="menu2.php" align="center" frameborder="0" scrolling="no" width="1902" height="300" ></iframe></td>
  </tr>
  
  <tr>
    <td width="4" height="280" align="center" valign="middle">&nbsp;</td>
    <td width="1470" height="280" align="center" valign="middle">
	<center>
     <table width="900" border="0">
       <tr>
       
           <td>DEVOLUCION LIBROS</td>
       </tr>
     </table>
     <p>
            <?php
	include ('conexion.php');

   $ddocu=$_POST["ddocu"];
  	
	 $sql="SELECT * FROM prestamo WHERE documento_usuario='$ddocu'";
 
	if (!$result = $db->query($sql))
	{
		echo('DATOS NO ECONTRADOS!!! [' . $db->error . ']');
		
    }
	echo"<table width=400 border=1 class=Estilo2>";
    echo"<tr bgcolor=#067184>";
	echo "<td>CODIGO PRESTAMO</td>";
	echo "<td>CODIGO LIBRO</td>";
	echo "<td>TITULO LIBRO</td>";
	echo "<td>DOCUMENTO USUARIO</td>";
	echo "<td>NOMBRE USUARIO</td>";
	echo "<td>FECHA PRESTAMO</td>";
	echo "<td>FECHA SUGERIDA</td>";
	echo "<td>FECHA EN LA QUE SE ENTREGA EL LIBRO</td>";
	echo "<td>OBSERVACIONES</td>";
	echo "<td>ACEPTAR</td>";
	echo "</tr>";
	
	while($row = $result->fetch_assoc())
	{ 
	      $iid_prestamo=stripslashes($row["id_prestamo"]);	
		  $ccodigo_libro=stripslashes($row["codigo_libro"]);
          $ttitulo_libro=stripslashes($row["titulo_libro"]);	
		  $ddocumento_usuario=stripslashes($row["documento_usuario"]);
          $nnombre_usuario=stripslashes($row["nombre_usuario"]);	
		  $ffecha_prestamo=stripslashes($row["fecha_prestamo"]);
		  $ffecha_entrega=stripslashes($row["fecha_entrega"]);	


		  
 echo"<tr>";
		  
echo"<td bgcolor=#569EAB>$iid_prestamo</td>";
echo"<td bgcolor=#569EAB>$ccodigo_libro</td>";
echo"<td bgcolor=#569EAB>$ttitulo_libro</td>";
echo"<td bgcolor=#569EAB>$ddocumento_usuario</td>";
echo"<td bgcolor=#569EAB>$nnombre_usuario</td>";
echo"<td bgcolor=#569EAB>$ffecha_prestamo</td>";
echo"<td bgcolor=#569EAB>$ffecha_entrega</td>";



echo"<form id=form1 name=form1 method=post action=devolucion3.php>";
echo"<input name=ddocumento_usuario type=hidden id=ddocumento_usuario value=$ddocumento_usuario>";
echo"<input name=ccodigo_libro type=hidden id=ccodigo_libro value=$ccodigo_libro>";
echo"<input name=iid_prestamo type=hidden id=iid_prestamo value=$iid_prestamo>";
echo"<input name=ttitulo_libro type=hidden id=ttitulo_libro value=$ttitulo_libro>";
echo"<input name=nnombre_usuario type=hidden id=nnombre_usuario value=$nnombre_usuario>";
echo"<input name=ffecha_prestamo type=hidden id=ffecha_prestamo value=$ffecha_prestamo>";
echo"<input name=ffecha_entrega type=hidden id=ffecha_entrega value=$ffecha_entrega>";

echo"<td bgcolor=#569EAB>";
echo"<input type=date name=entrega id=entrega >";
echo"</td>";
echo"<td bgcolor=#569EAB>";
echo"<textarea name=observaciones id=observaciones cols=45 rows=5></textarea>";
echo"</td>";

echo"<td bgcolor=#569EAB>";
echo"<input type=submit name=submit value=aceptar>";
echo"</td>";
echo"</tr>";
echo"</form>";

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
    <td height="102" colspan="3" valign="bottom"> <iframe src="footer.php" align="center" frameborder="0" scrolling="no" width="1902" height="200"></iframe></td>
  </tr>
</table>
</center>
</div>
<h1 align="center" class="Estilo1">&nbsp;</h1>


</body>


</html>
