<?php
include ('seguridad_usuario.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>prueba</title>
<link rel="stylesheet" href="estilos.css"  type="text/css"/>

<style type="text/css">
<!--
.Estilo6 {color: #000000}
-->
</style>
<body class=body >

<div><center>

<table width="1500" height="917" border="0" align="center" >
  <tr align="center" valign="top">
    <td height="283" colspan="3" > <iframe src="banner2.php"  align="center" frameborder="0" scrolling="no" width="1902" height="200"> </iframe> </td>
  </tr>
  <tr align="center" valign="top">
   
  </tr>
  
  <tr>
    <td width="423" height="280" align="center" valign="middle"><table width="394" border="0">
      <tr>
        <td width="388"><img src="Imagen prueba/book.png" width="252" height="188" /></td>
      </tr>
      <tr>
        <td><div align="right"><img src="Imagen prueba/libro (1).png" width="254" height="201" /></div></td>
      </tr>
      
    </table>
      </td>
    <td width="423" height="280" align="center" valign="middle">
	<center>
	  <form id="form1" name="form1" method="post" action="cambio_contrasena_usuario2.php">
	    <table width="326" height="58" border="0" align="center">
          <tr>
            <td width="304" align="center" valign="middle" class="Estilo1 Estilo5 Estilo6">MODIFICAR CONTRASEÑA</td>
          </tr>
        </table>
	    <p>CONTRSEÑA ACTUAL
	      <br />
	      <label for=""></label>
          <input name="contrsena_actual" type="password" id="contrsena_actual" size="30" maxlength="30" />
          <br />
	      <br />
	      CONTRASEÑA NUEVA<br />
	      <label for="contrasena_nueva"></label>
	      <input name="contrasena_nueva" type="password" id="contrasena_nueva" size="30" maxlength="30" />
	      </p>
	    <p>CONFIRMAR CONTRASEÑA</p>
	    <p>
  <label for="confirmar_contrasena"></label>
	      <input name="confirmar_contrasena" type="password" id="confirmar_contrasena" size="30" maxlength="30" />
	      </p>
	    <p>
	      <label>
	      <input type="submit" name="Submit" value="ACTUALIZAR" />
	      </label>
	      <br />
  </p>
	  </form>
	</center>	</td>
    <td width="423" height="280" align="center" valign="middle">
	<center>
	</center>
    <table width="394" border="0">
      <tr>
        <td width="388"><img src="Imagen prueba/book.png" width="252" height="188" /></td>
      </tr>
      <tr>
        <td><div align="right"><img src="Imagen prueba/libro (1).png" width="254" height="201" /></div></td>
      </tr>
      
    </table>   </td>
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
