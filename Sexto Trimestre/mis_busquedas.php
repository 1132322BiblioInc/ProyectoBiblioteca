<?php
include ('seguridad_usuario.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jQuery.js" type="text/javascript"></script>
<script src="adsRotator.js"></script>
<link href="stylee.css" type="text/css" rel="stylesheet"  />
<title>sesion_usuario</title>
<link rel="stylesheet" href="estilos.css"  type="text/css"/>

<style type="text/css">
<!--
body {
	background-image: url(66.jpg);
}
.Estilo3 {font-size: 10px}

</style>
<style>
.carrousel_inner ul li{
    float:left;
    list-style: none;
    margin: 0;
    width:200px;
    height:200px
}
.carrousel_inner ul{
    margin:0;
    padding:0;
    height:200px;
    width: 10000px;
    overflow: hidden;
}
.carrousel_inner{
    /* border:1px solid red; */
    float: left;
    width:600px;
    height:200px;
    overflow: hidden;
}
.carrousel_left, .carrousel_right{
    height: 200px;
    width:30px;
    float:left;
}
.carrousel_left{
    background: url(nav_left.gif) no-repeat  left top;
}
.carrousel_left:hover{
    background: url(nav_left.gif) no-repeat scroll -50px top transparent

}
.carrousel_right{
    background: url(nav_right.gif) no-repeat right top;
}
.carrousel_right:hover{
    background: url(nav_right.gif) no-repeat -70px top;
}
.left_inactive,.left_inactive:hover{
    background: url(nav_left.gif) no-repeat -100px top;
}
.right_inactive,.right_inactive:hover{
    background: url(nav_right.gif) no-repeat -20px top;
}

.carrousel{
	
    height: 200px;
    margin: 0 auto;
    width: 1000px;
}

/* demo page */
.container{
    width:960px;
	height:auto;
    margin:0 auto;
}
.link{
     background-color: #4d1414;
    border: 3px solid gray;
    border-radius: 10px 10px 10px 10px;
    box-shadow: 1px 1px 5px black;
    color: white;
    font-size: 14px;
    font-weight: bold;
    margin-right: 5px;
    padding: 6px;
    text-decoration: none;
}
h1{
    margin-bottom:100px;
    font-family: Volkhov tahoma;
    border-bottom: 2px solid blueviolet;
    padding:5px;
    color:blueviolet;
    text-shadow:1px 1px black;
}
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 230px;
	top: 512px;
}
#apDiv2 {
	position: absolute;
	width: 389px;
	height: 161px;
	z-index: 2;
	left: 256px;
	top: 204px;
}
#apDiv3 {
	position: absolute;
	width: 220px;
	height: 69px;
	z-index: 3;
	left: 193px;
	top: 618px;
}
#apDiv4 {
	position: absolute;
	width: 291px;
	height: 77px;
	z-index: 2;
	left: 171px;
	top: 781px;
}
#apDiv5 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 3;
	left: 624px;
	top: 1613px;
}
#apDiv6 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 4;
	left: 262px;
	top: 1474px;
}
#apDiv7 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 5;
	left: 1379px;
	top: 221px;
}
</style>
</head>

<body class="Estilo1" >

<div><center>

<table width="1655" height="1535" border="0" align="center" >
  <tr align="center" valign="top">
    <td height="302" > <div id="apDiv7"><img src="imagenes/n.jpg" width="201" height="139" alt="imagen de niños leyendo en un arbol" /></div>      <iframe src="banner2.php" align="center" frameborder="0" scrolling="no" width="1902" height="185"> </iframe> </td>
  </tr>
  <tr align="center" valign="top">
    <td height="37">&nbsp;</td>
  </tr>
  <tr>
    <td height="139" valign="middle"><center>
 <?php
	include ('conexion.php');

	$doc=$_SESSION['usuarioactualdoc'];	
	 $sql="SELECT * FROM solicitud WHERE fk_documento_usuario=$doc ";
 
	if (!$result = $db->query($sql))
	{
		echo('DATOS NO ECONTRADOS!!! [' . $db->error . ']');
		
    }
	echo"<table width=400 border=1 class=Estilo2>";
    echo"<tr bgcolor=#067184>";
	echo "<td>DOCUMENTO</td>";
	echo "<td>NOMBRE USUARIO</td>";
	echo "<td>CODIGO LIBRO</td>";
	echo "<td>TITULO LIBRO</td>";
	echo "</tr>";
	
	while($row = $result->fetch_assoc())
	{ 
	      $Ffk_documento_usuario=stripslashes($row["fk_documento_usuario"]);	    
		  $Ffk_codigo_libro=stripslashes($row["fk_codigo_libro"]);
		  $ffk_documento_usuario=stripslashes($row["fk_documento_usuario"]);
		 

///////////////////////////////**************************************************************
	$sql2="SELECT * FROM  usuario WHERE numero_de_documento='$Ffk_documento_usuario'";
if(!$result2= $db->query($sql2))
{
die('datos no encontrados¡¡¡ ['.$db->error.']');

}
while($row2=$result2->fetch_assoc()) 
{

$numero_de_documento=stripslashes($row2["numero_de_documento"]);
$nnombres=stripslashes($row2["nombres"]);

}
////////////////////////////***************************************************************************		  

////////////////////////////**************************************************************



///////////////////////////////**************************************************************
	$sql20="SELECT * FROM  libro WHERE idLibro='$Ffk_codigo_libro'";
if(!$result20= $db->query($sql20))
{
die('datos no encontrados¡¡¡ ['.$db->error.']');

}
while($row20=$result20->fetch_assoc()) 
{

$ttitulo=stripslashes($row20["titulo"]);
$iidLibro=stripslashes($row20["idLibro"]);


}
////////////////////////////***************************************************************************





		  
 echo"<tr>";
		  
echo"<td bgcolor=#569EAB>$Ffk_documento_usuario</td>";
echo"<td bgcolor=#569EAB>$nnombres</td>";
echo"<td bgcolor=#569EAB>$Ffk_codigo_libro</td>";
echo"<td bgcolor=#569EAB>$ttitulo</td>";

echo"<td bgcolor=#569EAB>";

echo"<form id=form1 name=form1 method=post action= prestar_libro.php>";
echo"<input name=numero_de_documento type=hidden id=numero_de_documento value=$Ffk_documento_usuario>";
echo"<input name=idLibro type=hidden id=idLibro value=$iidLibro>";
echo"<input name=titulo type=hidden id=titulo value=$ttitulo>";
echo"<input name=nombre type=hidden id=nombre value=$nnombres>";
echo"</td>";
echo"</tr>";
echo"</form>";

}// fin de while
echo"</table>";
?>
    </center></td>
    </tr>
  <tr>
    <td height="105" valign="middle"><center></center></td>
  </tr>
  <tr>
    <td height="124" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="139" valign="middle"><div id="apDiv5"><img src="imagenes/ninos-leyendo.jpg" width="650" height="189" /></div>
      <div id="apDiv6"><img src="imagenes/ceparador.png" width="1290" height="119" alt="imagen de ceparador" /></div></td>
  </tr>
  <tr>
    <td height="139" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="139" valign="middle">&nbsp;</td>
  </tr>
  <tr align="center" valign="top">
    <td height="83" valign="bottom">&nbsp;</td>
  </tr>
</table>
<div id="apDiv2"><img src="imagenes/bienvenidos.jpg" width="311" height="140" alt="imagen de bienvenida a la biblioteca y abierto" /></div>
</center>
</div>
</body>


</html>
