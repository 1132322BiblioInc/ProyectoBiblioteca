<?php
include ('seguridad_super_admi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>

<td><ul id="MenuBar2" class="MenuBarHorizontal">
  <li><a href="registro_administradores.php" target ="_parent">INICIO</a>    </li>
  <li><a href="eliminar_administradores.php" target ="_parent">ADMINISTRADORES</a></li>
  <li><a class="MenuBarItemSubmenu" href="#">SERVICIOS</a>
    <ul>
      <li><a href="alquiler.php" target ="_parent">ALQUILER</a> </li>
	</ul>
  </li>
   <li><a href="catalogo.php" target ="_parent">CATALOGO</a></li>
  <li><a href="contactenos.php" target ="_parent">CONTACTENOS</a>  </li>
   <li><a href="salir_super_admi.php" target ="_parent">SALIR</a></li>
</ul>
<marquee behavior="alternate" direction="right"><p><img src="img_slider1.jpg" alt="imagen libro" width="166" height="227" /> <img src="img_slider2.jpg" alt="imagen libro" width="180" height="228" /> <img src="img_slider3.jpg" alt="imagen libro" width="194" height="229" /><img src="img_slider5.jpg" alt="imagen libro" width="180" height="230" /> <img src="img_slider6.png" alt="imagen libro" width="182" height="231" /> <img src="img_slider7.jpg" alt="imagen libro" width="176" height="231" /> <img src="img_slider8.jpg" alt="imagen libro" width="182" height="230" /> <img src="img_slider9.jpg" alt="imagen libro" width="177" height="232" /> <img src="img_slider10.jpg" alt="imagen libro" width="184" height="232" /> <img src="img_slider11.jpg" alt="imagen libro" width="172" height="228" /> <img src="img_slider12.jpg" alt="imagen libro" width="184" height="227" /> <img src="img_slider13.jpg" alt="imagen libro" width="225" height="232" /></p>
</td>
</marquee>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>

</body>
</html>
