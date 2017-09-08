<?php
include ('seguridad.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>biblio inc</title>
<link rel="stylesheet" href="estilos.css"  type="text/css"/>


<body class=body >

<div><center>

<table width="1500" height="1491" border="0" align="center" >
  <tr align="center" valign="top">
    <td height="283" colspan="3" > <iframe src="banner3.php"  align="center" frameborder="0" scrolling="no" width="1902" height="200"> </iframe> </td>
  </tr>
  <tr align="center" valign="top">
    <td height="215" colspan="3" > <iframe src="menu2.php" align="center" frameborder="0" scrolling="no" width="1902" height="300" ></iframe></td>
  </tr>
  
  <tr>
    <td width="394" height="765" align="center" valign="middle"><table width="394" border="0">
      <tr>
        <td width="388"><img src="Imagen prueba/book.png" width="252" height="188" /></td>
      </tr>
      <tr>
        <td><div align="right"><img src="Imagen prueba/libro (1).png" width="254" height="201" /></div></td>
      </tr>
      
    </table>      </td>
    <td width="586" height="765" align="center" valign="middle">
	 <?php

 class Libro
	{
		public function BuscarLibro()
				
				{
					include('conexion.php'); 
					
						$sql="SELECT * FROM libro";
						if( !$result=$db->query($sql))
						{
							die('Datos no encontrados ['. $db->error.']');
						}
						while($row = $result->fetch_assoc())
						{
						 $idLibro = stripslashes($row["idLibro"]);
						
						}
					
					
					
				}
				
	public function ImprimirLibro()
		
 	{
				include('conexion.php');
				
	  $sql="SELECT * FROM libro ";
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
						 $fk_id_EstadoPrestamo = stripslashes($row["fk_id_EstadoPrestamo"]);	
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
					
					echo"</br><table width=480 height=43 border=1 cellspacing=0 class=Estilo4 bgcolor=#F5CBA7>";
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
							echo"<td align=center>$estadoPrestamo</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td>PREVISUALIZACION</td>";
							echo"<td align=center><img src=libro/$imagen width=130 height=180 /></td>";
							echo"</tr>";

							echo "<td align=center height=46>";
				//form 
			
					$titulo=str_replace(" ","_","$titulo");
					$autor=str_replace(" ","_","$autor");
					$editorial=str_replace(" ","_","$editorial");
					$genero=str_replace(" ","_","$genero");
					$descripcionFisica=str_replace(" ","_","$descripcionFisica");
					
				echo "<form id=form1 name=form1 method=post action='actualizar.php'>";
				echo "<input name=idLibro type=hidden id=idLibro value=$idLibro />";
				echo "<input name=titulo type=hidden id=titulo value=$titulo />";
				echo "<input name=autor type=hidden id=autor value=$autor />";
				echo "<input name=editorial type=hidden id=editorial value=$editorial />";
				echo "<input name=cantidad type=hidden id=cantidad value=$cantidad />";
				echo "<input name=genero type=hidden id=genero value=$genero />";
				echo "<input name=fechaPublicacion type=hidden id=fechaPublicacion value=$fechaPublicacion />";
				echo "<input name=descripcionFisica type=hidden id=descripcionFisica value=$descripcionFisica />";
				echo "<input name=fechaRegistro type=hidden id=fechaRegistro value=$fechaRegistro />";
				echo "<input name=estadoPrestamo type=hidden id=estadoPrestamo value=$fk_id_EstadoPrestamo />";
				echo "<input name=imagen type=hidden id=imagen value=$imagen />";
				echo "¿DESEA REALIZAR UNA ACTUALIZACIÓN?";
				echo "</td>";
				echo "<td align=center>";
				echo "Digite 38nl <input name=numero type=text id=numero size=6 pattern=[38nl]+ /></br><input type=submit name=submit value= Actualizar />";
				echo "</form>";
				echo "</td>";
				echo "</tr>";
							echo"</table>";
							
					
			}
		}				
			
}

$nuevo=new Libro();
$nuevo->BuscarLibro();
$nuevo->ImprimirLibro();	
    ?>
      
	 
		</td>
    <td width="494" height="765" align="center" valign="middle">
	<center>
	  <img src="img_slider6.png" alt="imagen de libro " width="337" height="462" />
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
