<?php
include ('seguridad.php');
?>
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
	<center>
	  <form action="neg_registro_libro.php" method="post" enctype="multipart/form-data" name="form1" class="Estilo2" id="form1">
	    <label> </label>
	    <table width="326" height="58" border="0" align="center">
          <tr>
            <td width="304" align="center" valign="middle" class="Estilo1 Estilo5 Estilo6">REGISTRAR LIBRO</td>
          </tr>
        </table>
	    <label><br />
	    CODIGO DEL LIBRO
	    <br />
	    <input name="idLibro" type="text" id="idLibro" size="17" pattern="[0-9]+" placeholder="DIGITE EL CODIGO"  required="required" />
	    <br />
        <br />
        TÍTULO<br />
	    <input name="titulo" type="text" id="titulo" size="30" pattern="[A-ZÑÁÉÍÓÚÜ ]+" placeholder="DIGITE EL TITULO" required="required"/>
	    <br />
	    <br />
	    AUTOR<br />
	    <input name="autor" type="text" id="autor" size="30" pattern="[A-ZÑÁÉÍÓÚÜ ]+" placeholder="DIGITE EL AUTOR" required="required"/>
	    <br />
	    <br />
	    EDITORIAL<br />
	    <input name="editorial" type="text" id="editorial" size="30" pattern="[A-ZÑÁÉÍÓÚÜ ]+" placeholder="DIGITE LA EDITORIAL" required="required"/>
	    <br />
	    <br />
	    CANTIDAD
	    <br />
        <input name="cantidad" type="text" id="cantidad" size="17" pattern="[0-9]+" placeholder="DIGITE LA CANTIDAD" required="required" />
        <br />
        <br />
        GENERO<br />
        <input name="genero" type="text" id="genero" size="30" pattern="[A-ZÑÁÉÍÓÚÜ ]+" placeholder="DIGITE EL GÉNERO"  required="required"/>
        <br />
        <br />
        FECHA DE PUBLICACIÓN <br />
<input name="fechaPublicacion" type="date" id="fechaPublicacion" size="30" required="required"/>
</label>
	    <p>DESCRIPCIÓN FÍSICA <br />
          <input name="descripcionFisica" type="text" id="descripcionFisica" size="30" pattern="[A-ZÑÁÉÍÓÚÜ ]+" placeholder="DIGITE DESCRIPCIÓN FÍSICA" required="required" />
	    </p>
	    <p>FECHA DE REGISTRO <br />
          <input name="fechaRegistro" type="date" id="fechaRegistro" size="30" required="required"/>
          <input name="estadoPrestamo" type="hidden" id="estadoPrestamo" value="1" />
	    </p>
	    <p>IMAGEN DEL LIBRO <br />
	      <label>
	      <input name="imagen" type="file" id="imagen" />
	      </label>
	    </p>
	    <p>
	      <label for="estadodeprestamo">DISPONIBILIDAD DEL LIBRO<br />
	      </label>
	      <select name="estadodeprestamo" id="estadodeprestamo">
	        <option>disponibilidad</option>
	        <option value="1">Disponible</option>
	        <option value="2">No disponible</option>
	        </select>
	    </p>
	    <p>INGRESE EL TEXTO 45n <br />
          <input name="numero" type="text" id="numero" size="30" placeholder="DIGITE EL TEXTO" pattern="[45n]+" required="required" />
</p>
	    <p>
	      <label></label>
	      <label>
	        <input name="Submit"  type="submit" class="Estilo2" value="Registrar" />
	        </label>
	      </p>
	  </form>
	</center>	</td>
    <td width="423" height="765" align="center" valign="middle">
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
