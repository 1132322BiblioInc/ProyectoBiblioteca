<?php
include ('seguridad_usuario.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" href="estilos.css" />
<link rel="stylesheet" href="fonts.css" />
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 207px;
	height: 152px;
	z-index: 1;
	left: 1481px;
	top: 235px;
}
#apDiv2 {
	position: absolute;
	width: 299px;
	height: 1px;
	z-index: 2;
	left: 118px;
	top: 185px;
}
#apDiv3 {  
height: 60px; width: 200px; 
margin:10px; 
background: -webkit-linear-gradient( #FF0, #F00  );
font-size: 20px; 
text-align:center;
padding-top: 20px; 
word-wrap:break-word;
}
#apDiv4 {  
height: 60px; width: 200px; 
margin:10px; 
background: -webkit-linear-gradient( #FF0, #F00  );
font-size: 20px; 
text-align:center;
padding-top: 20px; 
word-wrap:break-word;
}
#apDiv5 {  
height: 60px; width: 200px; 
margin:10px; 
background: -webkit-linear-gradient( #FF0, #F00  );
font-size: 20px; 
text-align:center;
padding-top: 20px; 
word-wrap:break-word;

}
#apDiv6 {  
height: 60px; width: 200px; 
margin:10px; 
background: -webkit-linear-gradient( #FF0, #F00  );
font-size: 20px; 
text-align:center;
padding-top: 20px; 
word-wrap:break-word;

}
#apDiv7 {  
height: 60px; width: 200px; 
margin:10px; 
background: -webkit-linear-gradient( #FF0, #F00 );
font-size: 20px; 
text-align:center;
padding-top: 20px; 
word-wrap:break-word;
}

#apDiv8 {
	position: absolute;
	width: 181px;
	height: 4px;
	z-index: 3;
	left: 350px;
	top: 1160px;
}
.ll table tr td {
	text-align: left;
}
#apDiv9 {
	position: absolute;
	width: 406px;
	height: 182px;
	z-index: 4;
	left: 234px;
	top: 1298px;
	text-align: justify;
	font-family: Verdana, Geneva, sans-serif;
}
#apDiv10 {
	position: absolute;
	width: 187px;
	height: 128px;
	z-index: 5;
	left: 1368px;
	top: 1172px;
}
#apDiv11 {
	position: absolute;
	width: 437px;
	height: 1px;
	z-index: 6;
	left: 1212px;
	top: 1292px;
	font-family: Verdana, Geneva, sans-serif;
}
#apDiv12 {
	position: absolute;
	width: 1312px;
	height: 51px;
	z-index: 7;
	left: 231px;
	top: 1192px;
}
#apDiv13 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 8;
	left: 469px;
	top: 1398px;
}
#apDiv19 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 9;
	left: 68px;
	top: 632px;
}
</style>
</head>

<body class="ll">
<iframe src="banner2.php" align="center" frameborder="0" scrolling="no" width="1902" height="185"> </iframe>
<div class="social"> 
<ul> 
<li><a href="http://www.facebook.com/Lizeth.Alvarez.28" target="_blank" class="icon-facebook"></a></li> 
<li><a href="http://www.googleplus.com/falconmasters" target="_blank" class="icon-google-plus"></a></li>  
<li><a href="http://www.instagram.com/falconmasters" target="_blank" class="icon-instagram"></a></li>
<li><a href="mailto:contacto@falconmaster.com" target="_blank" class="icon-mail3"></a></li>
</ul> 
</div>
<table width="1655" height="1535" border="0" align="center">
  <tr>
    <td width="215" height="809">
    <div id="apDiv1"><img src="imagenes/n.jpg" width="201" height="139" alt="imagen de niños leyendo en un arbol" /></div>
    <div id="apDiv19"><img src="imagenes/Horarios-de-Atencion.png" width="335" height="245" alt="imagen de horario de atencion de la biblioteca" /></div>
    </td>
    <td colspan="2">
     <?php
include ('conexion.php');


$doc=$_SESSION['usuarioactualdoc'];	




$sql1="SELECT * FROM usuario WHERE numero_de_documento='$doc'";

if(!$result1= $db->query($sql1))
{
die('datos no encontrados¡¡¡ ['.$db->error.']');

}

