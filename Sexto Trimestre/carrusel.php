<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carrousel de contenido HTML</title>
<style>
#carrusel{float:left; width:601px; overflow:hidden; height:205px; position:relative; margin-top:20px;}
#carrusel .izquierda_flecha{position:absolute; left:10px; z-index:1; top:50%; margin-top:-9px;}
#carrusel .derecha_flecha{position:absolute; right:10px; z-index:1; top:50%; margin-top:-9px;}
.carrusel{width:4000px;left:0px; position:absolute; z-index:0}
.carrusel>div{
    float: left;
    height: 203px;
    margin-right: 5px;
    width: 195px;
	text-align:center;
}
.carrusel .img_carrusel{cursor:pointer;}

#content {
	float:left;
	width:600px;
	margin-bottom:40px;
	margin:0px auto;
}

.product {
	border:#CCCCCC 1px solid;
}
</style>
</head>

<body>
<div id="carrusel">
    <a href="#" class="izquierda_flecha" style="opacity: 1;"><img src="images/flecha_01.png" /></a>
	<a href="#" class="derecha_flecha" style="opacity: 1;"><img src="images/flecha_02.png" /></a>
    <div class="carrusel">
		<div class="product" id="product_0">
        	<img class="img_carrusel" src="../../../Users/SENA.DESKTOP-L0GLE2A/Documents/BIBLIO INC/miguel_cervantes3.jpg" width="195px" height="100px" />
            <p>Titulo 1</p>
            <p>165.00 €</p>
        </div>
		<div class="product" id="product_1">
         	<img class="img_carrusel" src="../../../Users/SENA.DESKTOP-L0GLE2A/Documents/BIBLIO INC/miguel_cervantes5.jpg" width="195px" height="100px" />
            <p>Titulo 2</p>
          	<p>100.00 €</p>
        </div>
		<div class="product" id="product_2">
			<img class="img_carrusel" src="gallery/03.jpg" width="195px" height="100px" />
            <p>Titulo 3</p>
            <p>250.00 €</p>
        </div>
		<div class="product" id="product_3">
			<img class="img_carrusel" src="../../../Users/SENA.DESKTOP-L0GLE2A/Documents/BIBLIO INC/miguel_cervantes2.jpg" width="195px" height="100px" />
            <p>Titulo 4</p>
            <p>75.00 €</p>
		</div>
		<div class="product" id="product_4">
			<img class="img_carrusel" src="gallery/02.jpg" width="195px" height="100px" />
            <p>Titulo 5</p>
            <p>65.00 €</p>
		</div>
        <div class="product" id="product_5">
			<img class="img_carrusel" src="gallery/03.jpg" width="195px" height="100px" />
			<p>Titulo 6</p>
            <p>40.00 €</p>
		</div>
	</div>
</div>
<script src="jquery-3.2.1.js" type="text/javascript"></script>
<script>
// jQuery.noConflict();
 var posicion = 0;
 var imagenes = new Array();
 $(document).ready(function() {
   //alert(jQuery('.texto').html());
   var numeroImatges = 6;
   if(numeroImatges<=3){
   	$('.derecha_flecha').css('display','none');
	$('.izquierda_flecha').css('display','none');
   }
	 
	 $('.izquierda_flecha').live('click',function(){
	 	if(posicion>0){
			posicion = posicion-1;
		}else{
			posicion = numeroImatges-3;
		}
		$(".carrusel").animate({"left": -($('#product_'+posicion).position().left)}, 600);
		return false;
	 });
	 
	 $('.izquierda_flecha').hover(function(){
	 	$(this).css('opacity','0.5');
	 },function(){
	 	$(this).css('opacity','1');
	 });
	 
	 $('.derecha_flecha').hover(function(){
	 	$(this).css('opacity','0.5');
	 },function(){
	 	$(this).css('opacity','1');
	 });
	 
	 $('.derecha_flecha').live('click',function(){
		if(numeroImatges>posicion+3){
			posicion = posicion+1;
		}else{
			posicion = 0;
		}
		$(".carrusel").animate({"left": -($('#product_'+posicion).position().left)}, 600);
		return false;
	 });
	 
 });
</script>
</body>
</html>