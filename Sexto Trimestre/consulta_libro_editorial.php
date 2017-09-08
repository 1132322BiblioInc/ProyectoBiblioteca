<?php
include ('seguridad_usuario.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>prueba</title>
<link rel="stylesheet" href="estilos.css" type="text/css"/>
<link  rel="stylesheet" href="efecto-boton.css" type="text/css"/>
 <link  rel="stylesheet" href="fonts.css" type="text/css"/>
<style type="text/css">
<!--
body {
	background-image: url(66.jpg);
}
.Estilo3 {font-size: 10px}
-->
 span{
	color:#00000;
	margin-right:10px;
	font-size:30px;
	}
</style></head>

<body class="Estilo1" >

<div><center>

<table width="1500" height="573" border="0" align="center" >
  <tr align="center" valign="top">
    <td height="177" colspan="3" ><p><iframe src="banner2.php" align="center" frameborder="0" scrolling="no" width="1902" height="185"> </iframe></p></td>
  </tr>
  <tr>
    <td width="842" height="280" align="center" valign="middle">
      
      <table width="200" border="1">
        <tr>
          <th scope="col"><span class="icon-search"></span>buscar en:</th>
          </tr>
        </table>
      <br>
      <table width="597" height="120" border="0" align="center">
      <tr>
        <th width="111" height="68" scope="col"><a href="consulta_libro_codigo.php" target ="_parent">
          <button>Codigo<br />
            <span class="icon-barcode"></span></button>
        </a></th>
        <th width="102" scope="col"><a href="consulta_libro_titulo.php" target ="_parent">
          <button>TITULO<br />
            <span class="icon-keyboard"></span></button>
        </a></th>
        <th width="114" scope="col"><a href="consulta_libro_autor.php" target ="_parent">
          <button>AUTOR<br />
            <span class="icon-user"></span></button>
        </a></th>
        <th width="122" scope="col"><a href="consulta_libro_editorial.php" target ="_parent">
          <button>EDITORIAL<br />
            <span class="icon-newspaper"></span></button>
        </a></th>
        <th width="126" scope="col"><a href="consulta_libro_genero.php" target ="_parent">
          <button>GENERO<br />
            <span class="icon-address-book"></span></button>
        </a></th>
      </tr>
    </table>
      
      <!----------------------------------------------------------------------------------------------------------------->  
      
      
      </td>
    <td width="638" height="280" align="center" valign="middle">
      
      <form id="form1" name="form1" method="post" action="consulta_libro_editorial2.php">
        <table width="488" border="1">
          <tr>
            <td width="203" class="Estilo2">Escriba el editorial del libro a buscar</td>
            <td width="190"><label for="busc"></label>            <label for="color"></label>
              <label for="edi"></label>
              <input name="edi" type="text" id="edi" size="50" maxlength="60" /><label for="docum"></label></td>
            </tr>
          <tr>
            <td class="Estilo2">&nbsp;</td>
            <td><input type="submit" name="enviar" id="enviar" value="Enviar" /></td>
            </tr>
          </table>
        </form>
      
      
      </td>
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