while($row1=$result1->fetch_assoc()) 
{
$nnombres=stripslashes($row1["nombres"]);	
$aapellidos=stripslashes($row1["apellidos"]);
$ttelefono=stripslashes($row1["telefono"]);
$ffecha_de_nacimiento=stripslashes($row1["fecha_de_nacimiento"]);
//jjjjjjjjjjjjjjj

$arr1 = str_split($ffecha_de_nacimiento);
/*echo ($arr1[0]);
echo ($arr1[1]);
echo ($arr1[2]);
echo ($arr1[3]);
echo ($arr1[4]);
echo ($arr1[5]);
echo ($arr1[6]);
echo ($arr1[7]);
echo ($arr1[8]);
echo ($arr1[9]);
*/
$digito1=($arr1[0]);
$digito2=($arr1[1]);
$digito3=($arr1[2]);
$digito4=($arr1[3]);
$digito5=($arr1[4]);
$digito6=($arr1[5]);
$digito7=($arr1[6]);
$digito8=($arr1[7]);
$digito9=($arr1[8]);
$digito10=($arr1[9]);

$anio=$digito1.$digito2.$digito3.$digito4;


$mes=$digito6.$digito7;


$dia=$digito9.$digito10;

$fffecha_de_nacimiento=$anio."-".$mes."-".$dia;
echo"$fffecha_de_nacimiento";
//jjjjjjjjjjjjjjj







$nnumero_de_documento=stripslashes($row1["numero_de_documento"]);

}//fin del while



