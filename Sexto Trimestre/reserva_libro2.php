<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>biblio inc</title>
<link rel="stylesheet" href="estilos.css"  type="text/css"/>
<link  rel="stylesheet" href="efecto-boton.css" type="text/css"/>
 <link  rel="stylesheet" href="fonts/style.css" type="text/css"/>
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

<table width="1500" height="578" border="0" align="center" >
  <tr align="center" valign="top">
    <td height="182" colspan="3" ><iframe src="banner2.php" align="center" frameborder="0" scrolling="no" width="1902" height="185"> </iframe></td>
  </tr>
  <tr>
    <td width="597" height="280" align="center" valign="middle">
      
      <table width="200" border="1">
        <tr>
          <th class="Estilo1" scope="col"><span class="icon-search"></span>buscar en:</th>
          </tr>
        </table>
      <br>
      <table width="597" height="120" border="0">
        <tr>
          
          <th width="111" height="68" scope="col"><a href="consulta_libro_codigo.php" target ="_parent"><button>Codigo<br><span class="icon-barcode"></span></button></a></th>
          <th width="102" scope="col"><a href="consulta_libro_titulo.php" target ="_parent"><button>TITULO<br><span class="icon-keyboard-o"></span></button></a></th>
          <th width="114" scope="col"><a href="consulta_libro_autor.php" target ="_parent"><button>AUTOR<br><span class="icon-user-circle"></span></button></a></th>
          <th width="122" scope="col"><a href="consulta_libro_editorial.php" target ="_parent"><button>EDITORIAL<br><span class="icon-newspaper-o"></span></button></a></th>
          <th width="126" scope="col"><a href="consulta_libro_genero.php" target ="_parent"><button>GENERO<br><span class="icon-address-card "></span></button></a></th>
          </tr>
        </table>
      
      <!----------------------------------------------------------------------------------------------------------------->  
      
      
      </td>
    <td width="883" height="280" align="center" valign="middle"> <p>
      <?php
	 
	 class Usuario

{
	 public function Consultar($ccodigo)
	 {
		
		  	 session_start();
include ('conexion.php');
	
	$ccodigo=$_POST["codigo"];
	
	
	$sql="SELECT * FROM libro WHERE idLibro='$ccodigo'";
	
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
	 $imagen = stripslashes($row["imagen"]);
	
		
	
	
	
	
	 
	
	///////////////////////////////////////////////////////////////////////////////
	echo"LOS DATOS DEL LIBRO SON:";
	echo"<table width=631 height=264 border=1>";
    echo"<tr bgcolor=#067184>";
    echo"<th width=184 height=267 scope=col>
	 <img src=libro/$imagen width=145 height=200 />
	</th>";
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
    echo"<td bgcolor=#569EAB>&nbsp;</td>";
    echo"<td bgcolor=#569EAB>";
   
    echo"</td>";
    echo"</tr>";
	  
    echo"</table> </th>";
    echo"</tr>";
  
  	
	}//fin del while
	//}
    echo"</table>";
		  
    }
	
    public function Solicitar($ccodigo,$docu)
	{
		
		include ('conexion.php');
		
		echo $_SESSION['usuarioactual']; 
	$docu=$_SESSION['usuarioactualdoc'];
	$ccodigo=$_POST["codigo"];
	
	 mysqli_query($db,"INSERT INTO solicitud(fk_documento_usuario,fk_codigo_libro) VALUES('$docu','$ccodigo')")
	  or die (mysqli_error ($db));
	  echo"<br>";
	  echo "Su solicitud fue Exitosa<br>";
	  echo "Los Datos Son: "; 
	
echo"<p>";	
echo  " DOCUMENTO USUARIO: $docu <br>";
  echo "CODIGO LIBRO:$ccodigo <br>"; 
	
	}	
}
 $nuevo=new Usuario();
 $nuevo->Consultar($_POST["codigo"]);
 $nuevo->Solicitar($_POST["codigo"],$_SESSION['usuarioactualdoc']);	
		

?>   
      
      
      
      </p></td>
  </tr>
  <tr align="center" valign="top">
    <td height="102" colspan="3" valign="bottom"><iframe src="footer.php" align="center" frameborder="0" scrolling="no" width="1902" height="200"></iframe></td>
  </tr>
</table>
</center>
</div>
<h1 align="center" class="Estilo1">&nbsp;</h1>


</body>


</html>
