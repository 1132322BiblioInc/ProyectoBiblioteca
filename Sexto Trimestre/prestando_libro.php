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
body {
	background-image: url(66.jpg);
}
.Estilo3 {font-size: 10px}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style></head>

<body class="Estilo1" >

<div><center>

<table width="1500" height="917" border="0" align="center" >
  <tr align="center" valign="top">
    <td height="283" colspan="3" > <iframe src="banner3.php"  align="center" frameborder="0" scrolling="no" width="1902" height="200"> </iframe> </td>
  </tr>
  <tr align="center" valign="top">
    <td height="215" colspan="3" > <iframe src="menu2.php" align="center" frameborder="0" scrolling="no" width="1902" height="300" ></iframe></td>
  </tr>
  
  <tr>
    <td width="4" height="280" align="center" valign="middle">&nbsp;</td>
    <td width="1470" height="280" align="center" valign="middle">
	<center>
	  <table width="900" border="0">
	    <tr>
       
           <td>PRESTAMOS DE LIBROS</td>
       </tr>
   </table>
	  <p>
	
	  </p>
	  <p>&nbsp; </p>
	  <p>&nbsp;</p>
     <form id="form1" name="form1" method="post" action="prestando_libro2.php">
       <table width="658" border="1">
         <tr bgcolor=#067184>
           <td width="142" class="Estilo1">DATOS</td>
           <td colspan="3" class="Estilo2">&nbsp;</td>
           </tr>
         <tr>
           <td class="Estilo2" bgcolor=#569EAB>CODIGO DE PRESTAMO</td>
           <td width="144" bgcolor=#569EAB>&nbsp;</td>
           <td width="161" bgcolor=#569EAB>&nbsp;</td>
           <td width="183" bgcolor=#569EAB>&nbsp;</td>
         </tr>
         <tr>
           <td class="Estilo2" bgcolor=#569EAB>CODIGO LIBRO</td>
           <td bgcolor=#569EAB><label for="titulo"></label>
             <label for="codigo"></label>
             <input type="text" name="codigo" id="codigo" />
<label for="textfield5"></label></td>
           <td class="Estilo2" bgcolor=#569EAB>TITULO DEL LIBRO</td>
           <td bgcolor=#569EAB><label for="documento"></label>
             <label for="textfield6"></label>
             <input type="text" name="titulo" id="textfield6" />
<label for="nombre"></label></td>
         </tr>
         <tr>
           <td class="Estilo2" bgcolor=#569EAB>DOCUMENTO USUARIO</td>
           <td bgcolor=#569EAB><label for="textfield8"></label>
             <input type="text" name="documento" id="textfield8" /><label for="textfield5"></label></td>
           
           <td class="Estilo2" bgcolor=#569EAB>NOMBRE USUARIO</td>
           <td bgcolor=#569EAB><label for="textfield9"></label>
             <input type="text" name="nombre" id="textfield9" /><label for="textfield5"></label></td>
         </tr>
         <tr>
           <td class="Estilo2" bgcolor=#569EAB>FECHA DE PRESTAMO</td>
           <td bgcolor=#569EAB><label for="fechapres"></label>
             <input type="date" name="fechapres" id="fechapres" /></td>
           <td class="Estilo2" bgcolor=#569EAB>FECHA ENTREGA</td>
           <td bgcolor=#569EAB><label for="textfield7"></label>
             <label for="fechaentre"></label>
             <input  type="date" name="fechaentre" id="fechaentre" /></td>
         </tr>
         <tr bgcolor=#067184>
           <td colspan="3">&nbsp;</td>
           <td><input type="submit" name="button" id="button" value="REGISTRAR Y CONTABILIZAR" /></td>
         </tr>
       </table>
     </form>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
	</center>	</td>
    <td width="0" height="280" align="center" valign="middle">
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
