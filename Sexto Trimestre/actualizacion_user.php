<?php
include ('seguridad_usuario.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" href="estilos.css" />
<link rel="stylesheet" href="fonts.css" />
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 207px;
	height: 152px;
	z-index: 1;
	left: 1481px;
	top: 235px;
}
#apDiv2 {
	position: absolute;
	width: 299px;
	height: 1px;
	z-index: 2;
	left: 118px;
	top: 185px;
}
#apDiv3 {  
height: 60px; width: 200px; 
margin:10px; 
background: -webkit-linear-gradient( #FF0, #F00  );
font-size: 20px; 
text-align:center;
padding-top: 20px; 
word-wrap:break-word;
}
#apDiv4 {  
height: 60px; width: 200px; 
margin:10px; 
background: -webkit-linear-gradient( #FF0, #F00  );
font-size: 20px; 
text-align:center;
padding-top: 20px; 
word-wrap:break-word;
}
#apDiv5 {  
height: 60px; width: 200px; 
margin:10px; 
background: -webkit-linear-gradient( #FF0, #F00  );
font-size: 20px; 
text-align:center;
padding-top: 20px; 
word-wrap:break-word;

}
#apDiv6 {  
height: 60px; width: 200px; 
margin:10px; 
background: -webkit-linear-gradient( #FF0, #F00  );
font-size: 20px; 
text-align:center;
padding-top: 20px; 
word-wrap:break-word;

}
#apDiv7 {  
height: 60px; width: 200px; 
margin:10px; 
background: -webkit-linear-gradient( #FF0, #F00 );
font-size: 20px; 
text-align:center;
padding-top: 20px; 
word-wrap:break-word;
}

#apDiv8 {
	position: absolute;
	width: 181px;
	height: 4px;
	z-index: 3;
	left: 350px;
	top: 1160px;
}
.ll table tr td {
	text-align: left;
}
#apDiv9 {
	position: absolute;
	width: 406px;
	height: 182px;
	z-index: 4;
	left: 234px;
	top: 1298px;
	text-align: justify;
	font-family: Verdana, Geneva, sans-serif;
}
#apDiv10 {
	position: absolute;
	width: 187px;
	height: 128px;
	z-index: 5;
	left: 1368px;
	top: 1172px;
}
#apDiv11 {
	position: absolute;
	width: 437px;
	height: 1px;
	z-index: 6;
	left: 1212px;
	top: 1292px;
	font-family: Verdana, Geneva, sans-serif;
}
#apDiv12 {
	position: absolute;
	width: 1312px;
	height: 51px;
	z-index: 7;
	left: 231px;
	top: 1192px;
}
#apDiv13 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 8;
	left: 469px;
	top: 1398px;
}
#apDiv19 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 9;
	left: 68px;
	top: 632px;
}
#apDiv20 {
	position: absolute;
	width: 158px;
	height: 259px;
	z-index: 9;
	left: 1439px;
	top: 412px;
}
</style>
</head>

<body class="ll">
<iframe src="banner2.php" align="center" frameborder="0" scrolling="no" width="1902" height="185"> </iframe>
<div class="social"> 
<ul> 
<li><a href="http://www.facebook.com/Lizeth.Alvarez.28" target="_blank" class="icon-facebook"></a></li> 
<li><a href="http://www.googleplus.com/falconmasters" target="_blank" class="icon-google-plus"></a></li>  
<li><a href="http://www.instagram.com/falconmasters" target="_blank" class="icon-instagram"></a></li>
<li><a href="mailto:contacto@falconmaster.com" target="_blank" class="icon-mail3"></a></li>
</ul> 
</div>
<table width="1655" height="1535" border="0" align="center">
  <tr>
    <td width="215" height="809">&nbsp;</td>
    <td colspan="2">
    
    <p>
    <div id="apDiv20"><img src="imagenes/Uno.jpg" width="312" height="259" /></div>
    <p>    
    <p>
    <p>  
	
	       <?php
		   
include ('conexion.php');

$doc=$_SESSION['usuarioactualdoc'];	


$nnombres=$_POST["nombres"];	
$aapellidos=$_POST["apellidos"];
$ttelefono=$_POST["telefono"];
$ccorreo_electronico=$_POST["correo_electronico"];
$nnovedades=$_POST["novedades"];
$ppais=$_POST["pais"];
$cciudad=$_POST["ciudad"];
$oocupacion=$_POST["ocupacion"];
$ttemas_de_interes=$_POST["temas_de_interes"];

//////es la concatenacion de dia año en una actualizacion
$mes=$_POST["mes"];
$dia=$_POST["dia"];
$ano=$_POST["ano"];
$ffechafinal=$ano."-".$mes."-".$dia;


if($nnombres!= "")
{
mysqli_query($db,"UPDATE usuario SET nombres='$nnombres' WHERE numero_de_documento='$doc'")	
or die(mysqli_error ($db));
}

if($aapellidos!= "")
{
mysqli_query($db,"UPDATE usuario SET apellidos='$aapellidos' WHERE numero_de_documento='$doc'")	
or die(mysqli_error ($db));
}

if($ttelefono!= "")
{
mysqli_query($db,"UPDATE usuario SET telefono='$ttelefono' WHERE numero_de_documento='$doc'")	
or die(mysqli_error ($db));
}

if($ffechafinal!= "")
{
mysqli_query($db,"UPDATE usuario SET fecha_de_nacimiento='$ffechafinal' WHERE numero_de_documento='$doc'")	
or die(mysqli_error ($db));
}

if($ccorreo_electronico!= "")
{
mysqli_query($db,"UPDATE usuario SET correo_electronico='$ccorreo_electronico' WHERE numero_de_documento='$doc'")	
or die(mysqli_error ($db));
}



