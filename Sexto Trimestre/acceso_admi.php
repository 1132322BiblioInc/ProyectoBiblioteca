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
	left: 270px;
	top: 998px;
}
#apDiv13 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 8;
	left: 580px;
	top: 1547px;
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
	width: 21px;
	height: 24px;
	z-index: 10;
	left: 1881px;
	top: 1858px;
}
#apDiv21 {
	position: absolute;
	width: 25px;
	height: 0px;
	z-index: 11;
	left: 1881px;
	top: 1887px;
}
#apDiv22 {
	position: fixed;
	width: 492px;
	height: 420px;
	z-index: 1;
	left: 40%;
	top: 30%;
	background-color: #C0392B;
	opacity:0.9;
	
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
    
    <p><center> <div id="apDiv22">
        <form id="form2" name="form2" method="post" action="ingreso_admi.php">
          <table width="232" height="41" border="0" align="center">
            <tr>
              <td align="center" valign="middle" class="Estilo1"><center>INGRESAR</center></td>
            </tr>
      </table>
          <p>
            <label><br />
              <select name="fk_id_rol" class="Estilo2" id="fk_id_rol" required="required">
                <option value="">Seleccione </option>
                <option value="1">Administrador</option>
              </select>
<br />
              <span class="Estilo2"><br />
                Documento</span><br />
            </label>
            <label>
              <input type="text" name="numero_de_documento" id="numero_de_documento" required />
              <br />
              <span class="Estilo2">Contraseña</span><br />
            </label>
            <label for="contrasena"></label>
            <input type="password" name="contrasena" id="contrasena" required />
            <label> <br />
              <br />
              <input type="submit" class="Estilo2" value="Iniciar Sesión" />
              <span class="Estilo2"><br />
              </span></label>
          </p>
          <p>&nbsp;</p>
        </form>
      </div></center></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <iframe src="slider.html" align="center" frameborder="0" scrolling="no" width="1200" height="650"> </iframe>
    </td>
    <td width="224">
      <div id="apDiv3" style="border-radius: 20px; font-family: Verdana, Geneva, sans-serif; ">CATALOGO EN LINEA    </div>
      <div id="apDiv4" style="border-radius: 20px; font-family: Verdana, Geneva, sans-serif;">PRESTAMOS </div>
      <div id="apDiv5" style="border-radius: 20px; font-family: Verdana, Geneva, sans-serif;">CONSULTAS </div>
      <div id="apDiv6" style="border-radius: 20px; font-family: Verdana, Geneva, sans-serif;">RENOVACION </div>
     <div id="apDiv7" style="border-radius: 20px; font-family: Verdana, Geneva, sans-serif;">SUSCRIBASE AL PORTAL</div></td>
  </tr>
  <tr>
    <td height="720" colspan="4"><div id="apDiv8"><img src="imagenes/Mision.png" width="178" height="131" alt="Imagen de libros" /></div>
      <div id="apDiv9">Fomentar el acceso con equidad a la literatura, la lectura, la escritura y la oralidad; contextualiza y construye con competencia, calidad y responsabilidad significaciones, espacios y medios que garanticen el derecho al conocimiento, a la información, a la cultura, al arte, al bienestar y a la recreación de todos los grupos poblacionales y etarios.<br />
    Lo anterior orientado al desarrollo humano y al ejercicio de derechos de todas las personas</div>      <p>.</p>
    <div id="apDiv21"><a href="acceso_super_admi.php"><img src="Imagen prueba/super.png" width="25" height="23" /></a></div>
    <div id="apDiv13"><img src="imagenes/ninos-leyendo.jpg" width="650" height="189" alt="Imagen de niños leyendo en el piso" /></div>
    <div id="apDiv12"><img src="imagenes/ceparador.png" width="1310" height="129" alt="imagen de ceparador" /></div>
    <div id="apDiv10"><img src="imagenes/Vision.jpg" width="182" height="133" alt="Imagen de un icono de vision" /></div>
    <div id="apDiv11">
      <p>La Biblioteca se consolida como una  red pública de gestión de información y conocimiento del distrito con cobertura  de la localidad de Bosa Piamonte, en trabajo articulado con la comunidad, la educación,  el desarrollo social y económico, con una oferta de proyectos y servicios que  facilitan a las personas el ejercicio de sus derechos, el encuentro  comunitario, la convivencia pacífica y el acceso a oportunidades de desarrollo  humano. </p>
    </div></td>
  </tr>
</table>
<div id="apDiv20"><a href="acceso_admi.php"><img src="Imagen prueba/admin.png" width="23" height="22" /></a></div>
<div id="apDiv2"><img src="imagenes/bienvenidos.jpg" width="311" height="140" alt="imagen de bienvenida a la biblioteca y abierto" /></div>
<iframe src="footer.php" align="center" frameborder="0" scrolling="no" width="1902" height="200"></iframe> 
</body>
</html>