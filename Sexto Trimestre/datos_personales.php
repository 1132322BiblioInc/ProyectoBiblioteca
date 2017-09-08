<?php
ob_start();
?>
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
	left: 127px;
	top: 238px;
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
	left: 205px;
	top: 884px;
}
#apDiv13 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 8;
	left: 493px;
	top: 1070px;
}
#apDiv19 {
	position: absolute;
	width: 349px;
	height: 115px;
	z-index: 9;
	left: 726px;
	top: 275px;
}
.Estilo5 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: large;
}
.Estilo6 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: large; color: #0000FF; }
.Estilo4 {font-size: x-large}
#apDiv20 {
	position: absolute;
	width: 350px;
	height: 33px;
	z-index: 10;
	left: 761px;
	top: 248px;
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
<table width="1655" height="1156" border="0" align="center">
  <tr>
    <td width="215" height="659">
    <div id="apDiv1"><img src="imagenes/n.jpg" width="201" height="139" alt="imagen de niños leyendo en un arbol" /></div></td>
    <td colspan="2">
     <div id="apDiv19">
       <p align="center" class="Estilo1 Estilo4"><img src="1.png" alt="" width="222" height="191" /></p>
     </div>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <div id="apDiv20">"<?php echo $_SESSION['usuarioactualnom']; echo" "; echo $_SESSION['usuarioactualape'];?>"</div>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>
       <?php
include('conexion.php');


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
$ccorreo_electronico=stripslashes($row1["correo_electronico"]);
$nnovedades=stripslashes($row1["novedades"]);
$ppais=stripslashes($row1["pais"]);
$cciudad=stripslashes($row1["ciudad"]);
$oocupacion=stripslashes($row1["ocupacion"]);
$ttemas_de_interes=stripslashes($row1["temas_de_interes"]);
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

//jjjjjjjjjjjjjjj







$nnumero_de_documento=stripslashes($row1["numero_de_documento"]);

}//fin del while



