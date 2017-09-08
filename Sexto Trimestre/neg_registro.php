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
</style>
</head>

<body class="ll">
<iframe src="banner.php" align="center" frameborder="0" scrolling="no" width="1902" height="185"> </iframe>
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
    <td width="215" height="809">
    <div id="apDiv1"><img src="imagenes/n.jpg" width="201" height="139" alt="imagen de niños leyendo en un arbol" /></div>
    <div id="apDiv19"><img src="imagenes/Horarios-de-Atencion.png" width="335" height="245" alt="imagen de horario de atencion de la biblioteca" /></div>
    </td>
    <td colspan="2">
    
    <p>        
	
	<?php
	class Usuario
	{
		public function registrar ($genero,$nombres,$apellidos,$fecha_de_nacimiento,$correo_electronico,$pais,$ciudad,$telefono,$ocupacion,$temas_de_interes,$novedades,$tipo_de_documento,$numero_de_documento,$contrasena)
		{
			include('conexion.php');
			
			mysqli_query ($db, "INSERT INTO usuario(genero,nombres,apellidos,fecha_de_nacimiento,correo_electronico,pais,telefono,ciudad,ocupacion,temas_de_interes,novedades,tipo_de_documento,numero_de_documento,contrasena,fk_id_rol)
			
	VALUES ('$genero','$nombres','$apellidos','$fecha_de_nacimiento','$correo_electronico','$pais','$ciudad','$telefono','$ocupacion','$temas_de_interes','$novedades','$tipo_de_documento','$numero_de_documento','$contrasena','2')")
or die(mysqli_error($db));
echo "Datos registrados correctamente!!!";
			
		}

	}
	
	$nuevo=new Usuario();
$nuevo->registrar($_POST["genero"],$_POST["nombres"],$_POST["apellidos"],$_POST["fecha_de_nacimiento"],$_POST["correo_electronico"],$_POST["pais"],$_POST["telefono"],$_POST["ciudad"],$_POST["ocupacion"],$_POST["temas_de_interes"],$_POST["novedades"],$_POST["tipo_de_documento"],$_POST["numero_de_documento"],$_POST["contrasena"]);


	
    ?>
</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td width="224">
      <div id="apDiv3" style="border-radius: 20px; font-family: Verdana, Geneva, sans-serif; ">CATALOGO EN LINEA    </div>
      <div id="apDiv4" style="border-radius: 20px; font-family: Verdana, Geneva, sans-serif;">PRESTAMOS </div>
      <div id="apDiv5" style="border-radius: 20px; font-family: Verdana, Geneva, sans-serif;">CONSULTAS </div>
      <div id="apDiv6" style="border-radius: 20px; font-family: Verdana, Geneva, sans-serif;">RENOVACION </div>
     <div id="apDiv7" style="border-radius: 20px; font-family: Verdana, Geneva, sans-serif;">SUSCRIBASE AL PORTAL</div></td>
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