?>
    <center>
      <form id="form1" name="form1" method="post" action="">
        <table width="518" height="192" border="1">
          <tr>
            <td width="100">NOMBRES</td>
            <td width="131"><label for="select1"></label>
              <select name="select1" id="select1">
                <option>desea actualizar</option>
                <option value="1">SI</option>
                <option value="2">NO</option>
              </select></td>
            <td width="165"><label for="textfield"></label>
              <input type="text" name="textfield" id="textfield" value="<?PHP echo $nnombres;  ?>" /></td>
          </tr>
          <tr>
            <td><p>ROBAYO</p></td>
            <td><label for="select2"></label>
              <select name="select2" id="select2">
                <option>desea actualizar</option>
                <option value="1">SI</option>
                <option value="2">NO</option>
              </select></td>
            <td><label for="textfield2"></label>
              <input type="text" name="textfield2" id="textfield2" value="<?PHP echo $aapellidos;  ?>"" /></td>
          </tr>
          <tr>
            <td>TELEFONO</td>
            <td><label for="select3"></label>
              <select name="select3" id="select3">
                <option>desea actualizar</option>
                <option value="1">SI</option>
                <option value="2">NO</option>
              </select></td>
            <td><label for="textfield3"></label>
              <input type="number" name="textfield3" id="textfield3"  value="<?PHP echo $ttelefono;  ?>" /></td>
          </tr>
          <tr>
            <td>FECHA NACIMIENTO</td>
            <td><label for="select4"></label>
              <select name="select4" id="select4">
                <option>desea actualizar</option>
                <option value="1">SI</option>
                <option value="2">NO</option>
              </select></td>
            <td><label for="textfield4"></label>
            <?php 
			
			
			if($mes=="01")
			{
				$mestexto="Ene";
				
			}
			if($mes=="02")
			{
				$mestexto="Feb";
				echo"Feb";
			}
			if($mes=="03")
			{
				$mestexto="Mar";
				echo"Mar";
			}
			if($mes=="04")
			{
				$mestexto="Abr";
				echo"Abr";
			}
			if($mes=="05")
			{
			     $mestexto="May";
				echo"May";
			}
			if($mes=="06")
			{
				$mestexto="Jun";
				echo"Jun";
			}
			if($mes=="07")
			{
				$mestexto="Jul";
				echo"Jul";
			}
			if($mes=="08")
			{
				$mestexto="Ago";
				echo"Ago";
			}
			if($mes=="09")
			{
				$mestexto="Sep";
				echo"Sep";
			}
			if($mes=="10")
			{
				$mestexto="Oct";
				echo"Oct";
			}
			if($mes=="11")
			{
				$mestexto="Nov";
				echo"Nov";
			}
			if($mes=="12")
			{
				$mestexto="Dic";
				echo"Dic";
			}
			
			
			
			?>
              <select class="date-clear form-control form-select required" id="edit-field-profile-bday-und-0-value-month" name="mes">
                <option selected="selected" value="<?php echo $mes; ?>"><?php echo $mestexto; ?></option>
                <option value="01">Ene</option>
                <option value="02">Feb</option>
                <option value="03">Mar</option>
                <option value="04">Abr</option>
                <option value="05">Mayo</option>
                <option value="06">Jun</option>
                <option value="07">Jul</option>
                <option value="08">Ago</option>
                <option value="09">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dic</option>
              </select>
              <select class="date-clear form-control form-select required" id="edit-field-profile-bday-und-0-value-day" name="dia">
                <option selected="selected" value="<?php echo $dia; ?>"><?php echo $dia; ?></option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
              <select class="date-clear form-control form-select required" id="edit-field-profile-bday-und-0-value-year" name="ano">
                <option selected="selected" value="<?php echo $anio; ?>"><?php echo $anio; ?></option>
                <option value="1920">1920</option>
                <option value="1921">1921</option>
                <option value="1922">1922</option>
                <option value="1923">1923</option>
                <option value="1924">1924</option>
                <option value="1925">1925</option>
                <option value="1926">1926</option>
                <option value="1927">1927</option>
                <option value="1928">1928</option>
                <option value="1929">1929</option>
                <option value="1930">1930</option>
                <option value="1931">1931</option>
                <option value="1932">1932</option>
                <option value="1933">1933</option>
                <option value="1934">1934</option>
                <option value="1935">1935</option>
                <option value="1936">1936</option>
                <option value="1937">1937</option>
                <option value="1938">1938</option>
                <option value="1939">1939</option>
                <option value="1940">1940</option>
                <option value="1941">1941</option>
                <option value="1942">1942</option>
                <option value="1943">1943</option>
                <option value="1944">1944</option>
                <option value="1945">1945</option>
                <option value="1946">1946</option>
                <option value="1947">1947</option>
                <option value="1948">1948</option>
                <option value="1949">1949</option>
                <option value="1950">1950</option>
                <option value="1951">1951</option>
                <option value="1952">1952</option>
                <option value="1953">1953</option>
                <option value="1954">1954</option>
                <option value="1955">1955</option>
                <option value="1956">1956</option>
                <option value="1957">1957</option>
                <option value="1958">1958</option>
                <option value="1959">1959</option>
                <option value="1960">1960</option>
                <option value="1961">1961</option>
                <option value="1962">1962</option>
                <option value="1963">1963</option>
                <option value="1964">1964</option>
                <option value="1965">1965</option>
                <option value="1966">1966</option>
                <option value="1967">1967</option>
                <option value="1968">1968</option>
                <option value="1969">1969</option>
                <option value="1970">1970</option>
                <option value="1971">1971</option>
                <option value="1972">1972</option>
                <option value="1973">1973</option>
                <option value="1974">1974</option>
                <option value="1975">1975</option>
                <option value="1976">1976</option>
                <option value="1977">1977</option>
                <option value="1978">1978</option>
                <option value="1979">1979</option>
                <option value="1980">1980</option>
                <option value="1981">1981</option>
                <option value="1982">1982</option>
                <option value="1983">1983</option>
                <option value="1984">1984</option>
                <option value="1985">1985</option>
                <option value="1986">1986</option>
                <option value="1987">1987</option>
                <option value="1988">1988</option>
                <option value="1989">1989</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
              </select></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            <td><input type="submit" name="actualizarla" id="actualizarla" value="actualizar" /></td>
          </tr>
        </table>
      </form>
    </center>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td width="224">
      <div id="apDiv3" style="border-radius: 20px; font-family: Verdana, Geneva, sans-serif; ">CATALOGO EN LINEA    </div>
      <div id="apDiv4" style="border-radius: 20px; font-family: Verdana, Geneva, sans-serif;">PRESTAMOS </div>
      <div id="apDiv5" style="border-radius: 20px; font-family: Verdana, Geneva, sans-serif;">CONSULTAS </div>
      <div id="apDiv6" style="border-radius: 20px; font-family: Verdana, Geneva, sans-serif;">RENOVACION </div>
     <div id="apDiv7" style="border-radius: 20px; font-family: Verdana, Geneva, sans-serif;">SUSCRIBASE AL PORTAL</div></td>
  </tr>
  <tr>
    <td height="720" colspan="4"><p>.</p>
    <div id="apDiv13"><img src="imagenes/ninos-leyendo.jpg" width="650" height="189" alt="Imagen de niños leyendo en el piso" /></div>
    <div id="apDiv12"><img src="imagenes/ceparador.png" width="1310" height="129" alt="imagen de ceparador" /></div></td>
  </tr>
</table>
<div id="apDiv2"><img src="imagenes/bienvenidos.jpg" width="311" height="140" alt="imagen de bienvenida a la biblioteca y abierto" /></div>
<iframe src="footer.php" align="center" frameborder="0" scrolling="no" width="1902" height="200"></iframe> 
</body>
</html>