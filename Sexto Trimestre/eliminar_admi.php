<?php
include ('seguridad_super_admi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mi Pagina</title>
<link  rel="stylesheet" href="../bastidas/stilos.css" type="text/css"/>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 591px;
	top: 287px;
	background-color: #996600;
}
#apDiv2 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 2;
	left: 745px;
	top: 343px;
	background-color: #996666;
}
#apDiv3 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 36px;
	top: 389px;
}
#apDiv4 {
	position: absolute;
	width: 292px;
	height: 53px;
	z-index: 2;
	left: 100px;
	top: 538px;
}
#apDiv5 {
	position: absolute;
	width: 183px;
	height: 191px;
	z-index: 3;
	left: 165px;
	top: 587px;
	visibility: visible;
}
#Layer1 {
	position:absolute;
	width:127px;
	height:92px;
	z-index:4;
	left: 1765px;
	top: 672px;
}
#Layer2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:5;
	left: 1514px;
	top: 1162px;
}
#Layer3 {
	position:absolute;
	width:286px;
	height:150px;
	z-index:6;
	left: 29px;
	top: 927px;
}
#Layer4 {
	position:absolute;
	width:265px;
	height:141px;
	z-index:7;
	left: 32px;
	top: 447px;
}
#Layer5 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:8;
	left: 1632px;
	top: 481px;
}
.Estilo1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: x-large;
}

.Estilo2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: large;
</style>
</head>

<body>
<table width="1040"  border="0" align="center">
  <tr>
    <td height="177" colspan="2" > <iframe src="banner4.php"  align="center" frameborder="0" scrolling="no" width="1902" height="175"> </iframe> </td>
  </tr>
  <tr>
       <td height="215" colspan="2" > <iframe src="menu_admi.php" align="center" frameborder="0" scrolling="no" width="1902" height="280" ></iframe></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
  <!--<iframe src="Slider.html" frameborder="0" scrolling="no" width="1030"> </iframe></td>-->  </tr>
  <tr>
    <td height="630" valign="top" bgcolor="#FFFFFF"><h1>&nbsp;</h1>      
        <center>
		 <?php
	include ('conexion.php');
		
		
		 $sql="SELECT * FROM usuario WHERE fk_id_rol=1";
 
	if (!$result = $db->query($sql))
	{
		echo('DATOS NO ECONTRADOS!!! [' . $db->error . ']');
		
    }
	echo"<table width=700 border=3 class=Estilo2>";
    echo"<tr>";
	echo"<td>NOMBRE</td>";
	echo "<td>DOCUMENTO</td>";
	echo "<td>EMAIL</td>";
	echo "<td>DEPARTAMENTO</td>";
	echo "<td>TELEFONO</td>";
	echo "<td>Eliminacion</td>";
	echo "</tr>";
	while($row = $result->fetch_assoc())
	{ 
	      $nnombres=stripslashes($row["nombres"]);	    
		  $nnumero_de_documento=stripslashes($row["numero_de_documento"]);
		  $ccorreo_electronico=stripslashes($row["correo_electronico"]);
		  $cciudad=stripslashes($row["ciudad"]);
		  $ttelefono=stripslashes($row["telefono"]);
		  
		  
		  
		  echo"<tr>";

echo"<td>$nnombres</td>";
echo"<td>$nnumero_de_documento</td>";
echo"<td>$ccorreo_electronico</td>";
echo"<td>$cciudad</td>";
echo"<td>$ttelefono</td>";



echo"<td>";

echo"<form id=form1 name=form1 method=post action= eliminacion_todo_admi.php>";
echo"<input name=numero_de_documento type=hidden id=numero_de_documento value=$nnumero_de_documento>";
echo"<input type=submit name=submit value=eliminar>";
echo"</td>";
echo"</tr>";
echo"</form>";

		  
	}// fin de while
	echo"</table>";
	
		?>
          <div id="Layer4"><img src="Imagen prueba/bienvenidos.png" alt="bienvenido" width="417" height="114" /></div>
          <div id="Layer3"><img src="imagenes/fun.jpg" alt="imagen" width="280" height="146" /></div>
          <div id="Layer5"><img src="imagenes/n.jpg" alt="imagen" width="165" height="180" /></div>
          <div id="apDiv5"><img src="Imagen prueba/super.png" width="169" height="203" align="middle" /></div>
          <div class="Estilo1" id="apDiv4">&quot;<?php echo $_SESSION['usuarioactual']; ?>&quot;</div>
      </center>
        <p>&nbsp;</p>
        <p>&nbsp;</p>    </td>
  </tr>
  <tr>
   <td height="102" colspan="3" valign="bottom"> <iframe src="footer.php" align="center" frameborder="0" scrolling="no" width="1902" height="200"></iframe></td>
  </tr>
</table>
</body>
</html>