if($nnovedades!= "")
{
mysqli_query($db,"UPDATE usuario SET novedades='$nnovedades' WHERE numero_de_documento='$doc'")	
or die(mysqli_error ($db));
}
if($ppais!= "")
{
mysqli_query($db,"UPDATE usuario SET pais='$ppais' WHERE numero_de_documento='$doc'")	
or die(mysqli_error ($db));
}
if($cciudad!= "")
{
mysqli_query($db,"UPDATE usuario SET ciudad='$cciudad' WHERE numero_de_documento='$doc'")	
or die(mysqli_error ($db));
}
if($oocupacion!= "")
{
mysqli_query($db,"UPDATE usuario SET ocupacion='$oocupacion' WHERE numero_de_documento='$doc'")	
or die(mysqli_error ($db));
}
if($ttemas_de_interes!= "")
{
mysqli_query($db,"UPDATE usuario SET temas_de_interes='$ttemas_de_interes' WHERE numero_de_documento='$doc'")	
or die(mysqli_error ($db));
}



?>


 <?php
include ('conexion.php');


$doc=$_SESSION['usuarioactualdoc'];	




$sql1="SELECT * FROM usuario WHERE numero_de_documento='$doc'";

if(!$result1= $db->query($sql1))
{
die('datos no encontrados¡¡¡ ['.$db->error.']');

}

while($row1=$result1->fetch_assoc()) 
{
$nnombres=stripslashes($row1["nombres"]);	
$aapellidos=stripslashes($row1["apellidos"]);
$ttelefono=stripslashes($row1["telefono"]);
$ffecha_de_nacimiento=stripslashes($row1["fecha_de_nacimiento"]);
$ccorreo_electronico=stripslashes($row1["correo_electronico"]);
$nnovedades=stripslashes($row1["novedades"]);
$ppais=stripslashes($row1["pais"]);
$cciudad=stripslashes($row1["ciudad"]);
$oocupacion=stripslashes($row1["ocupacion"]);
$ttemas_de_interes=stripslashes($row1["temas_de_interes"]);
//jjjjjjjjjjjjjjj

$arr1 = str_split($ffecha_de_nacimiento);
/*echo ($arr1[0]);
echo ($arr1[1]);
echo ($arr1[2]);
echo ($arr1[3]);
echo ($arr1[4]);
echo ($arr1[5]);
echo ($arr1[6]);
echo ($arr1[7]);
echo ($arr1[8]);
echo ($arr1[9]);
*/
$digito1=($arr1[0]);
$digito2=($arr1[1]);
$digito3=($arr1[2]);
$digito4=($arr1[3]);
$digito5=($arr1[4]);
$digito6=($arr1[5]);
$digito7=($arr1[6]);
$digito8=($arr1[7]);
$digito9=($arr1[8]);
$digito10=($arr1[9]);

$anio=$digito1.$digito2.$digito3.$digito4;


$mes=$digito6.$digito7;


$dia=$digito9.$digito10;

$fffecha_de_nacimiento=$anio."-".$mes."-".$dia;

//jjjjjjjjjjjjjjj







$nnumero_de_documento=stripslashes($row1["numero_de_documento"]);




  echo"<center> <table width=1107 height=264 border=0>";
  echo" <tr>";
  echo" <td width=190 height=46><center><span class=letra>NOMBRES</span></center></td>";
  echo"<td width=269>$nnombres</td>";
  echo"<td width=187><center><span class=letra>CIUDAD</span></center></td>";
  echo"<td width=433>$cciudad</td>";
  echo"</tr>";
  echo"<tr>";
  echo"<td height=50><center><span class=letra>APELLIDOS</span></center></td>";
  echo"<td>$aapellidos</td>";
  echo"<td><center><span class=letra>TÉLEFONO</span></center></td>";
  echo"<td>$ttelefono</td>";
  echo"</tr>";
  echo"<tr>";
  echo"<td height=47><center><span class=letra>FECHA  DE NACIMIENTO</span></center></td>";
  echo"<td>$fffecha_de_nacimiento</td>";
  echo"<td><center><span class=letra>OCUPACIÓN</span></center></td>";
  echo"<td>$oocupacion</td>";
  echo"</tr>";
  echo"<tr>";
  echo"<td height=58><center><span class=letra>CORREO ELECTRONICO</span></center></td>";
  echo"<td>$ccorreo_electronico</td>";
  echo"<td><center><span class=letra>TEMAS DE INTERÉS</span></center></td>";
  echo"<td>$ttemas_de_interes</td>";
  echo"</tr>";
  echo"<tr>";
  echo"<td height=49><center><span class=letra>NOVEDADES</span></center></td>";
  echo"<td>$nnovedades</td>";
  echo"<td><center><span class=letra>PAÍS</span></center></td>";
  echo"<td>$ppais</td>";
  echo"</tr>";
  echo"</table></center>";
  }//fin del while
  ?>  
  <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td width="224">&nbsp;</td>
  </tr>
  <tr>
    <td height="720" colspan="4"><p>.</p>
    <div id="apDiv13"><img src="imagenes/ninos-leyendo.jpg" width="650" height="189" alt="Imagen de niños leyendo en el piso" /></div>
    <div id="apDiv12"><img src="imagenes/ceparador.png" width="1310" height="129" alt="imagen de ceparador" /></div></td>
  </tr>
</table>
<div id="apDiv2"><img src="imagenes/bienvenidos.jpg" width="311" height="140" alt="imagen de bienvenida a la biblioteca y abierto" /></div>
<iframe src="footer.php" align="center" frameborder="0" scrolling="no" width="1902" height="200"></iframe> 
</body>
</html>
