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
       
           <td>LIBROS PRESTADOS</td>
       </tr>
   </table>
	  <p>

  <?php 
   include ('conexion.php');
   
   $sql1="SELECT * FROM prestamo ";
 
	if (!$result1 = $db->query($sql1))
	{
		echo('DATOS NO ECONTRADOS!!! [' . $db->error . ']');
		
    }
	
	
	while($row1 = $result1->fetch_assoc())
	{ 
	     $iid_prestamo=stripslashes($row1["id_prestamo"]);	 
		  $ccodigo_libro=stripslashes($row1["codigo_libro"]);	    
		  $ttitulo_libro=stripslashes($row1["titulo_libro"]);
		  $ddocumento_usuario=stripslashes($row1["documento_usuario"]);	    
		  $nnombre_usuario=stripslashes($row1["nombre_usuario"]);
		  $ffecha_prestamo=stripslashes($row1["fecha_prestamo"]);	    
		  $ffecha_entrega=stripslashes($row1["fecha_entrega"]);
		  
		  
      echo"<table width=658 border=1>";
      echo"<tr bgcolor=#067184>";
      echo"<td width=142 class=Estilo1>DATOS</td>";
      echo"<td colspan=3 class=Estilo2>&nbsp;</td>";
      echo"</tr>";
      echo"<tr>";
      echo"<td class=Estilo2 bgcolor=#569EAB>CODIGO DE PRESTAMO</td>";
      echo"<td class=Estilo2 width=144 bgcolor=#569EAB>$iid_prestamo</td>";
      echo"<td width=161 bgcolor=#569EAB>&nbsp;</td>";
      echo"<td width=183 bgcolor=#569EAB>&nbsp;</td>";
      echo"</tr>";
      echo"<tr>";
      echo"<td class=Estilo2 bgcolor=#569EAB>CODIGO LIBRO</td>";
      echo"<td class=Estilo2 bgcolor=#569EAB><label for=textfield2></label> $ccodigo_libro</td>";
      echo"<td class=Estilo2 bgcolor=#569EAB>TITULO DEL LIBRO</td>";
      echo"<td class=Estilo2 bgcolor=#569EAB><label for=textfield3></label>$ttitulo_libro</td>";
      echo"</tr>";
      echo"<tr>";
      echo"<td class=Estilo2 bgcolor=#569EAB>DOCUMENTO USUARIO</td>";
      echo"<td class=Estilo2 bgcolor=#569EAB><label for=textfield5></label>$ddocumento_usuario</td>";
           
      echo"<td class=Estilo2 bgcolor=#569EAB>NOMBRE USUARIO</td>";
      echo"<td class=Estilo2 bgcolor=#569EAB><label for=textfield5></label>$nnombre_usuario</td>";
      echo"</tr>";
      echo"<tr>";
      echo"<td class=Estilo2 bgcolor=#569EAB>FECHA DE PRESTAMO</td>";
      echo"<td class=Estilo2 bgcolor=#569EAB><label for=textfield6></label> $ffecha_prestamo</td>";
      echo"<td class=Estilo2 bgcolor=#569EAB>FECHA ENTREGA</td>";
      echo"<td class=Estilo2 bgcolor=#569EAB><label for=textfield7></label>$ffecha_entrega</td>";
      echo"</tr>";
      echo"<tr bgcolor=#067184>";
      echo"<td colspan=3>&nbsp;</td>";
      echo"<td></td>";
      echo"</tr>";
      echo"</table>";
       }
     ?>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
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
