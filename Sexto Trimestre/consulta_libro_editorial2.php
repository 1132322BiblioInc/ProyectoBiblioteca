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

<body>

<div><center>

<table width="1500" height="588" border="0" align="center" >
  <tr align="center" valign="top">
    <td height="192" colspan="3" ><iframe src="banner2.php" align="center" frameborder="0" scrolling="no" width="1902" height="185"> </iframe></td>
  </tr>
  <tr>
    <td width="597" height="280" align="center" valign="middle">
      
      <table width="200" border="1">
        <tr>
          <th class="Estilo1" scope="col"><span class="icon-search"></span>buscar en:</th>
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
    <td width="883" height="280" align="center" valign="middle"> <p>
      <?php
	  
class Usuario
{
    public function ConsultarLibroEditorial($eeditorial)	
    {
	      include ('conexion.php'); 
	 
	      $sql="SELECT * FROM libro WHERE editorial LIKE '$eeditorial%'";
	
	       if(!$result= $db->query($sql))
	          {
	            die('datos no encontrados¡¡¡ ['.$db->error.']');
		
	           }
	
	        while($row=$result->fetch_assoc()) 
	           {
	               $eeditorial=stripslashes($row["editorial"]);
	            }
      }
	  
	public function ImprimirLibro($eeditorial)	
	{
		include ('conexion.php'); 
	$sql="SELECT * FROM libro WHERE editorial LIKE '$eeditorial%'";
	
	if(!$result= $db->query($sql))
	{
	die('datos no encontrados¡¡¡ ['.$db->error.']');
		
	}
	
	
	
	while($row=$result->fetch_assoc()) 
	{
		
	$iidLibro=stripslashes($row["idLibro"]);
	$ttitulo=stripslashes($row["titulo"]);
	$aautor=stripslashes($row["autor"]);
	$eeditorial=stripslashes($row["editorial"]);
	$ccantidad=stripslashes($row["cantidad"]);
	$geenero=stripslashes($row["genero"]);
	$ffechaPublicacion=stripslashes($row["fechaPublicacion"]);
	$ddescripcionFisica=stripslashes($row["descripcionFisica"]);
	$ffechaRegistro=stripslashes($row["fechaRegistro"]);	
	$ffk_id_EstadoPrestamo=stripslashes($row["fk_id_EstadoPrestamo"]);
	 $imagen = stripslashes($row["imagen"]);
	
		
		
	$sql2="SELECT * FROM estadoprestamo WHERE idEstadoPrestamo='$ffk_id_EstadoPrestamo'";
						if(!$result2=$db->query($sql2))
						{
							die('Datos no encontrados ['. $db->error.']');
							
						}
						while($row2 = $result2->fetch_assoc())
						{
							$estadoPrestamo = stripslashes($row2["estadoPrestamo"]);
							
						}
	 
	
	///////////////////////////////////////////////////////////////////////////////
	
	echo"<table width=631 height=264 border=1>";
    echo"<tr bgcolor=#067184>";
    echo"<th width=184 height=267 scope=col>";
	echo"<img src=libro/$imagen width=145 height=200 />";
	echo"</th>";
    echo"<th width=431 scope=col><table width=435 border=1>";
    echo"<tr>";
    echo"<th scope=col align=left bgcolor=#569EAB>CODIGO:</th>";
    echo"<th scope=col align=left bgcolor=#569EAB>$iidLibro</th>";
    echo"</tr>";
    echo"<tr>";
    echo"<td bgcolor=#569EAB align=left>TITULO:</td>";
    echo"<td bgcolor=#569EAB align=left>$ttitulo</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td bgcolor=#569EAB align=left>AUTOR:</td>";
    echo"<td bgcolor=#569EAB align=left>$aautor</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td bgcolor=#569EAB align=left>EDITORIAL:</td>";
    echo"<td bgcolor=#569EAB align=left>$eeditorial</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td bgcolor=#569EAB align=left>CANTIDAD:</td>";
    echo"<td bgcolor=#569EAB align=left>$ccantidad</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td bgcolor=#569EAB align=left>GENERO:</td>";
    echo"<td bgcolor=#569EAB align=left>$geenero</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td bgcolor=#569EAB align=left>FECHA PUBLICACION:</td>";
    echo"<td bgcolor=#569EAB align=left>$ffechaPublicacion</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td bgcolor=#569EAB align=left>DESCRIPCION FISICA:</td>";
    echo"<td bgcolor=#569EAB align=left>$ddescripcionFisica</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td bgcolor=#569EAB align=left>FECHA REGISTRO:</td>";
    echo"<td bgcolor=#569EAB align=left>$ffechaRegistro</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td bgcolor=#569EAB align=left>ESTADO DEL LIBRO</td>";
    echo"<td bgcolor=#569EAB align=left>$estadoPrestamo</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td bgcolor=#569EAB>&nbsp;</td>";
    echo"<td bgcolor=#569EAB>";
	if($ffk_id_EstadoPrestamo!=2)
	{  
	echo"<form id=form1 name=form1 method=post action=reserva_libro2.php>";
   echo "<input name=codigo type=hidden id=codigo value='$iidLibro'>";	
   echo"<input type=submit name=submit value=Solicitar>";
   echo "</form>";
	}
	//$subb=submit;
	//if($sub=$subb)
	//{
		
	//}
   echo"</td>";
   echo"</tr>";  
   echo"</table> </th>";
 echo"</tr>";
  
  	
	}//fin del while
	//}
echo"</table>";
}
	
}	  

$nuevo=new Usuario();
 $nuevo->ConsultarLibroEditorial($_POST["edi"]);
 $nuevo->ImprimirLibro($_POST["edi"]);		
	

	?>
      
      
      </p></td>
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
