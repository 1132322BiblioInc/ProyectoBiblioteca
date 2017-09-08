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
.hola {
	color: #FF9333;
}
-->
</style></head>

<body class="Estilo1" >

<div><center>

<table width="1500" height="917" border="0" align="center" >
  <tr align="center" valign="top">
    <td height="283" colspan="3" > <iframe src="banner3.php"  align="center" frameborder="0" scrolling="no" width="1885" height="300"> </iframe> </td>
  </tr>
  <tr align="center" valign="top">
    <td height="215" colspan="3" > <iframe src="menu2.php" align="center" frameborder="0" scrolling="no" width="1885" height="300" ></iframe></td>
  </tr>
  
  <tr>
    <td width="423" height="280" align="center" valign="middle"><table width="375" border="0">
      <tr>
        <td width="388" height="230"><center>
          <span class="hola">BIENVENIDO ADMINISTRADOR:</span> "<?php echo $_SESSION['usuarioactualnom']; echo" "; echo $_SESSION['usuarioactualape'];?>"
          <center>
          <p><img src="1.png" width="222" height="191" /></p>
          <p>&nbsp;</p>
        </center></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
      </tr>
      
    </table>
      </td>
    <td width="423" height="280" align="center" valign="middle"><center>
      <table width="358" border="0" align="center">
        <tr>
          <td width="352" height="243" align="center" valign="middle"><p>ACTUALIZAR LIBROS </p>
              <p><a href="eliminarLibro.php"></a><a href="busqueda_actualizacion.php"><img src="img_actualizar.png" alt="actualizar libro" width="209" height="168" border="0" /></a></p></td>
        </tr>
      </table>
	</center>	</td>
    <td width="423" height="280" align="center" valign="middle">
	<center>
	  <table width="328" border="0">
        <tr>
          <td width="322" align="center" valign="middle"><p>ELIMINAR LIBROS </p>
            <p><a href="eliminarLibro.php"><img src="img_eliminar.jpg" alt="eliminar libro" width="179" height="171" border="0" align="middle" /></a></p></td>
        </tr>
      </table>
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
