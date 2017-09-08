<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>biblio inc</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>

<td><ul id="MenuBar2" class="MenuBarHorizontal">
  <li><a href="alquiler_libro.php" target ="_parent">INICIO</a>    </li>
  <li><a class="MenuBarItemSubmenu" href="alquiler_libro.php" target ="_parent">INVENTARIO</a>
   <ul>
        <li><a href="alquiler_libro.php" target ="_parent">LIBROS REGISTRADOS</a> 
        <ul>
        <li><a href="busqueda_actualizacion.php" target ="_parent">BUSCAR POR CODIGO</a> 
        <li><a href="busqueda_actualizacion2.php" target ="_parent">BUSCAR TODOS LOS LIBROS</a> 
        </ul>
        </li>
	 <li><a href="registroLibro.php" target ="_parent">REGISTRAR LIBRO</a> </li>
    <li><a href="busqueda_actualizacion.php" target ="_parent">ACTUALIZAR LIBRO</a> </li>
	 <li><a href="eliminarLibro.php" target ="_parent">ELIMINAR LIBRO</a> </li>
    </ul>
  </li>
  <li><a class="MenuBarItemSubmenu" href="alquiler_libro.php" target="_parent">USUARIOS</a>
    <ul>
      <li><a href="usuarios_registrados.php" target ="_parent">USUARIOS REGISTRADOS</a> </li>
      <li><a href="alquiler_libro.php" target ="_parent">ELIMINAR USUARIO</a> 
      <ul>
       <li><a href="eliminar_usuario_documento.php" target ="_parent">eliminar por documento</a> </li>
        <li><a href="eliminar_todos_usuarios.php" target ="_parent">ELIMINAR TODOS LOS USUARIOS</a> </li>
        </ul>
      </li>
	</ul>
  </li>
  <li><a class="MenuBarItemSubmenu" href="alquiler_libro.php" target ="_parent">PRESTAMOS</a>
   <ul>
      <li><a href="prestando_libro.php" target ="_parent">PRESTAR LIBROS</a> </li>
       <li><a href="alquiler_libro.php" target ="_parent">LIBROS PRESTADOS</a> 
       <ul>
        <li><a href="prestamo_por_documento.php" target ="_parent">buscar por documento</a> 
        <li><a href="libros_prestados.php" target ="_parent">todos los prestamos</a> 
        </ul>
       </li>
        <li><a href="devolucion.php" target ="_parent">DEVOLUCION</a> </li>
        <li><a href="alquiler_libro.php" target ="_parent">SOLICITUD PRESTAMO
        
         <?php
		include ('conexion.php');
       $cont="0";
			  $sql="SELECT * FROM solicitud";
 
	 if (!$result = $db->query($sql))
	 {
	echo('DATOS NO ECONTRADOS!!! [' . $db->error . ']');
		
     }
	
	 while($row = $result->fetch_assoc())
	 { 
	       $Ffk_documento_usuario=stripslashes($row["fk_documento_usuario"]);	    
		   $Ffk_codigo_libro=stripslashes($row["fk_codigo_libro"]);
		   $cont=$cont+1;
	 }
		 echo $cont;
		
        ?>
        </a> 
        
         <ul>
       <li><a href="solicitud_prestamo_documento.php" target ="_parent">POR DOCUMENTO</a> </li>
        <li><a href="todas_las_solicitudes.php" target ="_parent">TODAS LAS SOLICITUDES</a> </li>
        </ul>
        </li>
	</ul>
  <li><a href="cambio_contrasena_admi.php" target ="_parent">CAMBIO CONTRASENA</a>  </li>
   <li><a href="salir.php" target ="_parent">SALIR</a></li>
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
