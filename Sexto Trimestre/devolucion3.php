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
       
           <td>PRESTAMOS DE LIBROS</td>
       </tr>
   </table>
	  <p>
	    <?php
	 include ('conexion.php');
	 $ddocumento_usuario=$_POST["ddocumento_usuario"];
	 $ccodigo_libro=$_POST["ccodigo_libro"];
	 $iid_prestamo=$_POST["iid_prestamo"];
	 $ttitulo_libro=$_POST["ttitulo_libro"];
	 $nnombre_usuario=$_POST["nnombre_usuario"];
	 $ffecha_prestamo=$_POST["ffecha_prestamo"];
	 $ffecha_entrega=$_POST["ffecha_entrega"];
	 $entrega=$_POST["entrega"];
	 $observaciones=$_POST["observaciones"];
	 
	  mysqli_query($db,"INSERT devolucion(codigo_del_prestamo,codigo_del_libro,titulo_del_libro,documento_usuario,nombre_usuario,fecha_prestamo,fecha_sugerida,fecha_entrega_libro,observaciones)         VALUES('$iid_prestamo','$ccodigo_libro','$ttitulo_libro','$ddocumento_usuario','$nnombre_usuario','$ffecha_prestamo','$ffecha_entrega','$entrega','$observaciones')")
	  or die (mysqli_error ($db));
	  echo"<br>";
	  echo "devolucion exitosa<br>";
	  
	 
	
	//  </p>
	 // <p>&nbsp; </p>
	  //<p>&nbsp;</p>
  /* 
   include ('conexion.php');
   
   $numero_de_documento=$_POST["numero_de_documento"];
   $sql1="SELECT * FROM prestamo WHERE documento_usuario ='$numero_de_documento'";
 
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
		  $ffecha_entrega=stripslashes($row1["fecha_entrega"]);*/
		  
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
	echo "</tr>";
	
			  
 echo"<tr>";
		  
echo"<td bgcolor=#569EAB>$iid_prestamo</td>";
echo"<td bgcolor=#569EAB>$ccodigo_libro</td>";
echo"<td bgcolor=#569EAB>$ttitulo_libro</td>";
echo"<td bgcolor=#569EAB>$ddocumento_usuario</td>";
echo"<td bgcolor=#569EAB>$nnombre_usuario</td>";
echo"<td bgcolor=#569EAB>$ffecha_prestamo</td>";
echo"<td bgcolor=#569EAB>$ffecha_entrega</td>";
echo"<td bgcolor=#569EAB>$entrega</td>";
echo"<td bgcolor=#569EAB>$observaciones</td>";

echo"</tr>";
echo"</table>";
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