?>
     </p>
     <center>
       <form id="form1" name="form1" method="post" action="actualizacion_user.php">
        <center>
          <table width="1163" height="297" border="0" align="center">
            <tr>
            <td width="234" class="Estilo6"><center>NOMBRES</center></td>
            <td width="281" class="Estilo5"><input type="text" name="nombres" id="nombres" value="<?PHP echo $nnombres;  ?>" /></td>
            <td width="194" class="Estilo6"><center>CIUDAD</center></td>
            <td width="436" class="Estilo5"><span class="Estilo2">
              <select name="ciudad" onchange="javascript:setTimeout('__doPostBack(\'ddlDeptoMunicipio$dlpDepartamentos\',\'\')', 0)" language="javascript" id="ddlDeptoMunicipio_dlpDepartamentos">
               <option selected="selected" value="<?php echo $cciudad; ?>"><?php echo $cciudad; ?></option>
                <option value="91">AMAZONAS</option>
                <option value="05">ANTIOQUIA</option>
                <option value="81">ARAUCA</option>
                <option value="88">ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA</option>
                <option value="08">ATLÁNTICO</option>
                <option value="BOGOTÁ, D.C." selected="selected">BOGOTÁ, D.C.</option>
                <option value="13">BOLÍVAR</option>
                <option value="15">BOYACÁ</option>
                <option value="17">CALDAS</option>
                <option value="18">CAQUETÁ</option>
                <option value="85">CASANARE</option>
                <option value="19">CAUCA</option>
                <option value="20">CESAR</option>
                <option value="27">CHOCÓ</option>
                <option value="23">CÓRDOBA</option>
                <option value="25">CUNDINAMARCA</option>
                <option value="94">GUAINÍA</option>
                <option value="95">GUAVIARE</option>
                <option value="41">HUILA</option>
                <option value="44">LA GUAJIRA</option>
                <option value="47">MAGDALENA</option>
                <option value="50">META</option>
                <option value="00">NACIÓN</option>
                <option value="52">NARIÑO</option>
                <option value="54">NORTE DE SANTANDER</option>
                <option value="86">PUTUMAYO</option>
                <option value="63">QUINDIO</option>
                <option value="66">RISARALDA</option>
                <option value="68">SANTANDER</option>
                <option value="70">SUCRE</option>
                <option value="73">TOLIMA</option>
                <option value="76">VALLE DEL CAUCA</option>
                <option value="97">VAUPÉS</option>
                <option value="99">VICHADA</option>
              </select>
            </span></td>
          </tr>
          <tr>
            <td class="Estilo6"><center>APELLIDOS</center></td>
            <td class="Estilo5"><input type="text" name="apellidos" id="apellidos" value="<?PHP echo $aapellidos;  ?>"" /></td>
            <td class="Estilo6"><center>TÉLEFONO</center></td>
            <td class="Estilo5"><input type="number" name="telefono" id="telefono"  value="<?PHP echo $ttelefono;  ?>" /></td>
          </tr>
          <tr>
            <td height="72" class="Estilo6"><center>FECHA DE NACIMIENTO</center></td>
            <td class="Estilo5">
			
			<?php 
			
			
			if($mes=="01")
			{
				$mestexto="Ene";
				
			}
			if($mes=="02")
			{
				$mestexto="Feb";
				
			}
			if($mes=="03")
			{
				$mestexto="Mar";
				
			}
			if($mes=="04")
			{
				$mestexto="Abr";
				
			}
			if($mes=="05")
			{
			     $mestexto="May";
				
			}
			if($mes=="06")
			{
				$mestexto="Jun";
				
			}
			if($mes=="07")
			{
				$mestexto="Jul";
				
			}
			if($mes=="08")
			{
				$mestexto="Ago";
				
			}
			if($mes=="09")
			{
				$mestexto="Sep";
				
			}
			if($mes=="10")
			{
				$mestexto="Oct";
			
			}
			if($mes=="11")
			{
				$mestexto="Nov";
				
			}
			if($mes=="12")
			{
				$mestexto="Dic";
				
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
            <td class="Estilo6"><center>OCUPACIÓN</center></td>
            <td class="Estilo5"><span class="Estilo2">
              <select class="form-control form-select required" id="edit-field-profile-job-und" name="ocupacion">
               <option selected="selected" value="<?php echo $oocupacion; ?>"><?php echo $oocupacion; ?></option>
                <option value="_none">- Seleccione un Valor -</option>
                <option value="Ama de Casa">Ama de Casa</option>
                <option value="Desempleado">Desempleado</option>
                <option value="Docente">Docente</option>
                <option value="Empleado">Empleado</option>
                <option value="Empresario">Empresario</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Funcionario">Funcionario</option>
                <option value="Independiente">Independiente</option>
                <option value="Investigador">Investigador</option>
                <option value="Pensionado">Pensionado</option>
                <option value="Otro">Otro</option>
              </select>
            </span></td>
          </tr>
          <tr>
            <td class="Estilo6"><center>CORREO ELECTRONICO</center></td>
            <td class="Estilo5"><input type="text" name="correo_electronico" id="correo_electronico" value="<?PHP echo $ccorreo_electronico;  ?>" /></td>
            <td class="Estilo6"><center>TEMAS DE INTERÉS</center> </td>
            <td class="Estilo5"><span class="Estilo2">
              <select name="temas_de_interes" id="select3">
               <option selected="selected" value="<?php echo $ttemas_de_interes; ?>"><?php echo $ttemas_de_interes; ?></option>
                <option value="_none">Seleccione un valor</option>
                <option value="musica y ciencia">musica y ciencia</option>
                <option value="lectura y cultura">lectura y cultura</option>
                <option value="comunicaciones y cinematografia">comunicaciones y cinematografia</option>
                <option value="literatura y artes escenicas">literatura y artes escenicas</option>
                <option value="historia y patrimonio">historia y patrimonio</option>
              </select>
            </span></td>
          </tr>
          <tr>
            <td height="63" class="Estilo6"><center>NOVEDADES</center></td>
            <td class="Estilo5"><?php
			  if ($nnovedades=="no")
			  {
				echo "<input type=radio name=novedades value=no id=RadioGroup1_0  checked=checked />";echo "No   </br>";
				echo "<input type=radio name=novedades value=si id=RadioGroup1_0 />";  echo "Si   </br>";
			  }
			  
			  
			  if ($nnovedades=="si")
			  {
				echo "<input type=radio name=novedades value=no id=RadioGroup1_0  checked=checked />"; echo "No   </br>";
				
				echo "<input type=radio name=novedades value=si id=RadioGroup1_0 checked=checked />";  echo "Si   </br>";
			  }
			  
			  
			  			  
			  ?></td>
            <td class="Estilo6"><center>PAÍS</center></td>
            <td class="Estilo5"><span class="Estilo2">
              <select name="pais" id="pais" onchange="CambioPais();" style="width:190px"; required="required">
                <option selected="selected" value="<?php echo $ppais; ?>"><?php echo $ppais; ?></option>
                <option value="ALBANIA">ALBANIA</option>
                <option value="ALEMANIA">ALEMANIA</option>
                <option value="ANDORRA">ANDORRA</option>
                <option value="ANGOLA">ANGOLA</option>
                <option value="ANGUILLA">ANGUILLA</option>
                <option value="ANTARTIDA">ANTARTIDA</option>
                <option value="ANTIGUA Y BARBUDA">ANTIGUA Y BARBUDA</option>
                <option value="ANTILLAS">ANTILLAS</option>
                <option value="ANTILLAS">ANTILLAS</option>
                <option value="ARCHIPIELAGO SVALBARD">ARCHIPIELAGO SVALBARD</option>
                <option value="ARGELIA">ARGELIA</option>
                <option value="ARGENTINA">ARGENTINA</option>
                <option value="ARMENIA">ARMENIA</option>
                <option value="ARUBA">ARUBA</option>
                <option value="AUSTRALIA">AUSTRALIA</option>
                <option value="AUSTRIA">AUSTRIA</option>
                <option value="AZERBAIJAN">AZERBAIJAN</option>
                <option value="BAHAMAS">BAHAMAS</option>
                <option value="BAHRAIN">BAHRAIN</option>
                <option value="BANGLADESH">BANGLADESH</option>
                <option value="BARBADOS">BARBADOS</option>
                <option value="BELARUS">BELARUS</option>
                <option value="BELGICA">BELGICA</option>
                <option value="BELIZE">BELIZE</option>
                <option value="BENIN">BENIN</option>
                <option value="BERMUDAS">BERMUDAS</option>
                <option value="BHUTAN">BHUTAN</option>
                <option value="BOLIVIA">BOLIVIA</option>
                <option value="BOSNIA AND HERZEGOWINA">BOSNIA AND HERZEGOWINA</option>
                <option value="BOTSWANA">BOTSWANA</option>
                <option value="BOUVET">BOUVET</option>
                <option value="BRASIL">BRASIL</option>
                <option value="BRITISH INDIAN OCEAN TERRITORY">BRITISH INDIAN OCEAN TERRITORY</option>
                <option value="BRUNEI">BRUNEI</option>
                <option value="BULGARIA">BULGARIA</option>
                <option value="BURKINA FASO">BURKINA FASO</option>
                <option value="38">BURMA</option>
                <option value="21">BURUNDI</option>
                <option value="54">CABO VERDE</option>
                <option value="121">CAMBOYA</option>
                <option value="49">CAMERUN</option>
                <option value="42">CANADA</option>
                <option value="213">CHAD</option>
                <option value="56">CHECOESLOVAQUIA</option>
                <option value="46">CHILE</option>
                <option value="47">CHINA</option>
                <option value="60">CHIPRE</option>
                <option value="COLOMBIA">COLOMBIA</option>
                <option value="50">CONGO</option>
                <option value="48">COSTA DE MARFIL</option>
                <option value="55">COSTA RICA</option>
                <option value="103">CROATIA (local name: Hrvatska)</option>
                <option value="57">CUBA</option>
                <option value="250">CURAZAO</option>
                <option value="3">DESCONOCIDO</option>
                <option value="66">DINAMARCA</option>
                <option value="64">DJIBOUTI</option>
                <option value="65">DOMINICA</option>
                <option value="219">EAST TIMOR</option>
                <option value="69">ECUADOR</option>
                <option value="70">EGIPTO</option>
                <option value="199">EL SALVADOR</option>
                <option value="11">EMIRATOS ARABES UNIDOS</option>
                <option value="71">ERITREA</option>
                <option value="1">ESPAÑA</option>
                <option value="231">ESTADOS UNIDOS DE AMERICA</option>
                <option value="74">ESTONIA</option>
                <option value="75">ETIOPIA</option>
                <option value="78">FALKLAND IS.</option>
                <option value="77">FIJI</option>
                <option value="176">FILIPINAS</option>
                <option value="76">FINLANDIA</option>
                <option value="82">FRANCE, METROPOLITAN</option>
                <option value="79">FRANCIA</option>
                <option value="97">FRENCH GUIANA</option>
                <option value="16">FRENCH SOUTHERN TERRITORIES</option>
                <option value="83">GABON</option>
                <option value="90">GAMBIA</option>
                <option value="85">GEORGIA</option>
                <option value="86">GHANA</option>
                <option value="87">GIBRALTAR</option>
                <option value="94">GRANADA</option>
                <option value="93">GRECIA</option>
                <option value="95">GROELANDIA</option>
                <option value="89">GUADALUPE</option>
                <option value="98">GUAN</option>
                <option value="96">GUATEMALA</option>
                <option value="88">GUINEA</option>
                <option value="92">GUINEA ECUATORIAL</option>
                <option value="91">GUINEA-BISSAU</option>
                <option value="99">GUYANA</option>
                <option value="104">HAITI</option>
                <option value="102">HONDURAS</option>
                <option value="100">HONG KONG</option>
                <option value="105">HUNGRIA</option>
                <option value="107">INDIA</option>
                <option value="110">IRAN</option>
                <option value="111">IRAQ</option>
                <option value="109">IRLANDA</option>
                <option value="59">IS. CAIMAN</option>
                <option value="44">IS. COCOS-KEELING</option>
                <option value="51">IS. COOK</option>
                <option value="58">IS. CRISTMAN</option>
                <option value="101">IS. HEARD-McDONALD</option>
                <option value="174">IS. PITCAIRN</option>
                <option value="197">IS. SALOMON</option>
                <option value="217">IS. TOKELAO</option>
                <option value="236">IS. VIRGENES (GB)</option>
                <option value="237">IS. VIRGENES (U.S.)</option>
                <option value="240">IS. WALLIS-FUTUNA</option>
                <option value="245">IS.MARION-PRINCE EDWARD</option>
                <option value="53">ISL. COMORO</option>
                <option value="142">ISL. MALDIVE</option>
                <option value="112">ISLANDIA</option>
                <option value="80">ISLAS FAROES</option>
                <option value="113">ISRAEL</option>
                <option value="114">ITALIA</option>
                <option value="115">JAMAICA</option>
                <option value="117">JAPON</option>
                <option value="116">JORDANIA</option>
                <option value="118">KAZAKHSTAN</option>
                <option value="119">KENIA</option>
                <option value="122">KIRIBATI</option>
                <option value="181">KOREA DEL NORTE</option>
                <option value="124">KOREA DEL SUR</option>
                <option value="125">KUWAIT</option>
                <option value="120">KYRGYZSTAN</option>
                <option value="126">LAOS</option>
                <option value="136">LATVIA</option>
                <option value="133">LESOTHO</option>
                <option value="127">LIBANO</option>
                <option value="128">LIBERIA</option>
                <option value="129">LIBIA</option>
                <option value="131">LIECHTENSTEIN</option>
                <option value="134">LITHUANIA</option>
                <option value="135">LUXEMBURGO</option>
                <option value="137">MACAO</option>
                <option value="145">MACEDONIA, THE FORMER YUGOSLAV</option>
                <option value="141">MADAGASCAR</option>
                <option value="106">MALASIA</option>
                <option value="157">MALASIA</option>
                <option value="156">MALAWI</option>
                <option value="146">MALI</option>
                <option value="147">MALTA</option>
                <option value="138">MARRUECOS</option>
                <option value="144">MARSHALL ISLANDS</option>
                <option value="154">MARTINIQUE</option>
                <option value="155">MAURICIUS</option>
                <option value="152">MAURITANIA</option>
                <option value="158">MAYOTTE</option>
                <option value="143">MÉXICO</option>
                <option value="81">MICRONESIA, FEDERATED STATES O</option>
                <option value="140">MOLDOVA, REPUBLIC OF</option>
                <option value="139">MONACO</option>
                <option value="149">MONGOLIA</option>
                <option value="153">MONTSERRAT</option>
                <option value="151">MOZAMBIQUE</option>
                <option value="148">MYANMAR</option>
                <option value="251">NACIONES UNIDAS</option>
                <option value="159">NAMIBIA</option>
                <option value="169">NAURU</option>
                <option value="180">NAVASSA I</option>
                <option value="168">NEPAL</option>
                <option value="164">NICARAGUA</option>
                <option value="161">NIGER</option>
                <option value="163">NIGERIA</option>
                <option value="165">NIUE</option>
                <option value="0">NO DISPONIBLE</option>
                <option value="162">NORFOLK ISLAND</option>
                <option value="150">NORTHERN MARIANA ISLANDS</option>
                <option value="167">NORUEGA</option>
                <option value="160">NUEVA CALEDONIA</option>
                <option value="170">NUEVA ZELANDA</option>
                <option value="171">OMAN</option>
                <option value="166">PAISES BAJOS</option>
                <option value="172">PAKISTAN</option>
                <option value="177">PALAU</option>
                <option value="173">PANAMA</option>
                <option value="178">PAPUA NUEVA GUINEA</option>
                <option value="183">PARAGUAY</option>
                <option value="175">PERU</option>
                <option value="184">POLINESIA FRANCESA</option>
                <option value="179">POLONIA</option>
                <option value="182">PORTUGAL</option>
                <option value="185">QATAR</option>
                <option value="84">REINO UNIDO</option>
                <option value="41">REP. CENTRA AFRICANA</option>
                <option value="61">REP. CHECA</option>
                <option value="67">REPUB. DOMINICANA</option>
                <option value="186">REUNION</option>
                <option value="189">RUANDA</option>
                <option value="187">RUMANIA</option>
                <option value="188">RUSIA</option>
                <option value="72">SAHARA</option>
                <option value="123">SAINT KITTS AND NEVIS</option>
                <option value="14">SAMOA AMERICANA</option>
                <option value="200">SAN MARINO</option>
                <option value="234">SAN VICENTE</option>
                <option value="195">SANTA HELENA</option>
                <option value="130">SANTA LUCIA</option>
                <option value="203">SATO TOME Y PRINCIPE</option>
                <option value="192">SENEGAL</option>
                <option value="210">SEYCHELLES</option>
                <option value="198">SIERRA LEONE</option>
                <option value="193">SINGAPUR</option>
                <option value="211">SIRIA</option>
                <option value="206">SLOVAKIA (Slovak Republic)</option>
                <option value="207">SLOVENIA</option>
                <option value="201">SOMALIA</option>
                <option value="249">SOUTH AFRICA</option>
                <option value="194">SOUTH GEORGIA &amp; THE S. SANDWIC</option>
                <option value="132">SRI LANKA</option>
                <option value="202">ST. PIERRE AND MIQUELON</option>
                <option value="209">SUAZILAND</option>
                <option value="191">SUDAN</option>
                <option value="208">SUECIA</option>
                <option value="45">SUIZA</option>
                <option value="205">SURINAME</option>
                <option value="225">TAIWAN</option>
                <option value="216">TAJIKISTAN</option>
                <option value="226">TANZANIA</option>
                <option value="215">THAILANDIA</option>
                <option value="214">TOGO</option>
                <option value="220">TONGA</option>
                <option value="221">TRINIDAD-TOBAGO</option>
                <option value="222">TUNEZ</option>
                <option value="218">TURKMENISTAN</option>
                <option value="212">TURKS AND CAICOS ISLANDS</option>
                <option value="223">TURQUIA</option>
                <option value="224">TUVALU</option>
                <option value="227">UGANDA</option>
                <option value="228">UKRAINE</option>
                <option value="204">UNION SOVIETICA</option>
                <option value="229">UNITED STATES MINOR OUTLYING I</option>
                <option value="230">URUGUAY</option>
                <option value="232">UZBEKISTAN</option>
                <option value="239">VANUATU</option>
                <option value="233">VATICANO</option>
                <option value="235">VENEZUELA</option>
                <option value="238">VIETNAM</option>
                <option value="241">WESTERN SAMOA</option>
                <option value="242">YEMEN</option>
                <option value="243">YEMEN DEL SUR</option>
                <option value="244">YUGOSLAVIA</option>
                <option value="246">ZAIRE</option>
                <option value="247">ZAMBIA</option>
                <option value="248">ZIMBABWE</option>
              </select>
            </span></td>
          </tr>
      </table>
          <p>
            <input type="submit" name="ACTUALIZAR" id="ACTUALIZAR" value="ACTUALIZAR" />
          </p>
        </center>
      </form>
  </center>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td width="224">&nbsp;</td>
  </tr>
  <tr>
    <td height="404" colspan="4"><p>.</p>
    <div id="apDiv13"><img src="imagenes/ninos-leyendo.jpg" width="650" height="189" alt="Imagen de niños leyendo en el piso" /></div>
    <div id="apDiv12"><img src="imagenes/ceparador.png" width="1310" height="129" alt="imagen de ceparador" /></div></td>
  </tr>
</table>
<div id="apDiv2"><img src="imagenes/bienvenidos.jpg" width="311" height="140" alt="imagen de bienvenida a la biblioteca y abierto" /></div>
<iframe src="footer.php" align="center" frameborder="0" scrolling="no" width="1902" height="200"></iframe> 
</body>
</html>