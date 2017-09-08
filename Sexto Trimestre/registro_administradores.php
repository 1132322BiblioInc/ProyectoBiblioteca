<?php
include ('seguridad_super_admi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mi Pagina</title>
<link  rel="stylesheet" href="../bastidas/stilos.css" type="text/css"/>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 591px;
	top: 287px;
	background-color: #996600;
}
#apDiv2 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 2;
	left: 745px;
	top: 343px;
	background-color: #996666;
}
#apDiv3 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 36px;
	top: 389px;
}
#apDiv4 {
	position: absolute;
	width: 292px;
	height: 53px;
	z-index: 2;
	left: 150px;
	top: 577px;
}
#apDiv5 {
	position: absolute;
	width: 252px;
	height: 266px;
	z-index: 3;
	left: 173px;
	top: 628px;
	visibility: visible;
}
#Layer1 {
	position:absolute;
	width:127px;
	height:92px;
	z-index:4;
	left: 1765px;
	top: 672px;
}
#Layer2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:5;
	left: 1514px;
	top: 1162px;
}
#Layer3 {
	position:absolute;
	width:407px;
	height:249px;
	z-index:6;
	left: 41px;
	top: 1100px;
}
#Layer4 {
	position:absolute;
	width:265px;
	height:141px;
	z-index:7;
	left: 32px;
	top: 447px;
}
#Layer5 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:8;
	left: 1586px;
	top: 478px;
}
.Estilo1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: x-large;
}
</style>
</head>

<body>
<table width="1040"  border="0" align="center">
  <tr>
    <td height="177" colspan="2" > <iframe src="banner4.php"  align="center" frameborder="0" scrolling="no" width="1902" height="175"> </iframe> </td>
  </tr>
  <tr>
       <td height="215" colspan="2" > <iframe src="menu_admi.php" align="center" frameborder="0" scrolling="no" width="1902" height="280" ></iframe></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
  <!--<iframe src="Slider.html" frameborder="0" scrolling="no" width="1030"> </iframe></td>-->  </tr>
  <tr>
    <td height="630" valign="top" bgcolor="#FFFFFF"><h1>&nbsp;</h1>      <form id="form1" name="form1" method="post" action="neg_registro_admis.php">
        <center>
          <div id="Layer4"><img src="Imagen prueba/bienvenidos.png" alt="bienvenido" width="477" height="163" /></div>
          <table width="900" height="417" border="0">
            <tr>
            <td width="393"><center><label>NOMBRES</label></center></td>
            <td width="497"><input name="nombres" placeholder="Digite su nombre" type="text" id="nombres" size="30" maxlength="30" required="required" /></td>
            </tr>
          <tr>
            <td><center><label>APELLIDOS</label></center></td>
            <td><input name="apellidos" placeholder="Digite su apellido" type="text" id="apellidos" size="30" maxlength="30" required="required" /></td>
            </tr>
          <tr>
            <td><center>NUMERO DE DOCUMENTO</center></td>
            <td><label for="numero_de_documento"></label>
              <input name="numero_de_documento" type="text" id="numero_de_documento" size="30" maxlength="30" /></td>
          </tr>
          <tr>
            <td><center>FECHA DE NACIMIENTO</center></td>
            <td><label for="fecha_de_nacimiento"></label>
              <input type="date" name="fecha_de_nacimiento" id="fecha_de_nacimiento" /></td>
            </tr>
          <tr>
            <td><center>NIVEL DE FORMACION</center></td>
            <td><label>
              <select class="form-control form-select required" id="edit-field-profile-leveln-und" name="nivel_de_formacion"><option value="_none" selected="selected">Seleccione un Valor </option><option value="Primaria">Primaria</option><option value="Secundaria">Secundaria</option><option value="Técnico">Técnico</option><option value="Tecnológico">Tecnológico</option><option value="Universitario">Universitario</option><option value="Postgrado">Postgrado</option><option value="Otro">Otro</option></select>
              </label>
              <label for="select"></label>
              <label>            </label></td>
            </tr>
          <tr>
            <td><center>OCUPACION</center></td>
            <td><label>
              <select class="form-control form-select required" id="edit-field-profile-job-und" name="ocupacion"><option value="_none">- Seleccione un Valor -</option><option value="Ama de Casa">Ama de Casa</option><option value="Desempleado">Desempleado</option><option value="Docente">Docente</option><option value="Empleado">Empleado</option><option value="Empresario">Empresario</option><option value="Estudiante">Estudiante</option><option value="Funcionario">Funcionario</option><option value="Independiente">Independiente</option><option value="Investigador">Investigador</option><option value="Pensionado">Pensionado</option><option value="Otro">Otro</option></select>
              </label></td>
            </tr>
        </table>
          <div id="Layer3"><img src="imagenes/prestamo.jpg" alt="imagen " width="404" height="241" /></div>
          <div id="Layer5"><img src="imagenes/n.jpg" alt="imagen" width="256" height="274" /></div>
          <div id="apDiv5"><img src="Imagen prueba/super.png" width="221" height="257" align="middle" /></div>
          <div class="Estilo1" id="apDiv4">&quot;<?php echo $_SESSION['usuarioactual']; ?>&quot;</div>
          <table width="900" height="275" border="0">
            <tr>
              <td width="394" height="50"><center>
                PAIS
              </center></td>
              <td width="496"><label>
                <input name="pais" placeholder="Digite su departamento" type="text" id="pais" size="30" maxlength="30" required="required" />
              </label></td>
            </tr>
            <tr>
              <td height="44"><center>
                CIUDAD
              </center></td>
              <td><input name="ciudad" placeholder="Digite su ciudad"  type="text" id="ciudad" size="30" maxlength="30" required="required"/></td>
            </tr>
            <tr>
              <td height="47"><center>CONTRASE&Ntilde;A</center></td>
              <td><label for="contrasena"></label>
              <input name="contrasena" type="password" id="contrasena" size="30" maxlength="30" /></td>
            </tr>
            <tr>
              <td height="52"><center>EMAIL</center></td>
              <td><label for="correo_electronico"></label>
              <input name="correo_electronico" type="text" id="correo_electronico" size="30" maxlength="30" /></td>
            </tr>
            <tr>
              <td height="49"><center>TELEFONO</center></td>
              <td><label for="telefono"></label>
              <input name="telefono" type="text" id="telefono" size="30" maxlength="30" /></td>
            </tr>
          </table>
          <table width="900" border="0">
            <tr>
              <td width="225" height="67">&nbsp;</td>
              <td width="665"><center><input type="submit" name="REGISTRAR" id="REGISTRAR" value="REGISTRAR" />
                  <div id="Layer2"><img src="imagenes/leyendo.png" width="282" height="216" /></div>
              </center></td>
            </tr>
        </table></center>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </form></td>
  </tr>
  <tr>
   <td height="102" colspan="3" valign="bottom"> <iframe src="footer.php" align="center" frameborder="0" scrolling="no" width="1902" height="200"></iframe></td>
  </tr>
</table>
</body>
</html>
