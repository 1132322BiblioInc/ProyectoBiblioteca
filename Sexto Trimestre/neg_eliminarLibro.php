<?php
include ('seguridad.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>prueba</title>
<link rel="stylesheet" href="estilos.css"  type="text/css"/>

<body class=body >

<div><center>

<table width="1500" height="917" border="0" align="center" >
  <tr align="center" valign="top">
    <td height="283" colspan="3" > <iframe src="banner3.php"  align="center" frameborder="0" scrolling="no" width="1902" height="200"> </iframe> </td>
  </tr>
  <tr align="center" valign="top">
    <td height="215" colspan="3" > <iframe src="menu2.php" align="center" frameborder="0" scrolling="no" width="1902" height="300" ></iframe></td>
  </tr>
  
  <tr>
    <td width="492" height="280" align="center" valign="middle"><table width="394" border="0">
      <tr>
        <td width="388"><img src="Imagen prueba/book.png" width="252" height="188" /></td>
      </tr>
      <tr>
        <td><div align="right"><img src="Imagen prueba/libro (1).png" width="254" height="201" /></div></td>
      </tr>
      
    </table>
      </td>
    <td width="578" height="280" align="center" valign="middle">
	<center>
	<?php
	

class Libro //inicio la clase
{

public function ImprimirLibro($idLibro)
		
 	{
				include('conexion.php');
				
	  $sql="SELECT * FROM libro WHERE idLibro ='$idLibro'";
						if( !$result=$db->query($sql))
						{
							die('Datos no encontrados ['. $db->error.']');
						}
						while($row = $result->fetch_assoc())
						{ 
						 $idLibro = stripslashes($row["idLibro"]);
						 $titulo = stripslashes($row["titulo"]);
						 $autor = stripslashes($row["autor"]);
						 $editorial = stripslashes($row["editorial"]);
						 $cantidad = stripslashes($row["cantidad"]);
						 $genero = stripslashes($row["genero"]);
						 $fechaPublicacion = stripslashes($row["fechaPublicacion"]);
						 $descripcionFisica = stripslashes($row["descripcionFisica"]);
						 $fechaRegistro = stripslashes($row["fechaRegistro"]);
						 //$fk_idEstadoPrestamo = stripslashes($row["fk_idEstadoPrestamo"]);	
						 $imagen = stripslashes($row["imagen"]);
					
			$sql2="SELECT * FROM estadoprestamo WHERE idEstadoPrestamo='$fk_id_EstadoPrestamo'";
						if(!$result2=$db->query($sql2))
						{
							die('Datos no encontrados ['. $db->error.']');
							
						}
						while($row2 = $result2->fetch_assoc())
						{
							$estadoPrestamo = stripslashes($row2["estadoPrestamo"]);
							
						}
					$titulo=str_replace("_"," ","$titulo");
					$autor=str_replace("_"," ","$autor");
					$editorial=str_replace("_"," ","$editorial");
					$genero=str_replace("_"," ","$genero");
					$descripcionFisica=str_replace("_"," ","$descripcionFisica");
					
					echo"</br><table width=480 height=43 border=1 cellspacing=0 class=Estilo4 bgcolor=#64482D>";
							echo"<tr>";
							echo"<td withd=240 height=30>CODIGO DEL LIBRO</td>";
							echo"<td align=center>$idLibro</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td withd=240 height=30>TÍTULO</td>";
							echo"<td align=center>$titulo</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td  height=30>AUTOR</td>";
							echo"<td align=center>$autor</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td height=30>EDITORIAL</td>";
							echo"<td align=center>$editorial</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td  height=30>CANTIDAD</td>";
							echo"<td align=center>$cantidad</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td height=30>GÉNERO</td>";
							echo"<td align=center>$genero</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td height=30>FECHA DE PUBLICACIÓN</td>";
							echo"<td align=center>$fechaPublicacion</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td height=30>DESCRIPCIÓN FÍSICA</td>";
							echo"<td align=center>$descripcionFisica</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td height=30>FECHA REGISTRO</td>";
							echo"<td align=center>$fechaRegistro</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td height=30>ESTADO PRESTAMO</td>";
							echo"<td align=center>$fk_id_EstadoPrestamo</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td>PREVISUALIZACION</td>";
							echo"<td><img src=libro/$imagen width=130 height=180 /></td>";
							echo"</tr>";
							echo"</table>";
							
					
			}
		}				

public function eliminarLibro($idLibro,$numero)
	{
	include('conexion.php');
	
		if ($numero=='45n')
		{
		 	mysqli_query($db,"DELETE FROM libro WHERE idLibro='$idLibro'") or die (mysqli_error($db));
		 
				echo"</br></br><table width=480 height=43 border=1 cellspacing=0 class=Estilo4 bgcolor=#64482D>";
				echo"<tr>";
				echo"<td height=30 align=center>REGISTRO ELIMINADO</td>";
				echo"</tr>";
				echo"</table>";
		}
		if($numero!='45n')
		{
			echo "Intetelo de nuevo";
		}
	}
	
}	//termina la clase

	$nuevo=new Libro();
	$nuevo->imprimirLibro($_POST["idLibro"]);
	$nuevo->eliminarLibro($_POST["idLibro"],$_POST["numero"]);
	
?>	
	
	</center>	</td>
    <td width="404" height="280" align="center" valign="middle">
	<center>
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
