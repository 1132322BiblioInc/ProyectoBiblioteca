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
        body {
	background-image: url(66.jpg);
}
        #apDiv6 {
	position: absolute;
	width: 200px;
	height: 81px;
	z-index: 2;
	left: 37px;
	top: 225px;
	color: #C90;
	font-size: 24px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
        #apDiv1 {
	position: absolute;
	width: 206px;
	height: 1px;
	z-index: 1;
	left: 69px;
	top: 159px;
	font-family: Verdana, Geneva, sans-serif;
}
        #apDiv4 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 3;
	left: 61px;
	top: 260px;
	font-family: Verdana, Geneva, sans-serif;
}
        #apDiv7 {
	position: absolute;
	width: 43px;
	height: 41px;
	z-index: 3;
	left: 41px;
	top: 264px;
}
        #apDiv9 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 3;
	font-family: Verdana, Geneva, sans-serif;
	left: 60px;
	top: 258px;
}
        #apDiv10 {
	position: absolute;
	width: 55px;
	height: 0px;
	z-index: 3;
	left: 29px;
	top: 262px;
}
        #apDiv16 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 3;
	left: 75px;
	top: 261px;
}
        #apDiv18 {
	position: absolute;
	width: 52px;
	height: 44px;
	z-index: 3;
	left: 40px;
	top: 263px;
}
        #apDiv22 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 3;
	left: 59px;
	top: 264px;
}
        #apDiv24 {
	position: absolute;
	width: 55px;
	height: 48px;
	z-index: 3;
	left: 8px;
	top: 266px;
}
        #apDiv25 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 3;
	left: 48px;
	top: 266px;
	font-family: Verdana, Geneva, sans-serif;
}
        #apDiv26 {
	position: absolute;
	width: 64px;
	height: 3px;
	z-index: 3;
	left: 4px;
	top: 269px;
}
        </style>
    </head>
    <body>
		<div class="container">
		  <div id="apDiv6">Miguel de Cervantes</div>
		  <div id="ca-container" class="ca-container">
			  <div class="ca-wrapper">
				  <div class="ca-item ca-item-1">
					<div class="ca-item-main">
							<div class="ca-icon">
                            <a href="ficha_la galatea.php" target="_parent">
                            <img src="miguel_cervantes1.jpg" width="149" height="221"></a>
                            </div>
							<div id="apDiv4">
							  <p><a href="ficha_la galatea.php" target="_parent">LA GALATEA</a></p>
							  <p>&nbsp;</p>
							  <p><a href="ficha_la galatea.php" target="_parent">MIGUEL DE CERVANTES SAAVEDRA</a></p>
							</div>
							<div id="apDiv7"><a href="ficha_la galatea.php" target="_parent"><img src="Imagen prueba/descarga.png" width="47" height="55" alt="Libro la galatea de miguel de cervantes saavedra"></a></div>
							
					</div>
				  </div>
				  <div class="ca-item ca-item-2">
					<div class="ca-item-main">
							<div class="ca-icon">
                            <a href="ficha__espanola_inglesa.php" target="_parent">
                            <img src="miguel_cervantes2.jpg" width="145" height="224"></a>
                            </div>
							<div id="apDiv9">
							  <p><a href="ficha__espanola_inglesa.php" target="_parent">LA ESPAÑOLA INGLESA</a></p>
							  <p>&nbsp;</p>
							  <p><a href="ficha__espanola_inglesa.php" target="_parent">MIGUEL DE CERVANTES	SAAVEDRA</a></p>
							</div>
							<div id="apDiv10"><a href="ficha__espanola_inglesa.php" target="_parent"><img src="Imagen prueba/descarga.png" width="47" height="55" alt="Libro la española inglesa de miguel de cervantes saavedra"></a></div>
							
					</div>
				  </div>
				  <div class="ca-item ca-item-3">
					<div class="ca-item-main">
							<div class="ca-icon">
                            <a href="ficha_rinconete_cortadillo.php" target="_parent">
                            <img src="miguel_cervantes3.jpg" width="137" height="223"></a>
                            </div>
							<div id="apDiv16">
							  <p><a href="ficha_rinconete_cortadillo.php" target="_parent">RINCONETE Y CORTADILLO</a></p>
							  <p>&nbsp;</p>
							  <p><a href="ficha_rinconete_cortadillo.php" target="_parent">MIGUEL DE CERVANTES SAAVEDRA</a></p>
							</div>
							<div id="apDiv18"><a href="ficha_rinconete_cortadillo.php" target="_parent"><img src="Imagen prueba/descarga.png" width="47" height="55" alt="Libro Rinconete y cortadillo de miguel de cervantes saavedra"></a></div>
							<h3>&nbsp;</h3>
					</div>
				  </div>
				  <div class="ca-item ca-item-4">
					<div class="ca-item-main">
							<div class="ca-icon">
                            <a href="ficha_la_gran_sultana.php" target="_parent">
                            <img src="miguel_cervantes4.jpg" width="156" height="233"></a>
                            </div>
							<div id="apDiv22">
							  <p><a href="ficha_la_gran_sultana.php" target="_parent">LA GRAN SULTANA</a></p>
							  <p>&nbsp;</p>
							  <p><a href="ficha_la_gran_sultana.php" target="_parent">MIGUEL DE CERVANTES SAAVEDRA</a></p>
							</div>
							<div id="apDiv24"><a href="ficha_la_gran_sultana.php" target="_parent"><img src="Imagen prueba/descarga.png" width="47" height="55" alt="Libro La gran sultana de miguel de cervantes saavedra"></div>
							
					</div>
				  </div>
				  <div class="ca-item ca-item-5">
					<div class="ca-item-main">
							<div class="ca-icon">
                            <a href="ficha_sancho_panza.php" target="_parent">
                            <img src="miguel_cervantes5.jpg" width="154" height="237"></a>
                            </div>
							<div id="apDiv25">
							  <p><a href="ficha_sancho_panza.php" target="_parent">REFRANES DE SANCHO PANZA</a></p>
							  <p>&nbsp;</p>
							  <p><a href="ficha_sancho_panza.php" target="_parent">MIGUEL DE CERVANTES SAAVEDRA</a></p>
							</div>
							<div id="apDiv26"><a href="ficha_sancho_panza.php" target="_parent"><img src="Imagen prueba/descarga.png" width="47" height="55" alt="Libro Refranes de Sancho panza de miguel de cervantes saavedra"></div>
							
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