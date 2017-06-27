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
#apDiv1 {
	position: fixed;
	width: 492px;
	height: 420px;
	z-index: 1;
	left: 40%;
	top: 30%;
	background-color: #F7DC6F;
	opacity:0.9;
}
-->
</style></head>

<body class="Estilo1" >

<div><center>

<table width="1500" height="917" border="3" align="center" >
  <tr align="center" valign="top">
    <td height="283" colspan="3" > <iframe src="banner.php"  align="center" frameborder="0" scrolling="no" width="1467" height="300"> </iframe> </td>
  </tr>
  <tr align="center" valign="top">
    <td height="215" colspan="3" > <iframe src="menu.php" align="center" frameborder="0" scrolling="no" width="1467" height="300" ></iframe>
      <div id="apDiv1">
        <form id="form2" name="form2" method="post" action="ingreso_usuario.php">
          <table width="232" height="41" border="0" align="center">
            <tr>
              <td align="center" valign="middle" class="Estilo1">INGRESAR</td>
            </tr>
      </table>
          <p>
            <label><br />
              <select name="fk_id_rol" class="Estilo2" id="fk_id_rol" required="required">
                <option value="">Seleccione </option>
                <option value="2">Usuario</option>
              </select>
              <br />
              <span class="Estilo2"><br />
                Documento</span><br />
            </label>
            <label>
              <input type="text" name="numero_de_documento" id="numero_de_documento" required />
              <br />
              <span class="Estilo2">Contraseña</span><br />
            </label>
            <label for="contrasena"></label>
            <input type="password" name="contrasena" id="contrasena" required />
            <label> <br />
              <br />
              <input type="submit" class="Estilo2" value="Iniciar Sesión" />
              <br />
              <br />
              <span class="Estilo2"><a href="registro_usuarios.php">Registrese Aqui </a><br />
              </span></label>
          </p>
          <p>&nbsp;</p>
        </form>
      </div></td>
  </tr>
  
  <tr>
    <td width="423" height="280" align="center" valign="middle"><table width="394" border="0">
      <tr>
        <td width="388"><img src="Imagen prueba/book.png" width="252" height="188" /></td>
      </tr>
      <tr>
        <td><div align="right"><img src="Imagen prueba/libro (1).png" width="254" height="201" /></div></td>
      </tr>
      
    </table>
      </td>
    <td width="423" height="280" align="center" valign="middle">
	<center>
	</center>	</td>
    <td width="423" height="280" align="center" valign="middle">
	<center>
	  <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p></p>
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
