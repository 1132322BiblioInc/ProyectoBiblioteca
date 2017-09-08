<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="busqeda_rapi.css"  type="text/css"/>
<link  rel="stylesheet" href="fonts.css" type="text/css"/>
<title>Documento sin título</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 145px;
	height: 119px;
	z-index: 1;
	left: 58px;
	top: 28px;
}
.letra {
	font-family: "MS Serif", "New York", serif;
	font-size: 20px;
}
#apDiv2 {
	position: absolute;
	width: 443px;
	height: 62px;
	z-index: 2;
	left: 245px;
	top: 34px;
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 36px;
}
#apDiv3 {
	position: absolute;
	width: 141px;
	height: 33px;
	z-index: 3;
	left: 247px;
	top: 83px;
}
#apDiv4 {
	position: absolute;
	width: 107px;
	height: 25px;
	z-index: 4;
	left: 441px;
	top: 112px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
}
#apDiv5 {
	position: absolute;
	width: 148px;
	height: 42px;
	z-index: 5;
	left: 627px;
	top: 113px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
}
#apDiv6 {
	position: absolute;
	width: 900px;
	height: 94px;
	z-index: 1;
	left: 59px;
	top: -275px;
	background-color: #00CCFF;
}
#apDiv7 {
	position: absolute;
	width: 175px;
	height: 39px;
	z-index: 6;
	left: 816px;
	top: 112px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
}
#apDiv8 {
	position: absolute;
	width: 190px;
	height: 24px;
	z-index: 7;
	left: 1698px;
	top: 130px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
}
#apDiv9 {
	position: absolute;
	width: 192px;
	height: 38px;
	z-index: 8;
	left: 1702px;
	top: 26px;
}
a:link {
	color: #000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
#apDiv10 {
	position: absolute;
	width: 188px;
	height: 44px;
	z-index: 9;
	left: 1010px;
	top: 116px;
}
#apDiv11 {
	position: absolute;
	width: 440px;
	height: 53px;
	z-index: 10;
	left: 1219px;
	top: 114px;
}
</style>
</head>

<body>
<table  width="1902" height="172" border="0" >
  <tr>
    <td width="1878" height="166" bgcolor="#33CCCC"><div id="apDiv1"><img src="dd.png" width="139" height="115" /></div>
    <div id="apDiv2">BIBLIOTECA PUBLICA</div>
    <div id="apDiv3">BOSA PIAMONTE</div>
    <div class="letra" id="apDiv4"><a href="sesion_usuario.php" class="botones green" target="_parent"><span class="icon-home"></span>INICIO</a></div>
    <div id="apDiv7"><a href="Servicios.php" target="_parent"></a><a href="consulta_libro.php" class="botones green" target="_parent"><span class="icon-keyboard"></span>BUSCAR EN</a></div>
      <div id="apDiv11">
      <br>
        <form id="form1" name="form1" method="POST" action="busqueda_rapida.php" target="_parent">
          <label for="textfield"></label>
          <input  class="input" type="text" name="nombre" id="nombre" placeholder="                     BUSQUEDA RAPIDA..." />
          </input>
          <input name="buscar" type="submit"  class="boton" id="buscar" value="buscar"  />
          </input>        
        </form>
      </div>
     
    <div id="apDiv8"> <a href="salir_usuario.php" target="_parent"><img src="imagenes/salir.png" width="46" height="39" /> SALIR</a></div>
    <div id="apDiv10" class=""><a href="mis_busquedas.php" target="_parent" class="botones green"><span class="icon-newspaper"></span>MIS BUSQUEDAS</a></div>
    
    
    </td>
  </tr>
</table>
<div id="apDiv5"><a href="mi_cuenta.php" class="botones green" target="_parent"><span class="icon-user"></span>MI CUENTA</a></div>
 
</body>
</html>