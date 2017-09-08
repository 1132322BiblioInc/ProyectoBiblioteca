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

<table width="1500" height="1324" border="0" align="center" >
  <tr align="center" valign="top">
    <td height="283" colspan="3" > <iframe src="banner3.php"  align="center" frameborder="0" scrolling="no" width="1902" height="200"> </iframe> </td>
  </tr>
  <tr align="center" valign="top">
    <td height="215" colspan="3" > <iframe src="menu2.php" align="center" frameborder="0" scrolling="no" width="1902" height="300" ></iframe></td>
  </tr>
  
  <tr>
    <td width="423" height="527" align="center" valign="middle"><table width="394" border="0">
      <tr>
        <td width="388"><img src="Imagen prueba/book.png" width="252" height="188" /></td>
      </tr>
      <tr>
        <td><div align="right"><img src="Imagen prueba/libro (1).png" width="254" height="201" /></div></td>
      </tr>
      
    </table>      </td>
    <td width="423" height="527" align="center" valign="middle">
	<center>
	  <form action="neg_buscar.php" method="post" name="form1" class="Estilo2" id="form1">
	    <label> </label>
	    <table width="361" height="58" border="0" align="center">
          <tr>
            <td width="355" align="center" valign="middle" class="Estilo1 Estilo5">BUSQUEDA DE LIBRO</td>
          </tr>
        </table>
	    <label><br />
	    CODIGO DEL LIBRO
	    <br />
	    <input name="idLibro" type="text" id="idLibro" size="16" pattern="[0-9]+" placeholder="DIGITE EL CODIGO" required="required" />
	    </label>
	    <p>INGRESE EL TEXTO 45n <br />
          <input name="numero" type="text" id="numero" placeholder="Digite el texto" pattern="[45n]+" required="required" />
</p>
	    <p>
	      <label></label>
	      <label>
	        <input name="Submit"  type="submit" class="Estilo2" value="Buscar" />
	        </label>
	      </p>
	  </form>
	</center>	</td>
    <td width="423" height="527" align="center" valign="middle">
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
