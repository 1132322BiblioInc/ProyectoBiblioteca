<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Biblio Inc</title>
<link rel="stylesheet" href="estilos.css"  type="text/css"/>


<body class=body >

<div><center>

<table width="1500" height="1329" border="0" align="center" >
  <tr align="center" valign="top">
    <td height="283" colspan="3" > <iframe src="banner.php"  align="center" frameborder="0" scrolling="no" width="1902" height="200"> </iframe> </td>
  </tr>
  <tr align="center" valign="top">
    <td height="215" colspan="3" > <iframe src="menu2.php" align="center" frameborder="0" scrolling="no" width="1902" height="300" ></iframe></td>
  </tr>
  
  <tr>
    <td width="502" height="603" align="center" valign="middle"><table width="394" border="0">
      <tr>
        <td width="388"><img src="Imagen prueba/book.png" width="252" height="188" /></td>
      </tr>
      <tr>
        <td><div align="right"><img src="Imagen prueba/libro (1).png" width="254" height="201" /></div></td>
      </tr>
      
    </table>      </td>
    <td width="482" height="603" align="center" valign="middle"><table width="381" border="0" align="center">
          <tr>
            <td width="471" align="center" valign="middle" class="Estilo1 Estilo5">ACTUALIZAR  LIBROS </td>
          </tr>
        </table>
	<center>
	
<?php
	 class Libro
	 {
	
		public function actualizarLibro($idLibro,$titulo,$autor,$editorial,$cantidad,$genero,$fechaPublicacion,$descripcionFisica,$fechaRegistro,$estadoPrestamo,$numero)
		{
		//insertar imagen
					$directorio=$_SERVER['DOCUMENT_ROOT'].'/Modelo/libro/';
					$nombret=$_FILES['imagen']['name'];
					$num=date("GHs");
					$nombre=$num.$nombret;
					$tipo=$_FILES['imagen']['type'];
					$tamano=$_FILES['imagen']['size'];
					move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre);
					
			include ('conexion.php');
		if($numero=="45n")
		{
		
					$titulo=str_replace(" ","_","$titulo");
					$autor=str_replace(" ","_","$autor");
					$editorial=str_replace(" ","_","$editorial");
					$genero=str_replace(" ","_","$genero");
					$descripcionFisica=str_replace(" ","_","$descripcionFisica");

			mysqli_query($db,"UPDATE libro SET titulo = '$titulo' WHERE idLibro='$idLibro'")or die (mysqli_error($db));
			mysqli_query($db,"UPDATE libro SET autor = '$autor' WHERE idLibro='$idLibro'")or die (mysqli_error($db));
			mysqli_query($db,"UPDATE libro SET editorial = '$editorial' WHERE idLibro='$idLibro'")or die (mysqli_error($db));
			mysqli_query($db,"UPDATE libro SET cantidad = '$cantidad' WHERE idLibro='$idLibro'")or die (mysqli_error($db));
			mysqli_query($db,"UPDATE libro SET genero = '$genero' WHERE idLibro='$idLibro'")or die (mysqli_error($db));
			mysqli_query($db,"UPDATE libro SET fechaPublicacion = '$fechaPublicacion' WHERE idLibro='$idLibro'")or die (mysqli_error($db));
			mysqli_query($db,"UPDATE libro SET descripcionFisica = '$descripcionFisica' WHERE idLibro='$idLibro'")or die (mysqli_error($db));		
			mysqli_query($db,"UPDATE libro SET fechaRegistro = '$fechaRegistro' WHERE idLibro='$idLibro'")or die (mysqli_error($db));
			mysqli_query($db,"UPDATE libro SET fk_id_EstadoPrestamo = '$estadoPrestamo' WHERE idLibro='$idLibro'")or die (mysqli_error($db));
			mysqli_query($db,"UPDATE libro SET imagen = '$nombre' WHERE idLibro='$idLibro'")or die (mysqli_error($db));
		
				
			
		
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
									
					echo"</br><table width=460 height=43 border=1 cellspacing=0 class=Estilo4 bgcolor=#F5CBA7>";
							echo"<tr>";
							echo"<td withd=200 height=30>CODIGO DEL LIBRO</td>";
							echo"<td align=center>$idLibro</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td withd=200 height=30>TÍTULO</td>";
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
			echo"</br>";		
			echo"<table width=280 border=0 align=center>";
          	echo"<tr>";
            echo"<td width=300 align=center valign=middle class=Estilo2 bgcolor= #F5CBA7 >REGISTRO ACTUALIZADO!! </td>";
          	echo"</tr>";
        	echo"</table>";
			
		}
		
			
		if($numero!="45n")	
		{
		
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
						 $fk_id_EstadoPrestamo = stripslashes($row["fk_id_EstadoPrestamo"]);	
						 $imagen = stripslashes($row["imagen"]);
					
			$sql2="SELECT * FROM estadoprestamo WHERE idEstadoPrestamo='$fk_idEstadoPrestamo'";
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
					
									
					echo"</br><table width=400 height=43 border=1 cellspacing=0 class=Estilo4 bgcolor=#F5CBA7>";
							echo"<tr>";
							echo"<td withd=200 height=30>CODIGO DEL LIBRO</td>";
							echo"<td align=center>$idLibro</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td withd=200 height=30>TÍTULO</td>";
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
							echo"<td><img src=libro/$imagen width=130 height=180 /></td>";
							echo"</tr>";
							echo"</table>";
							
							
							}
			echo"</br>";		
			echo"<table width=280 border=0 align=center>";
          	echo"<tr>";
            echo"<td width=300 align=center valign=middle class=Estilo2 bgcolor= #B69A7C >NO SE REGISTRARON CAMBIOS </td>";
          	echo"</tr>";
        	echo"</table>";
		
		}
		
		}
		
	}
	
	$nuevo=new Libro();
	$nuevo->actualizarLibro($_POST["idLibro"],$_POST["titulo"],$_POST["autor"],$_POST["editorial"],$_POST["cantidad"],$_POST["genero"],$_POST["fechaPublicacion"],$_POST["descripcionFisica"],$_POST["fechaRegistro"],$_POST["estadoPrestamo"],$_POST["numero"]);
		
		?>
<label></label>
	</center>	</td>
    <td width="490" height="603" align="center" valign="middle">
	<center>
	  <img src="img_slider6.png" width="337" height="462" />
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