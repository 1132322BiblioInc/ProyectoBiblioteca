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
.Estilo6 {
	color: #000000;
	font-weight: bold;
	font-size: 22px;
}

-->
</style>
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
    <td width="423" height="765" align="center" valign="middle"><table width="394" border="0">
      <tr>
        <td width="388"><img src="Imagen prueba/book.png" width="252" height="188" /></td>
      </tr>
      <tr>
        <td><div align="right"><img src="Imagen prueba/libro (1).png" width="254" height="201" /></div></td>
      </tr>
      
    </table>      </td>
    <td width="423" height="765" align="center" valign="middle">
	  <p>&nbsp;</p>
	  <table width="381" border="0" align="center">
          <tr>
            <td width="471" align="center" valign="middle" class="Estilo1 Estilo5">ACTUALIZAR  LIBROS </td>
          </tr>
        </table>
	<center>
	
<?php

  class Actualizacion
{
	public function actualizar($idLibro,$titulo,$autor,$editorial,$cantidad,$genero,$fechaPublicacion,$descripcionFisica,$imagen,$fechaRegistro,$fk_id_EstadoPrestamo)
	{
		
		
		include ('conexion.php');
		
		
		$titulo=str_replace("_"," ","$titulo");
					$autor=str_replace("_"," ","$autor");
					$editorial=str_replace("_"," ","$editorial");
					$genero=str_replace("_"," ","$genero");
					$descripcionFisica=str_replace("_"," ","$descripcionFisica");	
					
					
					
					$_SESSION["ses_titulo"]=$titulo;
					$_SESSION["ses_idLibro"]=$idLibro;
					$_SESSION["ses_autor"]=$autor;
					$_SESSION["ses_editorial"]=$editorial;
					$_SESSION["ses_cantidad"]=$cantidad;
					$_SESSION["ses_genero"]=$genero;
					$_SESSION["ses_fechaPublicacion"]=$fechaPublicacion;
					$_SESSION["ses_descripcionFisica"]=$descripcionFisica;
					$_SESSION["ses_imagen"]=$imagen;
					$_SESSION["ses_fechaRegistro"]=$fechaRegistro;
					$_SESSION["ses_fk_id_EstadoPrestamo"]=$fk_id_EstadoPrestamo;
		
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
							echo"<td>IMAGEN DEL LIBRO</td>";
							echo"<td align=center><img src=libro/$imagen width=130 height=180 /></td>";
							echo"</tr>";
							echo"</table>";
		}
	
	}
	
		$nuevo=new Actualizacion();		
$nuevo->actualizar($_POST["idLibro"],$_POST["titulo"],$_POST["autor"],$_POST["editorial"],$_POST["cantidad"],$_POST["genero"],$_POST["fechaPublicacion"],$_POST["descripcionFisica"],$_POST["imagen"],$_POST["fechaRegistro"],$_POST["estadoPrestamo"]);	
							
					
		?>

	  </p>
	  <form action="neg_realizar_actualizacion.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
	    <table width="330" border="5" align="center" bordercolor="#D5D8DC">
          
          <tr>
            <td width="312" align="center" valign="middle" bordercolor="#D5D8DC" ><div align="center">CODIGO DEL LIBRO:  </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D" class="Estilo6" ><div align="center" ><?php echo $_SESSION["ses_idLibro"]; ?>
              <input name="idLibro" type="hidden" id="idLibro" size="16" pattern="[0-9]+" placeholder="DIGITE EL CODIGO" value="<?php echo $_SESSION["ses_idLibro"]; ?>" required="required" />
            </div></td>
          </tr>
          
          
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">TÍTULO</div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">
              <input name="titulo" type="text" id="titulo"  size="30" pattern="[A-ZÑÁÉÍÓÚÜ ]+" placeholder="DIGITE EL TITULO" value="<?php echo $_SESSION["ses_titulo"]; ?>" required="required"/>
            </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">AUTOR</div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">
              <input name="autor" type="text" id="autor" size="30" pattern="[A-ZÑÁÉÍÓÚÜ ]+" placeholder="DIGITE EL AUTOR" value="<?php echo $_SESSION["ses_autor"]; ?>" required="required"/>
            </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">EDITORIAL</div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">
              <input name="editorial" type="text" id="editorial" size="30" pattern="[A-ZÑÁÉÍÓÚÜ ]+" placeholder="DIGITE LA EDITORIAL" value="<?php echo $_SESSION["ses_editorial"]; ?>" required="required"/>
            </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">CANTIDAD </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">
              <input name="cantidad" type="text" id="cantidad" size="17" pattern="[0-9]+" placeholder="DIGITE LA CANTIDAD" value="<?php echo $_SESSION["ses_cantidad"]; ?>" required="required" />
            </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center" class="Estilo2">GENERO</div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">
              <input name="genero" type="text" id="genero" size="30" pattern="[A-ZÑÁÉÍÓÚÜ ]+" placeholder="DIGITE EL GÉNERO" value="<?php echo $_SESSION["ses_genero"]; ?>" required="required"/>
            </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">FECHA DE PUBLICACIÓN </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">
              <input name="fechaPublicacion" type="date" id="fechaPublicacion" size="30" value="<?php echo $_SESSION["ses_fechaPublicacion"]; ?>" required="required"/>
            </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">DESCRIPCIÓN FÍSICA </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">
              <input name="descripcionFisica" type="text" id="descripcionFisica" size="30" pattern="[A-ZÑÁÉÍÓÚÜ ]+" placeholder="DIGITE DESCRIPCIÓN FÍSICA" value="<?php echo $_SESSION["ses_descripcionFisica"]; ?>" required="required" />
            </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">FECHA DE REGISTRO </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">
              <input name="fechaRegistro" type="date" id="fechaRegistro" size="30"  value="<?php echo $_SESSION["ses_fechaRegistro"]; ?>" required="required"/>
            </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">ESTADO DE PRESTAMO </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><input name="estadoPrestamo" type="text" id="estadoPrestamo" size="30" pattern="[0-9]+" placeholder="DIGITE EL PRESTAMO" value="<?php echo $_SESSION["ses_fk_id_EstadoPrestamo"]; ?>" required="required"/></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D">IMAGEN DEL LIBRO</td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">
              <label> 
              Nombre Imagen:
              <input type="text" name="imagen" id="imagen" value="<?php echo $_SESSION["ses_imagen"]; ?>" />
              <br />
              <br />
              <input name="imagen" type="file" id="imagen" required="required"/>
              </label>
            </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">INGRESE EL TEXTO 45n </div></td>
          </tr>
          <tr>
            <td align="center" valign="middle" bordercolor="#64482D"><div align="center">
              <input name="numero" type="text" id="numero" placeholder="Digite el texto" pattern="[45n]+" required="required" />
            </div></td>
          </tr>
          <tr>
            <td height="48" align="center" valign="middle" bordercolor="#64482D"><label>
              <div align="center">
                <input name="Submit" type="submit" class="Estilo2" value="Actualizar" />
                </div>
            </label></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
	  </form>
	  <p>
	    <label></label>
	  </p>
	  </center>	</td>
    <td width="423" height="765" align="center" valign="middle">
	<center>
	  <p><img src="img_slider6.png" width="282" height="412" /></p>
	  <p><img src="img_slider9.jpg" alt="imagen libro" width="284" height="414" />	      </p>
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
