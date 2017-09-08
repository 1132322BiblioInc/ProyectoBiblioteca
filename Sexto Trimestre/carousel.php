<!DOCTYPE html>
<html lang="en">
<head>
        <title>Circular Content Carousel with jQuery</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Circular Content Carousel with jQuery" />
        <meta name="keywords" content="jquery, conent slider, content carousel, circular, expanding, sliding, css3" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Coustard:900' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css' />
	<style type="text/css">
		body,td,th {
	font-family: "PT Sans Narrow", Arial, sans-serif;
}
        #apDiv1 {
	position: absolute;
	width: 152px;
	height: 53px;
	z-index: 1;
	left: 93px;
	top: 276px;
	font-weight: bold;
}
        #apDiv2 {
	position: absolute;
	width: 238px;
	height: 59px;
	z-index: 1;
	left: 48px;
	top: 261px;
	font-weight: bold;
	font-family: Verdana, Geneva, sans-serif;
}
        #apDiv3 {
	position: absolute;
	width: 220px;
	height: 65px;
	z-index: 1;
	left: 66px;
	top: 261px;
	font-family: Georgia, "Times New Roman", Times, serif;
	background-color: #FFFFFF;
	font-size: 18px;
	font-weight: bold;
}
        #apDiv4 {
	position: absolute;
	width: 55px;
	height: 59px;
	z-index: 1;
	left: -51px;
	top: 1px;
}
        #apDiv5 {
	position: absolute;
	width: 200px;
	height: 63px;
	z-index: 1;
	left: 57px;
	top: 256px;
}
        #apDiv6 {
	position: absolute;
	width: 59px;
	height: 2px;
	z-index: 2;
	left: 4px;
	top: 258px;
}
        #apDiv {	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 2;
	left: 250px;
	top: 297px;
}
        #apDiv7 {	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 2;
	left: 250px;
	top: 297px;
}
        #apDiv8 {
	position: absolute;
	width: 263px;
	height: 1px;
	z-index: 2;
	left: -624px;
	top: 694px;
	font-family: Verdana, Geneva, sans-serif;
}
        #apDiv9 {
	position: absolute;
	width: 54px;
	height: 61px;
	z-index: 2;
	left: 6px;
	top: 257px;
}
        #apDiv10 {	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 2;
	left: 250px;
	top: 297px;
}
        #apDiv11 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 3;
}
    #apDiv12 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
}
    #apDiv13 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
}
    #apDiv14 {
	position: absolute;
	width: 200px;
	height: 67px;
	z-index: 1;
	left: -637px;
	top: 426px;
	font-family: Verdana, Geneva, sans-serif;
}
    #apDiv15 {
	position: absolute;
	width: 200px;
	height: 70px;
	z-index: 1;
	left: 52px;
	top: 248px;
}
    #apDiv16 {
	position: absolute;
	width: 33px;
	height: 2px;
	z-index: 1;
	left: 19px;
	top: 253px;
}
    #apDiv17 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 59px;
	top: 252px;
}
    #apDiv18 {
	position: absolute;
	width: 55px;
	height: 2px;
	z-index: 1;
	left: 11px;
	top: 258px;
}
    #apDiv19 {
	position: absolute;
	width: 4px;
	height: 2px;
	z-index: 1;
	left: 29px;
	top: 258px;
}
    #apDiv20 {
	position: absolute;
	width: 200px;
	height: 60px;
	z-index: 1;
	left: 16px;
	top: -3px;
	font-family: Verdana, Geneva, sans-serif;
}
    #apDiv21 {
	position: absolute;
	width: 200px;
	height: 65px;
	z-index: 1;
	left: 53px;
	top: 257px;
}
    #apDiv22 {
	position: absolute;
	width: 2px;
	height: 54px;
	z-index: 1;
	left: 20px;
	top: 263px;
}
    #apDiv23 {
	position: absolute;
	width: 200px;
	height: 57px;
	z-index: 1;
	left: 56px;
	top: 255px;
}
    #apDiv24 {
	position: absolute;
	width: 47px;
	height: 3px;
	z-index: 1;
	left: 45px;
	top: 258px;
}
    body {
	background-image: url(66.jpg);
}
    #apDiv25 {
	position: absolute;
	width: 61px;
	height: 55px;
	z-index: 2;
	left: -13px;
	top: -2px;
}
    #apDiv26 {
	position: absolute;
	width: 107px;
	height: 71px;
	z-index: 1;
	left: 37px;
	top: 220px;
	font-size: 24px;
	color: #C90;
	font-family: Georgia, "Times New Roman", Times, serif;
}
    </style>
    </head>
    <body>
	<div class="container">
	  <div id="apDiv26">
	    <p>Los mas </p>
	    <p>Leidos</p>
	  </div>
	  <div id="ca-container" class="ca-container">
			  <div class="ca-wrapper">
				  <div class="ca-item ca-item-1">
					<div class="ca-item-main">
							<div class="ca-icon">
                            <a href="ficha_buscando_a_alaska.php" target="_parent">
                            <img src="img_slider1.jpg" width="154" height="216"></a>
                            </div>
							<div id="apDiv3">
							  <p><a href="ficha_buscando_a_alaska.php" target="_parent">BUSCANDO A ALASKA</a></p>
							  <div id="apDiv4"><a href="ficha_buscando_a_alaska.php" target="_parent"><img src="Imagen prueba/descarga.png" width="47" height="55"></a></div>
							  <p>&nbsp;</p>
							  <p><a href="ficha_buscando_a_alaska.php" target="_parent">JOHN GREEN</a></p>
			          </div>
					 
					</div>
				  </div>
				  <div class="ca-item ca-item-2">
					<div class="ca-item-main">
					  <div class="ca-icon">
                            <a href="ficha_cincuenta_sombras_grey.php" target="_parent">
                            <img src="img_slider2.jpg" width="166" height="218"></a>
                      </div>
							<div id="apDiv5">
							  <p><a href="ficha_cincuenta_sombras_grey.php" target="_parent">CINCUENTA SOMBRAS DE GREY</a></p>
							  <p>&nbsp;</p>
							  <p><a href="ficha_cincuenta_sombras_grey.php" target="_parent">E.L. JAMES</a></p>
							</div>
							<div id="apDiv6"><a href="ficha_cincuenta_sombras_grey.php" target="_parent"><img src="Imagen prueba/descarga.png" width="47" height="55" alt="Libro cincuenta sombras de grey de E.L James"></a></div>
							
					</div>
				  </div>
				  <div class="ca-item ca-item-3">
					<div class="ca-item-main">
					  <div class="ca-icon">
                            <a href="ficha_nino_pijama_rayas.php" target="_parent">
                            <img src="img_slider3.jpg" width="179" height="222"></a>
                      </div>
					  <div id="apDiv2">
					    <p><a href="ficha_nino_pijama_rayas.php" target="_parent">EL NIÑO CON EL PIJAMAS DE RAYAS</a></p>
					    <p>&nbsp;</p>
					    <p><a href="ficha_nino_pijama_rayas.php" target="_parent">JOHN BOYNE</a></p>
					  </div>
					  <div id="apDiv9"><a href="ficha_nino_pijama_rayas.php" target="_parent"><img src="Imagen prueba/descarga.png" width="47" height="55" alt="Libro el niño con el pijama de rayas de john boyne"></a></div>
							
					</div>
				  </div>
				  <div class="ca-item ca-item-4">
					<div class="ca-item-main">
							<div class="ca-icon">
                            <a href="ficha_don_quijote_mancha.php" target="_parent">
                            <img src="img_slider4.jpg" width="147" height="214"></a>
                            </div>
					  <div id="apDiv15">
							  <p><a href="ficha_don_quijote_mancha.php" target="_parent">DON QUIJOTE DE LA MACHA</a></p>
					    <p>&nbsp;</p>
					    <p><a href="ficha_don_quijote_mancha.php" target="_parent">MIGUEL DE CERVANTES SAAVEDRA</a></p>
					  </div>
							<div id="apDiv16"><a href="ficha_don_quijote_mancha.php" target="_parent"><img src="Imagen prueba/descarga.png" width="47" height="55" alt="Libro Don quijote de la mancha de Miguel de Cervantes Saavedra"></a></div>
							
					</div>
				  </div>
				  <div class="ca-item ca-item-5">
					<div class="ca-item-main">
							<div class="ca-icon">
                            <a href="ficha_crepusculo.php" target="_parent">
                            <img src="img_slider5.jpg" width="168" height="214"></a>
                            </div>
					  <div id="apDiv17">
							  <p><a href="ficha_crepusculo.php" target="_parent">CREPUSCULO ,UN AMOR PELIGROSO</a></p>
							  <p>&nbsp;</p>
							  <p><a href="ficha_crepusculo.php" target="_parent">STEPHENE MEYER</a></p>
							</div>
							<div id="apDiv18"><a href="ficha_crepusculo.php" target="_parent"><img src="Imagen prueba/descarga.png" width="47" height="55" alt="Libro Crespusculo, un amor peligroso de Stephene Meyer"></a></div>
					</div>
				  </div>
				  <div class="ca-item ca-item-6">
					<div class="ca-item-main">
					  
					  <div class="ca-icon">
                            <a href="ficha_cuidades_de_papel.php" target="_parent">
                            <img src="img_slider6.png" width="145" height="225"></a>
                      </div>
							<div id="apDiv19">
							  <div id="apDiv20">
							    <p><a href="ficha_cuidades_de_papel.php" target="_parent">CIUDADES DE PAPEL</a></p>
							    <p>&nbsp;</p>
							    <p><a href="ficha_cuidades_de_papel.php" target="_parent">JOHN GREEN</a></p>
							  </div>
                              <div id="apDiv25"><a href="ficha_cuidades_de_papel.php" target="_parent"><img src="Imagen prueba/descarga.png" width="47" height="55" alt="libro cuidades de papel de john green"></a></div>
							</div>
					</div>
			    </div>
				  <div class="ca-item ca-item-7">
					<div class="ca-item-main">
					  <div class="ca-icon">
                            <a href="ficha_harry_potter.php" target="_parent">
                            <img src="img_slider7.jpg" width="157" height="226"></a>
                            </div>
							<div id="apDiv21">
							  <p><a href="ficha_harry_potter.php" target="_parent">HARRY POTTER Y EL LEGADO MALDITO</a></p>
							  <p>&nbsp;</p>
							  <p><a href="ficha_harry_potter.php" target="_parent">J.K ROWLING</a></p>
							</div>
							<div id="apDiv22"><a href="ficha_harry_potter.php" target="_parent"><img src="Imagen prueba/descarga.png" width="47" height="55" alt="Libro harry potter y el legado maldito de J.K Rowling"></a></div>
							<h3>&nbsp;</h3>
					</div>
				  </div>
				  <div class="ca-item ca-item-8">
					<div class="ca-item-main">
					  <div class="ca-icon">
                            <a href="ficha_inevitable_desastre.php" target="_parent">
                            <img src="img_slider8.jpg" width="179" height="224"></a>
                            </div>
							<div id="apDiv23">
							  <p><a href="ficha_inevitable_desastre.php" target="_parent">INEVITABLE DESASTRE</a></p>
							  <p>&nbsp;</p>
							  <p><a href="ficha_inevitable_desastre.php" target="_parent">JAMIE McGUIRE</a></p>
							</div>
							<div id="apDiv24"><a href="ficha_inevitable_desastre.php" target="_parent"><img src="Imagen prueba/descarga.png" width="47" height="55" alt="Libro inevitable desastre de Jamie McGuire"></a></div>
							<h3>&nbsp;</h3>
					</div>
				  </div>
		</div>
	  </div>
	</div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<!-- the jScrollPane script -->
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
	<script type="text/javascript">
			$('#ca-container').contentcarousel();
		</script>
</body>
</html>