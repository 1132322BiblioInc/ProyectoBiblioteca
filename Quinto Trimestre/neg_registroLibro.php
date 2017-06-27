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

<table width="1500" height="1491" border="3" align="center" >
  <tr align="center" valign="top">
    <td height="283" colspan="3" > <iframe src="banner.php"  align="center" frameborder="0" scrolling="no" width="1467" height="300"> </iframe> </td>
  </tr>
  <tr align="center" valign="top">
    <td height="215" colspan="3" > <iframe src="menu2.php" align="center" frameborder="0" scrolling="no" width="1467" height="300" ></iframe></td>
  </tr>
  
  <tr>
    <td width="423" height="765" align="center" valign="middle"><table width="394" border="0">
      <tr>
        <td width="388"><img src="Imagen prueba/book.png" width="252" height="188" /></td>
      </tr>
      <tr>
        <td><div align="right"><img src="Imagen prueba/libro (1).png" width="254" height="201" /></div></td>
      </tr>
      
    </table>      </td>
    <td width="423" height="765" align="center" valign="middle">
	<table width="477" border="0" align="center">
          <tr>
            <td width="471" align="center" valign="middle" class="Estilo1 Estilo5 Estilo6">REGISTRO DE LIBROS </td>
          </tr>
        </table>
	<center>
	
	  <p>
<?php
			
	class Libro 
	{
	
	
				
			public function registrar($idLibro,$titulo,$autor,$editorial,$cantidad,$genero,$fechaPublicacion,$descripcionFisica,$fechaRegistro,$estadodeprestamo,$numero)
			{
				//insertar imagen
					$directorio=$_SERVER['DOCUMENT_ROOT'].'/BIBLIO INC/libro/';
					$nombret=$_FILES['imagen']['name'];
					$num=date("GHs");
					$nombre=$num.$nombret;
					$tipo=$_FILES['imagen']['type'];
					$tamano=$_FILES['imagen']['size'];
					move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre);
			
				include('conexion.php');
				
					$titulo=str_replace(" ","_","$titulo");
					$autor=str_replace(" ","_","$autor");
					$editorial=str_replace(" ","_","$editorial");
					$genero=str_replace(" ","_","$genero");
					$descripcionFisica=str_replace(" ","_","$descripcionFisica");
										
					if ($numero=='45n')
					{
					
					
					
						mysqli_query($db,"INSERT INTO libro (idLibro,titulo,autor,editorial,cantidad,genero,fechaPublicacion,descripcionFisica,fechaRegistro,fk_id_EstadoPrestamo,imagen) VALUES ('$idLibro','$titulo','$autor','$editorial','$cantidad','$genero','$fechaPublicacion','$descripcionFisica','$fechaRegistro','$estadodeprestamo','$nombre')") or die (mysqli_error($db));
							
								
								 
					$titulo=str_replace("_"," ","$titulo");
					$autor=str_replace("_"," ","$autor");
					$editorial=str_replace("_"," ","$editorial");
					$genero=str_replace("_"," ","$genero");
					$descripcionFisica=str_replace("_"," ","$descripcionFisica");	
						 
							echo"</br><table width=450 height=40 border=1 cellspacing=0 class=Estilo4 bgcolor=#64482D>";
							echo"<tr>";
							echo"<td withd=200>CODIGO DEL LIBRO</td>";
							echo"<td withd=200>$idLibro</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td withd=200>TÍTULO</td>";
							echo"<td withd=200>$titulo</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td>AUTOR</td>";
							echo"<td>$autor</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td>EDITORIAL</td>";
							echo"<td>$editorial</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td>CANTIDAD</td>";
							echo"<td>$cantidad</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td>GÉNERO</td>";
							echo"<td>$genero</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td>FECHA DE PUBLICACIÓN</td>";
							echo"<td>$fechaPublicacion</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td>DESCRIPCIÓN FÍSICA</td>";
							echo"<td>$descripcionFisica</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td>FECHA REGISTRO</td>";
							echo"<td>$fechaRegistro</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td>ESTADO PRESTAMO</td>";
							echo"<td>$estadodeprestamo</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td>NOMBRE IMAGEN</td>";
							echo"<td>$nombre</td>";
							echo"</tr>";
							echo"</table>";
									
							echo"</br><img src=img_registrado.png alt=imagen libro  width=122 height=137 longdesc=libro registrado/>";
            				
							echo"</br>REGISTRO REALIZADO</td>";
          					
							
					}
					
					if($numero!='45n')
					{
						
						echo"</br><img src=img_libroNoEncontrado.png alt=imagen libro  width=122 height=137 longdesc=libro registrado/>";
						echo "</br>NO SE REGISTRO EL LIBRO (INTENTELO DE NUEVO)";
					}
							
			}
		 
	}
		
		
	$nuevo =new Libro();
	$nuevo-> registrar($_POST["idLibro"],$_POST["titulo"],$_POST["autor"],$_POST["editorial"],$_POST["cantidad"],$_POST["genero"],$_POST["fechaPublicacion"],$_POST["descripcionFisica"],$_POST["fechaRegistro"],$_POST["estadodeprestamo"],$_POST["numero"]);
		
?>
</br>
	  
	</center>	</td>
    <td width="423" height="765" align="center" valign="middle">
	<center>
	  <img src="img_slider6.png" width="337" height="462" />
	</center>   </td>
  </tr>
  <tr align="center" valign="top">
    <td height="102" colspan="3" valign="bottom"> <iframe src="footer.php" align="center" frameborder="0" scrolling="no" width="1467" height="81"> </iframe></td>
  </tr>
</table>
</center>
</div>
<h1 align="center" class="Estilo1">&nbsp;</h1>


</body>


</html>
