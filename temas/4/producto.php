<script>
    function openModal() {
        document.getElementById('myModal').style.display = "block";
        document.getElementById('myModal2').style.display = "block";
    }

    function closeModal() {
        document.getElementById('myModal').style.display = "none";
        document.getElementById('myModal2').style.display = "none";
        document.getElementById('myModal3').style.display = "none";
    }
    function submitFormProduct(data)
    {
          jQuery(data).parents('form:first').attr('action', '<?=$draizp?>/acc/anadir/<?=$producto['id']?>/'+jQuery('#cantidadmuliselect').val());
          return jQuery(data).parents('form:first').submit();
    }

    function changePricePerUnit(data)
    {
        var units = jQuery(data).val();
        var price = jQuery("#totalspan").data("precio");
        var totalPrice = (Math.round( (units * price) * 100 )/100 ).toString();
        jQuery("#totalspan").empty();
        
        return jQuery("#totalspan").text(totalPrice.replace(".",","));
        
    }
</script>

<style>
    /* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 10000000000;
  padding-top: 35px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
  opacity: 0.5;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1020px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: -2px;
  right: 5px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

</style>
<div id="myModal" class="modal" onclick="javascript:closeModal();"></div>
<div id="myModal2" class="modal" onclick="javascript:closeModal();" style="opacity: 1; width: auto; height: auto; max-height: 80%; max-width: 85%; position: absolute; left: 50%; top: 50%; position: fixed; transform: translate(-50%, -50%); -webkit-transform: translate(-50%, -50%); background-color: #C0C0C0">
    <span class="close cursor" onclick="javascript:closeModal();">&times;</span>
    <div class="mySlides">
        <img id="imagen_modal" src="http://babytravel.es/imagenesproductos/5853d55d9b703_37-home_default.jpg" style="height:90% !important; width: auto; max-width: 100%;">
    </div>
</div>
<div id="myModal3" class="modal" onclick="javascript:closeModal();" style="opacity: 1; width: auto; height: auto; position: absolute; left: 50%; top: 50%; position: fixed; transform: translate(-50%, -50%); -webkit-transform: translate(-50%, -50%); background-color: #C0C0C0">
    <span class="close cursor" onclick="javascript:closeModal();">&times;</span>
    <div class="mySlides" style="width: 200px; background-color: white; padding: 25px; font-size: 18px;" id="text_info">
    </div>
</div>

<?php
    for($i=0; $i<=count($labelidioma); $i++){
        if($labelidioma[$i][0] == 'descripcion'){
            $auxdes = $nombreidioma[$i][0];
        }
        if($labelidioma[$i][0] == 'talla'){
            $auxtal = $nombreidioma[$i][0];
        }
        if($labelidioma[$i][0] == 'cantidad'){
            $auxcan = $nombreidioma[$i][0];
        }
        if($labelidioma[$i][0] == 'disponibilidad'){
            $auxdis = $nombreidioma[$i][0];
        }
        if($labelidioma[$i][0] == 'disponible'){
            $auxok = $nombreidioma[$i][0];
        }
        if($labelidioma[$i][0] == 'anadir'){
            $auxana = $nombreidioma[$i][0];
        }
        if($labelidioma[$i][0] == 'rel_productos'){
            $auxrel = $nombreidioma[$i][0];
        }
        if($labelidioma[$i][0] == 'ver_mas'){
            $auxver = $nombreidioma[$i][0];
        }
    }
    $totalAtr = 0;
?>


<div id="contenido">

<div id="contenido">
	<div style="background: #E6E7E9; border: solid 2px #EEE; display: <?=@$_GET['nombre'] == 'yes' ? 'block' : 'none'?>; left: 20%; padding: 3% 5%; position: absolute; top: 5%; width: 50%; z-index: 99999;">
		<h2>Ha añadido el producto a la cesta</h2>
		<p>El producto "<strong><?=@$producto['nombre']?></strong>" ha sido añadido correctamente a la cesta. Ahora puede verlo en su cesta.</p>
		<a href="<?=$draizp?>/<?=$_SESSION['lenguaje']?>cesta" class="button">ver mi cesta</a>
		<a href="javascript:void(null);" onclick="javascript:jQuery(this).parent().css('display', 'none');" class="button buttonGray" style="min-width: 10px !important;">Seguir comprando</a>
	</div>
    
    <div style="background: #E6E7E9; border: solid 2px #EEE; display: <?=@$_GET['nombre'] == 'yesp' ? 'block' : 'none'?>; left: 20%; padding: 3% 5%; position: absolute; top: 5%; width: 50%; z-index: 99999;">
		<h2>Ha añadido el producto a presupuesto</h2>
		<p>El producto "<strong><?=@$producto['nombre']?></strong>" ha sido añadido correctamente al presupuesto. Ahora puede verlo en sus presupuestos.</p>
		<a href="<?=$draizp?>/<?=$_SESSION['lenguaje']?>presupuesto" class="button">ver mi presupuesto</a>
		<a href="#" onclick="jQuery(this).parent().css('display', 'none');" class="button buttonGray" style="min-width: 10px !important;">Seguir comprando</a>
	</div>
    
    <div style="background: #E6E7E9; border: solid 2px #EEE; display: <?=@$_GET['nombre'] == 'no' ? 'block' : 'none'?>; left: 20%; padding: 3% 5%; position: absolute; top: 5%; width: 50%; z-index: 99999;">
		<h2>No se ha podido añadir el producto a la cesta</h2>
		<p>El producto "<strong><?=@$producto['nombre']?></strong>" no ha sido añadido a la cesta por diferencias en la forma de pago con los productos de su cesta. Tramite la cesta, y luego añada este producto.</p>
		<a href="<?=$draizp?>/<?=$_SESSION['lenguaje']?>cesta" class="button">ver mi cesta</a>
		<a href="#" onclick="jQuery(this).parent().css('display', 'none');" class="button buttonGray" style="min-width: 10px !important;">Seguir comprando</a>
	</div>
    
     <div style="background: #E6E7E9; border: solid 2px #EEE; display: <?=@$_GET['nombre'] == 'not' ? 'block' : 'none'?>; left: 20%; padding: 3% 5%; position: absolute; top: 5%; width: 50%; z-index: 99999;">
		<h2>No se ha podido añadir el producto a la cesta</h2>
                <p>El producto "<strong><?=@$producto['nombre']?></strong>" no ha sido añadido a la cesta. Falta seleccionar: <b>"<?=@$_GET['pagina']?>"</b> </p>
		<a href="<?=$draizp?>/<?=$_SESSION['lenguaje']?>cesta" class="button">ver mi cesta</a>
		<a href="#" onclick="jQuery(this).parent().css('display', 'none');" class="button buttonGray" style="min-width: 10px !important;">Seguir comprando</a>
	</div>
    
     <div style="background: #E6E7E9; border: solid 2px #EEE; display: <?=@$_GET['nombre'] == 'notp' ? 'block' : 'none'?>; left: 20%; padding: 3% 5%; position: absolute; top: 5%; width: 50%; z-index: 99999;">
		<h2>No se ha podido añadir el producto a la cesta</h2>
                <p>El producto "<strong><?=@$producto['nombre']?></strong>" no ha sido añadido a la cesta. Actualmente no está disponible.</p>
		<a href="<?=$draizp?>/<?=$_SESSION['lenguaje']?>cesta" class="button">ver mi cesta</a>
		<a href="#" onclick="jQuery(this).parent().css('display', 'none');" class="button buttonGray" style="min-width: 10px !important;">Seguir comprando</a>
	</div>

     <?php if(isset($coment_anadido) && $coment_anadido){ ?>
    <div style="background: #E6E7E9; border: solid 2px #EEE; display: <?=$coment_anadido ? 'block' : 'none'?>; left: 20%; padding: 3% 5%; position: absolute; top: 5%; width: 50%; z-index: 99999;">
		<h2>Comentario añadido correctamente!</h2>
		<p>El comentario ha sido enviado correctamente y está en espera de ser aprobado por el administrador. En breve estará visible.</p>
		<a href="#" onclick="jQuery(this).parent().css('display', 'none');" class="button buttonGray" style="min-width: 10px !important;">X</a>
	</div>
    <?php }else if(isset($coment_anadido) && !$coment_anadido){ ?>
    
    <div style="background: #E6E7E9; border: solid 2px #EEE; display: <?=!$coment_anadido ? 'block' : 'none'?>; left: 20%; padding: 3% 5%; position: absolute; top: 5%; width: 50%; z-index: 99999;">
		<h2>El comentario no se ha podido enviar!</h2>
		<p>Revise que todos los campos estén rellenos y vuelva a intentarlo.</p>
                <p>Si el problema persiste, póngase en contacto con nosotros.</p>
		<a href="#" onclick="jQuery(this).parent().css('display', 'none');" class="button buttonGray" style="min-width: 10px !important;">X</a>
	</div>
    
    <?php } ?>
    
        <div itemscope itemtype="http://schema.org/Product" id="producto">

<?php
			if ($producto == null)
			{
				echo '<p>El producto indicado no existe!</p>';
			}
			else
			{
				$_SESSION['producto'] = $producto;
                
                
            ?>
                    
                    <style>
                        #grupo-contenido #contenido #productos .producto .descripcion, #grupo-contenido #contenido #novedades div.muestra div.producto .descripcion, #grupo-contenido #contenido #masvendidos div.muestra div.producto .descripcion {
                         line-height: 1.75rem !important;   
                        }
                        #grupo-contenido #contenido #producto .producto-r .info span{
                            width: 100% !important;
                            border: none !important;
                            max-width: 100% !important;
                        }
                        
                        #grupo-contenido #contenido #producto .producto-r .talla
                        {
                            display: block;
                            margin: 25px auto;
                            max-width: 350px;
                            width: 40%;
                        }
                        
                        #grupo-contenido #contenido #producto .producto-r span.button {
                            margin: 25px auto;
                        }
                        
                        .sale-label{
                            background-color: #ff6600;
                            border-radius: 4px;
                            color: #fff !important;
                            float: right;
                            font-size: 14px !important;
                            font-weight: normal;
                            padding: 2px 4px;
                            text-transform: uppercase;
                            z-index: 10;
                        }
                        
                        table:not(#tcesta):not(#tpedido):not(#comprabar) tr td {
                            padding: 0px 0px;
                        }
                    </style>
                    
                   
                    <script type="text/javascript" src="/scripts/jquery.lightbox-0.5-mod.js"></script>
                    <link rel="stylesheet" type="text/css" href="/css/jquery.lightbox-0.5.css" media="screen" />
                    <script type="text/javascript">
                            jQuery(function() {
                                jQuery('#foto a').lightBox();
                            });    	   	
                    </script>


                    <div class="producto-r">
					<div class="foto">
                                            <?php if($producto['descuento'] > 0){ ?>
                                            <span class="sale-label" style="position: absolute;">¡Oferta!</span>
                                            <?php } ?>
						<script language="javascript" type="text/javascript">
						  function resizeIframe(obj) {
							obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
						  }
						</script>
						<?php /*include_once('./componentes/sliderPres.php');*/ ?>
                                                <div id="frame_cargaD">
						<div id="frame_carga" frameborder="0" style="display: block; width: 100%; margin: auto;" onload="javascript:resizeIframe(this);">
                                                    <?php include_once('./componentes/slippry-1.3.1/demo/index.php'); ?>
                                                </div>
                                                </div>
                                                <div id="frame_cargaImg" style="display: none">
                                                    <img id='imagenAtrb' src='' style="max-width: 100%;max-height: 100%;">
                                                </div>
					</div>
                    <form name="formulario_cesta" id="formulario_cesta" method="post" style="max-height: 100% !important;">
                        <style>
                        #modal {
                            width:100%; /*Toma el 100% del ancho de la página*/
                            height:100%; /*Toma el 100% del alto de la página*/
                            position:fixed; /*Con este código hacemos que el contenedor se mantenga en la pantalla y para que tome las dimensiones del body y no de la entrada*/
                            background-color: rgba(1, 1, 1, 0.9); /*Color de fondo, incluye opacidad del 90%*/
                            vertical-align: middle;
                            top:0; /*Position superior*/
                            left:0; /*Posición lateral*/
                            z-index:99999999; /*Evitamos que algún elemento del blog sobreponga la ventana modal*/
                        }
                        #contenido-interno { 
                            margin:2% auto; /*Separación arriba y centrado*/
                            vertical-align: middle;
                            font-size:12px; /*Tamaño de la fuente*/
                            height:auto; /*Ancho del contenedor*/
                            width:auto;
                            text-align:center; /*Alineación del texto*/
                            color:#222; /*Color del texto*/
                            background:rgba(255, 255, 255, 0); /*Color de fondo*/
                        }
                        #myImg{
                            width: auto;
                            height: 635px;
                            border-radius: 25px;
                            -webkit-border-radius: 25px;
                            -moz-border-radius: 25px;
                        }
                        
                        .sale-label {
                            background-color: #5cb85c;
                            border-radius: 4px;
                            color: #fff !important;
                            float: right;
                            font-size: 18px;
                            padding: 2px 4px;
                            text-transform: uppercase;
                            z-index: 10;
                        }
                        
                        .button{
                            font-weight: bold !important;
                            padding-left: 20px !important;
                            padding-right: 20px !important;
                            background-color: <?=$colores2['AnaCestaB']?> !important;
                            border-color: <?=$colores2['AnaCestaB']?> !important;
                            color: <?=$colores2['AnaCestaT']?> !important;
                        }
                        
                        .button:hover{
                            background-color: <?=$colores2['AnaCestaBH']?> !important;
                            border-color: <?=$colores2['AnaCestaBH']?> !important;
                            color: <?=$colores2['AnaCestaTH']?> !important;
                        }
                        
                        @media (max-width: 465px){}
                            table:not(#tcesta):not(#tpedido) tr td:first-child {
                            display: table-cell !important;
                        }
                        
                        .sale-label{
                            background-color: <?=$colores['oferta_fondo']?>;
                            border-radius: 4px;
                            color: <?=$colores['oferta_letra']?>; !important;
                            float: right;
                            font-size: 12px !important;
                            font-weight: bold;
                            padding: 2px 4px;
                            text-transform: uppercase;
                            z-index: 10;
                            position: relative !important;
                            margin-left: 2px;
                        }
                        
                        .venta-label{
                            background-color: <?=$colores['venta_fondo']?>;
                            border-radius: 4px;
                            color: <?=$colores['oferta_letra']?>; !important;
                            float: right;
                            font-size: 12px !important;
                            font-weight: bold;
                            padding: 2px 4px;
                            text-transform: uppercase;
                            z-index: 10;
                            position: relative !important;
                            margin-left: 2px;
                        }
                        
                        .alquiler-label{
                            background-color: <?=$colores['alquiler_fondo']?>;
                            border-radius: 4px;
                            color: <?=$colores['oferta_letra']?>; !important;
                            float: right;
                            font-size: 12px !important;
                            font-weight: bold;
                            padding: 2px 4px;
                            text-transform: uppercase;
                            z-index: 10;
                            position: relative !important;
                            margin-left: 2px;
                        }
                        
                        .agotado-label{
                            background-color: <?=$colores['agotado_fondo']?>;
                            border-radius: 4px;
                            color: <?=$colores['oferta_letra']?>; !important;
                            float: right;
                            font-size: 12px !important;
                            font-weight: bold;
                            padding: 2px 4px;
                            text-transform: uppercase;
                            z-index: 10;
                            position: relative !important;
                            margin-left: 2px;
                        }
                        
                        .btanadir{
                            border: 1px solid #290000; 
                            border-radius: 6px; 
                            color: #ffffff; 
                             
                            font-size: 0.75rem; 
                            font-weight: bold; 
                            height: 1.5rem  !important; 
                            line-height: 0.75rem  !important; 
                            margin: 8px 0 0; 
                            max-width: 40%; 
                            padding: 4px 15px; 
                            transition: border 1s ease 0s, background 1s ease 0s, color 1s ease 0s; 
                            width: auto;
                            background: #000000;
                            cursor: pointer;
                        }
                        
                        .btanadir:hover{
                            border: 1px solid #290000; 
                            border-radius: 6px; 
                            color: #000000; 
                            
                            font-size: 0.75rem; 
                            font-weight: bold; 
                            height: 1.5rem  !important; 
                            line-height: 0.75rem  !important; 
                            margin: 8px 0 0; 
                            max-width: 40%; 
                            padding: 4px 15px; 
                            transition: border 1s ease 0s, background 1s ease 0s, color 1s ease 0s; 
                            width: auto;
                            background: #ffffff;
                            cursor: pointer;
                        }

                    </style>
                        
                    
                        <?php //if($_SESSION['usr'] != null || ($_SESSION['usr'] == null && $Empresa['registro'] == 1))
                        if($_SESSION['usr'] != null || ($_SESSION['usr'] == null)){ ?>
                        <div style="width:100%; font-family: '<?=$fuente2?>',Arial,Helvetica,sans-serif !important; font-size: 16px !important;  color: #333;">
                            
                            <?=$Empresa['etiqpro'] == 1 ? ($producto['mostraretq'] == 1 ? (($producto['tipo'] == 0 ? '<span class="venta-label">Venta</span><br>' : ($producto['tipo'] == 3 ? '<span class="alquiler-label">Alquiler</span>' : ''))) :'') : '' ?>	
                            <?=$producto['mostraretqAgo'] == 1 ? '<span class="agotado-label">¡Agotado!</span>' : ''?>
                            <?=$producto['mostraretqOfe'] == 1 ? '<span class="sale-label">¡Oferta!</span>' : ''?>
                            <?=$Empresa['etiqpro'] == 1 ? '<br><br>' : ''?>
                            <h1 itemprop="name" style="font-weight: normal;"><?=$producto['nombre']?></h1><br>
                            
                            <b>Referencia:</b> <?=$producto['referencia']?><br><br>
                            
                            <?php
                        $texto_size = 30;
                        $text = $producto['descripcion'];
                       
                        /*$textlen = strlen($text);
                        $pos = 0;
                        $espacios = 0;
                        while ($espacios < $texto_size && $pos < $textlen)
                        {
                            if ($text[$pos] == ' ')
                                $espacios++;
                            if ($espacios < $texto_size && $pos < $textlen)
                                $pos++;
                        }
                        $pos--;
                        $sppos = strpos($text, ' ', $pos);
                        if ($sppos < 1) $sppos = $textlen - 1;
                        if (strlen($text) > $sppos)
                        {
                            $descripcion = str_replace("\r\n", '<br>', substr($text, 0, $sppos));
                            if (strlen($text) > $sppos)
                                $descripcion .= '...';
                        }*/
                        $descripcion = substr(html_entity_decode($text), 0, 300);
                        if(strlen($producto['descripcion']) > 300)
                            $descripcion .= "...";
                        ?>
                            <?=$descripcion?><br><br>
                            
                            <?php if($producto['plazoEnt'] != ''){ ?><b>Plazo de Entrega:</b> <?=$producto['plazoEnt']?><br><br><?php } ?>
                        
                        <div style="display:table; width:100%; border-top: 1px solid rgba(150, 150, 150, 0.3);"><br>
                                <?php
                                    $aux = null;
                                    $c = 0;
                                    $i = 0;
                                    if(count($atributos) == 0){  ?>
                                        <div><div><div>
                                    <?php
                                     }
                                     
                                    foreach ($atributos AS $atributo){ 
                                        $i++;
                                        $nombreJS = str_replace(" ", "_", ereg_replace("[^A-Za-z0-9]", "", $atributo['nombre']));
                                        if($atributo['nombre'] != $aux && $c == 0){ ?>
                                            <script>
                                                jQuery(document).on("change", "#<?=$nombreJS?>", function(){  
                                                    jQuery.post("/ajax/precio.php", {id: <?=$producto['id']?>, valor: jQuery( "#<?=$nombreJS?>" ).val(), moneda1: '<?=$Empresa['moneda']?>', moneda2: '<?=$_SESSION['divisa']?>' }, function(respuesta){ 
                                                        var temp = respuesta;
                                                        temp = temp.split("-");
                                                        if(temp['0'] == 't'){
                                                            var tot = jQuery('#totalspan').attr('data-precio');
                                                            var tot2 = jQuery('#totalspan').attr('data-preciobase');
                                                            var dif = parseFloat(tot) - (parseFloat(tot2) + parseFloat(jQuery("#<?=$nombreJS?>").attr('data-precio')));
                                                            var precioAnt = parseFloat(tot) - parseFloat(jQuery("#<?=$nombreJS?>").attr('data-precio'));
                                                            precioAnt = temp['1'] - precioAnt;
                                                            if(dif > 0){
                                                                tot = parseFloat(temp['1'])+parseFloat(dif);
                                                            }else{
                                                                tot = temp['1'];
                                                            }
                                                            jQuery("#<?=$nombreJS?>").attr('data-precio', precioAnt);
                                                            jQuery('#totalspan').attr('data-precio', tot);
                                                            tot = parseFloat(tot);
                                                            tot = tot.toFixed(2);
                                                            tot = tot.replace(",","/");
                                                            tot = tot.replace(".",",");
                                                            tot = tot.replace("/",".");
                                                            jQuery('#totalspan').html(tot);
                                                        }else if (temp[0] == 'e'){
                                                            var tot = jQuery('#totalspan').attr('data-precio');
                                                            tot = parseFloat(tot) - parseFloat(jQuery("#<?=$nombreJS?>").attr('data-precio'));
                                                            if(jQuery( "#<?=$nombreJS?>" ).val() != '')
                                                                tot = tot + parseFloat(temp['1']);
                                                            jQuery("#<?=$nombreJS?>").attr('data-precio', temp['1']);
                                                            jQuery('#totalspan').attr('data-precio', tot);
                                                            tot = tot.toFixed(2);
                                                            tot = tot.replace(",","/");
                                                            tot = tot.replace(".",",");
                                                            tot = tot.replace("/",".");
                                                            jQuery('#totalspan').html(tot);
                                                        }else if (temp[0] == 'i'){
                                                            var tot = jQuery('#totalspan').attr('data-precio');
                                                            tot = parseFloat(tot) - parseFloat(jQuery("#<?=$nombreJS?>").attr('data-precio'));
                                                            if(tot <= 0){
                                                                tot = tot + parseFloat(temp['1']);
                                                            }
                                                            jQuery("#<?=$nombreJS?>").attr('data-precio', temp['1']);
                                                            jQuery('#totalspan').attr('data-precio', tot);
                                                            tot = tot.toFixed(2);
                                                            tot = tot.replace(",","/");
                                                            tot = tot.replace(".",",");
                                                            tot = tot.replace("/",".");
                                                            jQuery('#totalspan').html(tot);
                                                        }
                                                    });
                                                    jQuery.post("/ajax/foto.php", {id: <?=$producto['id']?>, valor: jQuery( "#<?=$nombreJS?>" ).val()}, function(respuesta){ 
                                                        if(respuesta != ''){
                                                            var dirImg = '/imagenesproductosAtr/'+respuesta;
                                                            jQuery('#frame_cargaD').attr('style', 'display:none');
                                                            jQuery('#imagenAtrb').attr('src', dirImg);
                                                            jQuery('#frame_cargaImg').attr('style', 'display:block');
                                                        }else{
                                                            jQuery('#frame_cargaImg').attr('style', 'display:none');
                                                            jQuery('#frame_cargaD').attr('style', 'display:block');
                                                        }
                                                    });
                                                });
                                                jQuery(document).ready(function(){
                                                    jQuery("#icono_info<?=$i?>").click(function(){
                                                        var texto = jQuery(this).attr('data-desc');
                                                        jQuery("#text_info").html(texto);
                                                        document.getElementById('myModal').style.display = "block";
                                                        document.getElementById('myModal3').style.display = "block";
                                                    });
                                                });
                                
                                        </script>
                                            <?php if($atributo['obligatorio'] == 'Si' && $atributo['nombre'] == 'Fianza'){
                                                $totalAtr += $atributo['precio'];
                                                $nombreAtr .= "(".$atributo['nombre'].") ";
                                            }
                                            ?>
                                            <div style="display:<?=$atributo['oculto'] == 'No' ? 'table-row' : 'none'?>;">
                                            <div style="display:table-cell;vertical-align:middle;width:66%;">
                                                <label style="color: #333; font-size: 1.20rem; margin-right: 15px; margin-top: 7px;" ><?=$atributo['nombre']?>: <?=$atributo['descripcion'] != '' ? '<i id="icono_info'.$i.'" class="fa fa-info-circle" style="cursor: pointer;" data-desc="'.$atributo['descripcion'].'"></i>' : '' ?></label>
                                            </div>
                                            <div style="display:table-cell;height:50px;vertical-align:middle;">
                                                <div style="margin:0 !important;width:100% !important;" class="talla">
                                                    <select id="<?=$nombreJS?>" style="width:100%;" name="<?=$nombreJS?>" <?=@$atributo['obligatorio'] == 'Si' ? '' : ''?> data-precio="<?=$atributo['precio']?>">
                                                        <?=@$atributo['obligatorio'] == 'Si' ? '' : ($atributo['mensaje'] != '' ? '<option value="" selected>'.$atributo['mensaje'].'</option>':'<option value="" selected>Ninguno/a</option>')?>
                                                        <option value="<?=$atributo['atributo']?>"><?=$atributo['atributo']?></option>
                                <?php
                                            $aux = $atributo['nombre'];
                                            $c = 1;
                                        }else if($atributo['nombre'] != $aux && $c == 1){
                                            if($atributo['obligatorio'] == 'Si' && $atributo['nombre'] == 'Fianza'){
                                                $totalAtr += $atributo['precio'];
                                                $nombreAtr .= "(".$atributo['nombre'].") ";
                                            }
                                ?>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div style="display:<?=$atributo['oculto'] == 'No' ? 'table-row' : 'none'?>;">
                                            <div style="display:table-cell;vertical-align:middle;width:66%;">
                                                <label style="color: #333; font-size: 1.20rem; margin-right: 15px; margin-top: 7px;" ><?=$atributo['nombre']?>: <?=$atributo['descripcion'] != '' ? '<i id="icono_info'.$i.'" class="fa fa-info-circle" style="cursor: pointer;" data-desc="'.$atributo['descripcion'].'"></i>' : '' ?></label>
                                            </div>
                                            <div style="display:table-cell;height:50px;vertical-align:middle;">
                                            <script>
                                                jQuery(document).on("change", "#<?=$nombreJS?>", function(){
                                                    jQuery.post("/ajax/precio.php", {id: <?=$producto['id']?>, valor: jQuery( "#<?=$nombreJS?>" ).val(), moneda1: '<?=$Empresa['moneda']?>', moneda2: '<?=$_SESSION['divisa']?>' }, function(respuesta){ 
                                                        var temp = respuesta;
                                                        temp = temp.split("-");
                                                        if(temp['0'] == 't'){
                                                            var tot = jQuery('#totalspan').attr('data-precio');
                                                            var tot2 = jQuery('#totalspan').attr('data-preciobase');
                                                            var dif = parseFloat(tot) - (parseFloat(tot2) + parseFloat(jQuery("#<?=$nombreJS?>").attr('data-precio')));
                                                            var precioAnt = parseFloat(tot) - parseFloat(jQuery("#<?=$nombreJS?>").attr('data-precio'));
                                                            precioAnt = temp['1'] - precioAnt;
                                                            if(dif > 0){
                                                                tot = parseFloat(temp['1'])+parseFloat(dif);
                                                            }else{
                                                                tot = temp['1'];
                                                            }
                                                            jQuery("#<?=$nombreJS?>").attr('data-precio', precioAnt);
                                                            jQuery('#totalspan').attr('data-precio', tot);
                                                            tot = parseFloat(tot);
                                                            tot = tot.toFixed(2);
                                                            tot = tot.replace(",","/");
                                                            tot = tot.replace(".",",");
                                                            tot = tot.replace("/",".");
                                                            jQuery('#totalspan').html(tot);
                                                        }else if (temp[0] == 'e'){
                                                            var tot = jQuery('#totalspan').attr('data-precio');
                                                            tot = parseFloat(tot) - parseFloat(jQuery("#<?=$nombreJS?>").attr('data-precio'));
                                                            if(jQuery( "#<?=$nombreJS?>" ).val() != '')
                                                                tot = tot + parseFloat(temp['1']);
                                                            jQuery("#<?=$nombreJS?>").attr('data-precio', temp['1']);
                                                            jQuery('#totalspan').attr('data-precio', tot);
                                                            tot = tot.toFixed(2);
                                                            tot = tot.replace(",","/");
                                                            tot = tot.replace(".",",");
                                                            tot = tot.replace("/",".");
                                                            jQuery('#totalspan').html(tot);
                                                        }else if (temp[0] == 'i'){
                                                            var tot = jQuery('#totalspan').attr('data-precio');
                                                            tot = parseFloat(tot) - parseFloat(jQuery("#<?=$nombreJS?>").attr('data-precio'));
                                                            if(tot <= 0){
                                                                tot = (tot + parseFloat(temp['1']));
                                                            }
                                                            jQuery("#<?=$nombreJS?>").attr('data-precio', temp['1']);
                                                            jQuery('#totalspan').attr('data-precio', tot);
                                                            tot = tot.toFixed(2);
                                                            tot = tot.replace(",","/");
                                                            tot = tot.replace(".",",");
                                                            tot = tot.replace("/",".");
                                                            jQuery('#totalspan').html(tot);
                                                        }
                                                    });
                                                    jQuery.post("/ajax/foto.php", {id: <?=$producto['id']?>, valor: jQuery( "#<?=$nombreJS?>" ).val()}, function(respuesta){ 
                                                        if(respuesta != ''){
                                                            var dirImg = '/imagenesproductosAtr/'+respuesta;
                                                            jQuery('#frame_cargaD').attr('style', 'display:none');
                                                            jQuery('#imagenAtrb').attr('src', dirImg);
                                                            jQuery('#frame_cargaImg').attr('style', 'display:block');
                                                        }else{
                                                            jQuery('#frame_cargaImg').attr('style', 'display:none');
                                                            jQuery('#frame_cargaD').attr('style', 'display:block');
                                                        }
                                                    });
                                                });
                                                
                                                 
                                                jQuery(document).ready(function(){
                                                 
                                                    jQuery("#icono_info<?=$i?>").click(function(){
                                                        var texto = jQuery(this).attr('data-desc');
                                                        jQuery("#text_info").html(texto);
                                                        document.getElementById('myModal').style.display = "block";
                                                        document.getElementById('myModal3').style.display = "block";
                                                    });
                                                });
                                                
                                        </script>
                                                <div style="margin:0 !important;width:100% !important;" class="talla">
                                                    <select id="<?=$nombreJS?>" style="width:100%;" name="<?=$nombreJS?>" <?=@$atributo['obligatorio'] == 'Si' ? '' : ''?> data-precio="<?=@$atributo['obligatorio'] == 'Si' ? $atributo['precio'] : '0'?>"> 
                                                        <?=@$atributo['obligatorio'] == 'Si' ? '' : ($atributo['mensaje'] != '' ? '<option value="" selected>'.$atributo['mensaje'].'</option>':'<option value="" selected>Ninguno/a</option>')?>
                                                        <option value="<?=$atributo['atributo']?>"><?=$atributo['atributo']?></option>
                                            
                                                        <?php $aux = $atributo['nombre']; ?>
                                <?php
                                        }else{
                                ?>

                                            <option value="<?=$atributo['atributo']?>"><?=$atributo['atributo']?></option>
                                
                                <?php
                                        }
                                    }
                                ?>
                                            </select>
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                            <?php if($producto['fDirecta'] == 1){
                                if (count($cuotas) > 0){ ?>
                            <div style="display:table;width:100%;">
                                <div style="display:table-row;">
                                    <div style="display:table-cell;vertical-align:middle;width:66%;">
                                        <label style="color: #333; font-size: 1.20rem; margin-right: 15px; margin-top: 7px;<?=$producto['precio'] != 'Consultar' ? '' : ' display: none;'?>">Financiación:</label>
                                    </div>
                                    <div style="display:table-cell;height:50px;vertical-align:middle;">
                                        <div class="talla" style="margin:0 !important;width:100% !important;">
                                            <select id="financiacion" style="width:100%;" name="financiacion" data-cuota="1">
                                                <option value="0">No Financiado</option>
                                                <?php foreach ($cuotas AS $cuota){ ?>
                                                    <option value="<?=$cuota['id']?>"><?=number_format($cuota['precio'],2,',','.')?> x <?=$cuota['meses']?> meses</option>
                                                <?php  } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php  }
                            } ?>
                            <div style="display: table;width:100%;">
                                <div style="display:table-row;">
                                <div style="display:table-cell;vertical-align:middle;width:76%;">
                                    <label style="color: #333; font-size: 1.20rem; margin-right: 15px; margin-top: 7px;<?=$producto['precio'] != 'Consultar' ? '' : ' display: none;'?>"><?=$auxcan?>:</label>
                                </div>
                                <div style="display:table-cell;height:50px;vertical-align:middle;">
                                    <div class="talla" style="margin:0 !important;width:100% !important;">
                                        <select id="cantidadmuliselect" name="cantidadmuliselect" style="<?=$producto['precio'] != 'Consultar' ? '' : ' display: none;'?>" onchange="javascript:changePricePerUnit(this);">
                                            <?php
                                                for($i = 1; $i <= 10; $i++)
                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <?php if($producto['rfentrada'] == 1){ ?>                    
                            <div style="width:100%;">
                                <div style="display:table-cell;vertical-align:middle;width:66%;">
                                    <label style="color: #333; font-size: 1.20rem; margin-right: 15px; margin-top: 7px;">Fecha Entrada:</label>
                                </div>
                                <div style="display:table-cell;height:50px;vertical-align:middle;">
                                    <div class="talla" style="margin:0 !important;width:100% !important;">
                                        <input placeholder="dd/mm/yyyy" type="text" id="fentrada" name="fentrada" data-precio="<?=$producto['precio']?>">
                                    </div>
                                </div>
                               
                                    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                                    <link rel="stylesheet" href="/resources/demos/style.css">
                                    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
                                    
                                    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
                                
                                <script>    
                                    jQuery( "#fentrada" ).datepicker({
                                        // Formato de la fecha
                                        dateFormat: "dd/mm/yy",
                                        // Primer dia de la semana El lunes
                                        firstDay: 1,
                                        // Dias Largo en castellano
                                        dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
                                        // Dias cortos en castellano
                                        dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
                                        // Nombres largos de los meses en castellano
                                        monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
                                        // Nombres de los meses en formato corto 
                                        monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec" ],
                                        // Cuando seleccionamos la fecha esta se pone en el campo Input 
                                        onSelect: function(dateText) { 
                                            var hoy = new Date();                                    
                                            var actual = jQuery( "#fentrada" ).val();
                                            actual = actual.split("/");

                                            var fechaEntrada = new Date(actual[2], (actual[1]-1), actual[0], hoy.getHours(), hoy.getMinutes(), (hoy.getSeconds()+1));

                                            if(fechaEntrada >= hoy){
                                                jQuery('#fentrada').val(dateText);
                                                if(jQuery('#fsalida').val() != ""){
                                                        jQuery.post("/ajax/precio_esp.php", {id: <?=$producto['id']?>, valor: jQuery( "#<?=$nombreJS?>" ).val(), fentrada: jQuery( "#fentrada" ).val(), fsalida: jQuery( "#fsalida" ).val(), moneda1: '<?=$Empresa['moneda']?>', moneda2: '<?=$_SESSION['divisa']?>' }, function(respuesta){ 
                                                            if(respuesta != "- " && respuesta != "--"){
                                                                var tot = jQuery('#totalspan').attr('data-precio');
                                                                tot = parseFloat(tot) - parseFloat(jQuery('#fentrada').attr('data-precio')) + parseFloat(respuesta);
                                                                jQuery('#totalspan').attr('data-precio', tot);
                                                                jQuery('#fentrada').attr('data-precio', parseFloat(respuesta));
                                                                //jQuery("#<?=$nombreJS?>").attr('data-precio', respuesta);
                                                                //jQuery('#totalspan').attr('data-precio', tot);
                                                                tot = tot.toFixed(2);
                                                                tot = tot.replace(",","/");
                                                                tot = tot.replace(".",",");
                                                                tot = tot.replace("/",".");
                                                            }else if(respuesta == "--"){
                                                                jQuery('#totalspan').html("- ");
                                                                jQuery('#btSubmit').attr('style', 'background-color: #000000 !important;cursor: no-drop; margin: 25px auto; border-radius: 3px; line-height: 18px; color: #ffffff; font-weight: normal; padding: 6px; font-size: 16px;');
                                                                jQuery('#btSubmit').attr('disabled', '');
                                                                jQuery("#text_info").html("<?=$Empresa['msgdiasmax']?>");
                                                                document.getElementById('myModal').style.display = "block";
                                                                document.getElementById('myModal3').style.display = "block";
                                                            }else{
                                                                tot = respuesta;
                                                            }
                                                            jQuery('#totalspan').html(tot);
                                                        });
                                                        jQuery('#btSubmit').attr('style', 'cursor: pointer; margin: 25px auto; border-radius: 3px; line-height: 18px; font-weight: normal; padding: 6px; font-size: 16px;');
                                                        jQuery('#btSubmit').removeAttr('disabled');
                                                    }else{
                                                        jQuery('#btSubmit').attr('style', 'background-color: #000000 !important;cursor: no-drop; margin: 25px auto; border-radius: 3px; line-height: 18px; color: #ffffff; font-weight: normal; padding: 6px; font-size: 16px;');
                                                        jQuery('#btSubmit').attr('disabled', '');
                                                    }
                                                    if(jQuery('#fentrada').val() != ""){
                                                        jQuery('#fsalidaB').attr('style', 'width:100%;');
                                                    }else{
                                                        jQuery('#fsalidaB').attr('style', 'width:100%; display: none;');
                                                    }
                                                }else{
                                                    jQuery( "#fentrada" ).val('');
                                                    jQuery( "#fsalida" ).val('');
                                                    jQuery('#fsalidaB').attr('style', 'width:100%; display: none;');
                                                    jQuery('#btSubmit').attr('style', 'background-color: #000000 !important;cursor: no-drop; margin: 25px auto; border-radius: 3px; line-height: 18px; color: #ffffff; font-weight: normal; padding: 6px; font-size: 16px;');
                                                    jQuery('#btSubmit').attr('disabled', '');
                                                    jQuery("#text_info").html("La fecha de Entrada debe ser igual o posterior a hoy");
                                                    document.getElementById('myModal').style.display = "block";
                                                    document.getElementById('myModal3').style.display = "block";
                                                }
                                        }
                                    });
                                    
                                    jQuery(document).on("change", "#fentrada", function(){
                                        var hoy = new Date();                                    
                                        var actual = jQuery( "#fentrada" ).val();
                                        actual = actual.split("/");

                                        var fechaEntrada = new Date(actual[2], (actual[1]-1), actual[0], hoy.getHours(), hoy.getMinutes(), (hoy.getSeconds()+1));

                                        if(fechaEntrada >= hoy){
                                            if(jQuery( "#fsalida" ).val() != ''){
                                                        jQuery.post("/ajax/precio_esp.php", {id: <?=$producto['id']?>, valor: jQuery( "#<?=$nombreJS?>" ).val(), fentrada: jQuery( "#fentrada" ).val(), fsalida: jQuery( "#fsalida" ).val(), moneda1: '<?=$Empresa['moneda']?>', moneda2: '<?=$_SESSION['divisa']?>' }, function(respuesta){ 
                                                            if(respuesta != "- " && respuesta != "--"){
                                                                var tot = jQuery('#totalspan').attr('data-precio');
                                                                tot = parseFloat(tot) - parseFloat(jQuery('#fentrada').attr('data-precio')) + parseFloat(respuesta);
                                                                jQuery('#totalspan').attr('data-precio', tot);
                                                                jQuery('#fentrada').attr('data-precio', parseFloat(respuesta));
                                                                //jQuery("#<?=$nombreJS?>").attr('data-precio', respuesta);
                                                                //jQuery('#totalspan').attr('data-precio', tot);
                                                                tot = tot.toFixed(2);
                                                                tot = tot.replace(",","/");
                                                                tot = tot.replace(".",",");
                                                                tot = tot.replace("/",".");
                                                            }else if(respuesta == "--"){
                                                                jQuery('#totalspan').html("- ");
                                                                jQuery('#btSubmit').attr('style', 'background-color: #000000 !important;cursor: no-drop; margin: 25px auto; border-radius: 3px; line-height: 18px; color: #ffffff; font-weight: normal; padding: 6px; font-size: 16px;');
                                                                jQuery('#btSubmit').attr('disabled', '');
                                                                jQuery("#text_info").html("<?=$Empresa['msgdiasmax']?>");
                                                                document.getElementById('myModal').style.display = "block";
                                                                document.getElementById('myModal3').style.display = "block";
                                                            }else{
                                                                tot = respuesta;
                                                            }
                                                            jQuery('#totalspan').html(tot);
                                                        });
                                                     }
                                                     if(jQuery('#fentrada').val() != ""){
                                                        jQuery('#fsalidaB').attr('style', 'width:100%;');
                                                    }else{
                                                        jQuery('#fsalidaB').attr('style', 'width:100%; display: none;');
                                                    }
                                        }else{
                                            jQuery( "#fentrada" ).val('');
                                            jQuery( "#fsalida" ).val('');
                                            jQuery('#fsalidaB').attr('style', 'width:100%; display: none;');
                                            jQuery('#btSubmit').attr('style', 'background-color: #000000 !important;cursor: no-drop; margin: 25px auto; border-radius: 3px; line-height: 18px; color: #ffffff; font-weight: normal; padding: 6px; font-size: 16px;');
                                            jQuery('#btSubmit').attr('disabled', '');
                                            jQuery("#text_info").html("La fecha de Entrada debe ser igual o posterior a hoy");
                                            document.getElementById('myModal').style.display = "block";
                                            document.getElementById('myModal3').style.display = "block";
                                        }
                                    
                                                
                                    });
                                        
                                    jQuery(document).on("change", "#fsalida", function(){
                                    
                                        var hoy = new Date();
                                        var entrada = jQuery( "#fentrada" ).val();
                                        entrada = entrada.split("/");
                                        var salida = jQuery( "#fsalida" ).val();
                                        salida = salida.split("/");

                                        var fechaEntrada = new Date(entrada[2], (entrada[1]-1), entrada[0], hoy.getHours(), hoy.getMinutes(), (hoy.getSeconds()+1));
                                        var fechaSalida = new Date(salida[2], (salida[1]-1), salida[0], hoy.getHours(), hoy.getMinutes(), (hoy.getSeconds()+1));

                                        if(fechaEntrada < fechaSalida){
                                                if(jQuery( "#fentrada" ).val() != ''){
                                                    jQuery.post("/ajax/precio_esp.php", {id: <?=$producto['id']?>, valor: jQuery( "#<?=$nombreJS?>" ).val(), fentrada: jQuery( "#fentrada" ).val(), fsalida: jQuery( "#fsalida" ).val(), moneda1: '<?=$Empresa['moneda']?>', moneda2: '<?=$_SESSION['divisa']?>' }, function(respuesta){ 
                                                        //var tot = jQuery('#totalspan').data('precio');
                                                        if(respuesta != "- " && respuesta != "--"){
                                                            var tot = jQuery('#totalspan').attr('data-precio');
                                                            tot = parseFloat(tot) - parseFloat(jQuery('#fentrada').attr('data-precio')) + parseFloat(respuesta);
                                                            jQuery('#totalspan').attr('data-precio', tot);
                                                            jQuery('#fentrada').attr('data-precio', parseFloat(respuesta));
                                                            //jQuery("#<?=$nombreJS?>").attr('data-precio', respuesta);
                                                            //jQuery('#totalspan').attr('data-precio', tot);
                                                            tot = tot.toFixed(2);
                                                            tot = tot.replace(",","/");
                                                            tot = tot.replace(".",",");
                                                            tot = tot.replace("/",".");
                                                        }else if(respuesta == "--"){
                                                                jQuery('#totalspan').html("- ");
                                                                jQuery('#btSubmit').attr('style', 'background-color: #000000 !important;cursor: no-drop; margin: 25px auto; border-radius: 3px; line-height: 18px; color: #ffffff; font-weight: normal; padding: 6px; font-size: 16px;');
                                                                jQuery('#btSubmit').attr('disabled', '');
                                                                jQuery("#text_info").html("<?=$Empresa['msgdiasmax']?>");
                                                                document.getElementById('myModal').style.display = "block";
                                                                document.getElementById('myModal3').style.display = "block";
                                                        }else{
                                                            tot = respuesta;
                                                        }
                                                        jQuery('#totalspan').html(tot);
                                                    });
                                                 }
                                        }else{
                                            jQuery( "#fsalida" ).val('');
                                            jQuery('#btSubmit').attr('style', 'background-color: #000000 !important;cursor: no-drop; margin: 25px auto; border-radius: 3px; line-height: 18px; color: #ffffff; font-weight: normal; padding: 6px; font-size: 16px;');
                                            jQuery('#btSubmit').attr('disabled', '');
                                            jQuery("#text_info").html("La fecha de salida debe ser posterior a la fecha de entrada");
                                            document.getElementById('myModal').style.display = "block";
                                            document.getElementById('myModal3').style.display = "block";
                                        }
                                    });

                                </script>
                            </div>
                            <?php } ?>
                            <?php if($producto['rfsalida'] == 1){ ?>                    
                            <div id="fsalidaB" style="width:100%; display: none;">
                                <div style="display:table-cell;vertical-align:middle;width:66%;">
                                    <label style="color: #333; font-size: 1.20rem; margin-right: 15px; margin-top: 7px;">Fecha Salida:</label>
                                </div>
                                <div style="display:table-cell;height:50px;vertical-align:middle;">
                                    <div class="talla" style="margin:0 !important;width:100% !important;">
                                        <input placeholder="dd/mm/yyyy" type="text" id="fsalida" name="fsalida">
                                    </div>
                                </div>
                                <?php if($producto['rfentrada'] == 0){ ?>
                                    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                                    <link rel="stylesheet" href="/resources/demos/style.css">
                                    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
                                    
                                    <script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
                                <?php } ?>
                                <script>    
                                    jQuery( "#fsalida" ).datepicker({
                                        // Formato de la fecha
                                        dateFormat: "dd/mm/yy",
                                        // Primer dia de la semana El lunes
                                        firstDay: 1,
                                        // Dias Largo en castellano
                                        dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
                                        // Dias cortos en castellano
                                        dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
                                        // Nombres largos de los meses en castellano
                                        monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
                                        // Nombres de los meses en formato corto 
                                        monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec" ],
                                        // Cuando seleccionamos la fecha esta se pone en el campo Input 
                                        onSelect: function(dateText) { 
                                              jQuery('#fsalida').val(dateText);
                                              if(jQuery('#fentrada').val() != ""){
                                                    var hoy = new Date();
                                                    var entrada = jQuery( "#fentrada" ).val();
                                                    entrada = entrada.split("/");
                                                    var salida = jQuery( "#fsalida" ).val();
                                                    salida = salida.split("/");

                                                    var fechaEntrada = new Date(entrada[2], (entrada[1]-1), entrada[0], hoy.getHours(), hoy.getMinutes(), (hoy.getSeconds()+1));
                                                    var fechaSalida = new Date(salida[2], (salida[1]-1), salida[0], hoy.getHours(), hoy.getMinutes(), (hoy.getSeconds()+1));

                                                    if(fechaEntrada < fechaSalida){
                                                        jQuery.post("/ajax/precio_esp.php", {id: <?=$producto['id']?>, valor: jQuery( "#<?=$nombreJS?>" ).val(), fentrada: jQuery( "#fentrada" ).val(), fsalida: jQuery( "#fsalida" ).val(), moneda1: '<?=$Empresa['moneda']?>', moneda2: '<?=$_SESSION['divisa']?>' }, function(respuesta){ 
                                                            if(respuesta != "- " && respuesta != "--"){
                                                                var tot = jQuery('#totalspan').attr('data-precio');
                                                                tot = parseFloat(tot) - parseFloat(jQuery('#fentrada').attr('data-precio')) + parseFloat(respuesta);
                                                                jQuery('#totalspan').attr('data-precio', tot);
                                                                jQuery('#fentrada').attr('data-precio', parseFloat(respuesta));
                                                                //jQuery("#<?=$nombreJS?>").attr('data-precio', respuesta);
                                                                //jQuery('#totalspan').attr('data-precio', tot);
                                                                tot = tot.toFixed(2);
                                                                tot = tot.replace(",","/");
                                                                tot = tot.replace(".",",");
                                                                tot = tot.replace("/",".");
                                                            }else if(respuesta == "--"){
                                                                jQuery('#totalspan').html("- ");
                                                                jQuery('#btSubmit').attr('style', 'background-color: #000000 !important;cursor: no-drop; margin: 25px auto; border-radius: 3px; line-height: 18px; color: #ffffff; font-weight: normal; padding: 6px; font-size: 16px;');
                                                                jQuery('#btSubmit').attr('disabled', '');
                                                                jQuery("#text_info").html("<?=$Empresa['msgdiasmax']?>");
                                                                document.getElementById('myModal').style.display = "block";
                                                                document.getElementById('myModal3').style.display = "block";
                                                            }else{
                                                                tot = respuesta;
                                                            }
                                                            jQuery('#totalspan').html(tot);
                                                        });


                                                        <?php for($i = 0; $i < count($productosRE); $i++){ ?>
                                                            jQuery.post("/ajax/precio_esp.php", {id: <?=$productosRE[$i]['id']?>, valor: '', fentrada: jQuery( "#fentrada" ).val(), fsalida: jQuery( "#fsalida" ).val(), moneda1: '<?=$Empresa['moneda']?>', moneda2: '<?=$_SESSION['divisa']?>' }, function(respuesta){ 
                                                                if(respuesta != "- "){
                                                                    //var tot = jQuery('#totalspan').data('precio');
                                                                    tot = parseFloat(respuesta);
                                                                    //jQuery("#<?=$nombreJS?>").attr('data-precio', respuesta);
                                                                    //jQuery('#totalspan').attr('data-precio', tot);
                                                                    tot = tot.toFixed(2);
                                                                    tot = tot.replace(",","/");
                                                                    tot = tot.replace(".",",");
                                                                    tot = tot.replace("/",".");
                                                                }else{
                                                                    tot = respuesta;
                                                                }
                                                                jQuery('#precio_r<?=$i?>').html(tot);
                                                            });
                                                        <?php } ?>                                                    

                                                        jQuery('#btSubmit').attr('style', 'cursor: pointer; margin: 25px auto; border-radius: 3px; line-height: 18px; font-weight: normal; padding: 6px; font-size: 16px;');
                                                        jQuery('#btSubmit').removeAttr('disabled');
                                                    }else{
                                                        jQuery( "#fsalida" ).val('');
                                                        jQuery('#btSubmit').attr('style', 'background-color: #000000 !important;cursor: no-drop; margin: 25px auto; border-radius: 3px; line-height: 18px; color: #ffffff; font-weight: normal; padding: 6px; font-size: 16px;');
                                                        jQuery('#btSubmit').attr('disabled', '');
                                                        jQuery("#text_info").html("La fecha de salida debe ser posterior a la fecha de entrada");
                                                        document.getElementById('myModal').style.display = "block";
                                                        document.getElementById('myModal3').style.display = "block";
                                                    }
                                                }else{
                                                    jQuery('#btSubmit').attr('style', 'background-color: #000000 !important;cursor: no-drop; margin: 25px auto; border-radius: 3px; line-height: 18px; color: #ffffff; font-weight: normal; padding: 6px; font-size: 16px;');
                                                    jQuery('#btSubmit').attr('disabled', '');
                                                }
                                          }
                                    });
                                   
                                </script>
                            </div>
                            <?php } ?>
                            <div style="display:table-row; z-index: 0">
                                <div style="display:table-cell;vertical-align:middle;width:76%; z-index: 0">
                                    <label style="color: #333; font-size: 1.20rem; margin-right: 15px; margin-top: 7px; z-index: 0" ></label>
                                </div>
                                <div style="display:table-cell;text-align:right;height:50px;vertical-align:middle; z-index: 0">
                                    <label style="color: #575757; font-size: 1.20rem; margin-right: 15px; margin-top: 7px; z-index: 0" ><span class="sale-label">Disponible</span></label>
                                </div>
                            </div>
                            <div style="border-top: 1px solid rgba(150, 150, 150, 0.3);color: #e74e4e;">
                                <div style="display:table-cell;vertical-align:middle;width:100%;">
                                    <span itemprop="price" id="preciopr" style="padding:0 !important;font-size:2em;margin-right: 15px; top: 7px;" class="precio"><b><span id="totalspan" data-precio="<?=$producto['precio']?>" data-preciobase="<?=$producto['precio']?>"><?=number_format(ConvertirMoneda($Empresa['moneda'],$_SESSION['divisa'],$producto['precio']), 2, ',', '.')?></span><?=$producto['precio'] != 'Consultar' ? $_SESSION['moneda'] : ''?> <?=@$totalAtr > 0 ? '<small style="opacity: 0.7;">+ '. number_format($totalAtr, 2, ',', '.') .$_SESSION['moneda'] . ' '.$nombreAtr.'</small>' : ''?></b></span>
                                    <?=$producto['comprecio'] != '' ? '<br><br><small>'.$producto['comprecio'].'</small>' : ''?>
                                </div>
                                
                            </div>  
                                                <style>
                                                    @media (min-width: 465px){
                                                        .clasetb1{
                                                            display:table-row;
                                                        }
                                                        .clasetb2{
                                                            display:table-cell;
                                                        }
                                                    }
                                                    
                                                    @media (max-width: 465px){
                                                        .btn100{
                                                            width: 100%;
                                                        }
                                                    }
                                                </style>
                                                <div class="clasetb1">
                                <div class="clasetb2" style="vertical-align:middle;width:100%;">
                                
                                    <?php
                                        if ($producto['precio'] != 'Consultar')
                                        { 
                                            if(($producto['agotado'] == 1 && $producto['pagotado'] == 0) || $producto['agotado'] == 0){
                                                if($producto['unidades'] > 0 || ($producto['unidades'] <= 0 && $producto['pagotado'] == 0)){
                                            ?>
                                                    <button id="btSubmit" class="button btn100" name="BtSubmit" onclick="javascript:submitFormProduct(this);" <?=$producto['rfsalida'] == 1 || $producto['rfentrada'] == 1 ? 'disabled style="background-color: #000000 !important;cursor: no-drop; margin: 25px auto; border-radius: 3px; line-height: 18px; color: #ffffff; font-weight: normal; padding: 6px; font-size: 16px;"' : 'style = "cursor: pointer; margin: 25px auto; border-radius: 3px; line-height: 18px; font-weight: normal; padding: 6px; font-size: 16px;"'?>><i class="fa fa-shopping-cart"></i> <?=$auxana?> </button>
                                    <?php
                                                }else if($producto['pagotado'] == 2){
                                               ?>
                                                    <a href='<?=$draizp?>/<?=$_SESSION['lenguaje']?>contacto/<?=$producto['nombre']?>(<?=$producto['id']?>)' class="button btn100" style = "cursor: pointer; margin: 25px auto; border-radius: 3px; line-height: 18px; font-weight: normal; padding: 6px; font-size: 16px;"><i class="fa fa-info-circle"></i> Solicitar Info</a>
                                    <?php 
                                                }
                                            }else if($producto['pagotado'] == 2){
                                               ?>
                                                    <a href='<?=$draizp?>/<?=$_SESSION['lenguaje']?>contacto/<?=$producto['nombre']?>(<?=$producto['id']?>)' class="button btn100" style = "cursor: pointer; margin: 25px auto; border-radius: 3px; line-height: 18px; font-weight: normal; padding: 6px; font-size: 16px;"><i class="fa fa-info-circle"></i> Solicitar Info</a>
                                    <?php 
                                            }
                                        }
                                        else
                                        {
                                            ?><button id="btSubmit" style="cursor: pointer; margin: 25px auto; border-radius: 3px; line-height: 18px; font-weight: normal; padding: 6px; font-size: 16px;" class="button" name="BtSubmit" onclick="javascript:jQuery(this).parent().attr('action', '<?=$draizp?>/acc/anadir/<?=$producto['id']?>/'+jQuery('#cantidadmuliselect').val());" <?=$producto['rfsalida'] == 1 || $producto['rfentrada'] == 1 ? 'disabled style="background-color: #000000 !important;cursor: no-drop;"' : ''?>>Consultar precio</button><br>
                                    <?php
                                        }
                                    ?>   
                                            <script>
                                                jQuery('#fentrada').change(function() {
                                                    if(jQuery('#fentrada').val() != ""){
                                                        if(jQuery('#fsalida').val() != ""){
                                                            jQuery('#btSubmit').attr('style', 'cursor: pointer; margin: 25px auto; border-radius: 3px; line-height: 18px; font-weight: normal; padding: 6px; font-size: 16px;');
                                                            jQuery('#btSubmit').removeAttr('disabled');
                                                        }else{
                                                            jQuery('#btSubmit').attr('style', 'background-color: #000000 !important;cursor: no-drop; margin: 25px auto; border-radius: 3px; line-height: 18px; color: #ffffff; font-weight: normal; padding: 6px; font-size: 16px;');
                                                            jQuery('#btSubmit').attr('disabled', '');
                                                        }
                                                    }else{
                                                        jQuery('#btSubmit').attr('style', 'background-color: #000000 !important;cursor: no-drop; margin: 25px auto; border-radius: 3px; line-height: 18px; color: #ffffff; font-weight: normal; padding: 6px; font-size: 16px;');
                                                        jQuery('#btSubmit').attr('disabled', '');
                                                    }
                                                    
                                                });
                                                jQuery('#fsalida').change(function() {
                                                    if(jQuery('#fsalida').val() != ""){
                                                        if(jQuery('#fentrada').val() != ""){
                                                            jQuery('#btSubmit').attr('style', 'cursor: pointer; margin: 25px auto; border-radius: 3px; line-height: 18px; font-weight: normal; padding: 6px; font-size: 16px;');
                                                            jQuery('#btSubmit').removeAttr('disabled');
                                                        }else{
                                                            jQuery('#btSubmit').attr('style', 'background-color: #000000 !important;cursor: no-drop; margin: 25px auto; border-radius: 3px; line-height: 18px; color: #ffffff; font-weight: normal; padding: 6px; font-size: 16px;');
                                                            jQuery('#btSubmit').attr('disabled', '');
                                                        }
                                                    }else{
                                                        jQuery('#btSubmit').attr('style', 'background-color: #000000 !important;cursor: no-drop; margin: 25px auto; border-radius: 3px; line-height: 18px; color: #ffffff; font-weight: normal; padding: 6px; font-size: 16px;');
                                                        jQuery('#btSubmit').attr('disabled', '');
                                                    }
                                                    
                                                });
                                            </script>
                                </div>
                            </div>  
                            
                                <style>
                                    .social-sharing2 a {
                                        border: 1px solid #ccc;
                                        border-radius: 5px;
                                        color: #000;
                                        display: inline-block;
                                        font-weight: normal;
                                        height: 40px;
                                        line-height: 22px;
                                        margin: 0 10px 10px 0;
                                        text-decoration: none;
                                    }

                                    .social-sharing2 span {
                                        display: inline-block;
                                        font-size: 12px;
                                        height: 22px;
                                        line-height: 22px;
                                        vertical-align: top;
                                        font-size: 16px !important;
                                        font-weight: normal;
                                        top: 8px;
                                        left: 5px;
                                    }
                                    
                                </style>
                                
                                <div class="social-sharing2" style="padding-left: 5px; padding-right: 5px; margin-bottom: 10px; border: 1px solid rgb(221, 221, 221);" data-permalink="<?=$Empresa['url']?>/<?=$_SESSION['lenguaje']?>producto/<?=$producto['id']?>/<?=$nombre?>">
                                    <span class="tfiltro">Etiquetas</span><br><br>
                                    
                                    <style>
                                        .etiquetas_estilo{
                                            font-size: 13px;
                                            line-height: 16px;
                                            font-weight: bold;
                                            padding: 4px 9px 5px 9px;
                                            border: 1px solid #d6d4d4;
                                            margin: 0 3px 3px 0;
                                        }

                                        .etiquetas_estilo:hover{
                                            background-color: grey;
                                            color: white;
                                        }
                                    </style>
                                        <?php

                                                foreach ($etiquetasProducto AS $etq)
                                                {
                                        $nombre = utf8_encode(strtr(utf8_decode($etq['nombre']), utf8_decode($tofind), $replac));
                                        $nombre = strtolower($nombre);
                                        $nombre = preg_replace('([^A-Za-z0-9])', '-', $nombre);	   
                                        ?>

                                                <a class="etiquetas_estilo" style="height: 20px !important ;text-align:center" href="<?=$draizp?>/<?=$_SESSION['lenguaje']?>buscarEtq/<?=$etq['id']?>/<?=$nombre?>"><?=$etq['nombre']?></a>


                                        <?php
                                                }
                                        ?>
                                </div>
                                
                                <?php
                                    $nombre = strtolower($producto['nombre']);
                                    $nombre = preg_replace('([^A-Za-z0-9Á-Úá-ú])', '-', $nombre);	
                                    $nombre = str_replace("á", "a", $nombre);
                                    $nombre = str_replace("é", "e", $nombre);
                                    $nombre = str_replace("í", "i", $nombre);
                                    $nombre = str_replace("ó", "o", $nombre);
                                    $nombre = str_replace("ú", "u", $nombre);
                                    $nombre = str_replace("ñ", "n", $nombre);
                                    $nombre = str_replace("--", "-", $nombre);
                                ?>
                                <div class="social-sharing2" style="text-align: center;" data-permalink="<?=$Empresa['url']?>/<?=$_SESSION['lenguaje']?>producto/<?=$producto['id']?>/<?=$nombre?>">
                                    <a target="_blank" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="http://www.facebook.com/sharer.php?u=<?=$Empresa['url']?>/<?=$_SESSION['lenguaje']?>producto/<?=$producto['id']?>/<?=$nombre?>">
                                      <span class="icon icon-facebook" aria-hidden="true"></span>
                                      <span class="share-title">Compartir</span>
                                    </a>

                                    <!-- https://dev.twitter.com/docs/intents -->
                                    <a target="_blank" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="http://twitter.com/share?url=<?=$Empresa['url']?>/<?=$_SESSION['lenguaje']?>producto/<?=$producto['id']?>/<?=$nombre?>/&amp;text=%0d&amp;">
                                      <span class="icon icon-twitter" aria-hidden="true"></span>
                                      <span class="share-title">Tweet</span>
                                    </a>

                                    <!--
                                      https://developers.pinterest.com/pin_it/
                                      Pinterest get data from the same Open Graph meta tags Facebook uses
                                    -->
                                    <a target="_blank" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="http://pinterest.com/pin/create/button/?url=<?=$Empresa['url']?>/<?=$_SESSION['lenguaje']?>producto/<?=$producto['id']?>/<?=$nombre?>/&amp;media=&amp;description=%0d">
                                      <span class="icon icon-pinterest" aria-hidden="true"></span>
                                      <span class="share-title">Pin it</span>
                                    </a>

                                    <!-- https://developers.google.com/+/web/share/ -->
                                    <a target="_blank" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="http://plus.google.com/share?url=<?=$Empresa['url']?>/<?=$_SESSION['lenguaje']?>producto/<?=$producto['id']?>/<?=$nombre?>/">
                                      <!-- Cannot get Google+ share count with JS yet -->
                                      <span class="icon icon-google" aria-hidden="true"></span>
                                      <span class="share-title">+1</span>
                                    </a>

                                    <!-- https://developer.linkedin.com/plugins/share -->
                                    <a target="_blank" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?=$Empresa['url']?>/<?=$_SESSION['lenguaje']?>producto/<?=$producto['id']?>/<?=$nombre?>/&amp;title=%0d">
                                      <span class="icon icon-linkedin" aria-hidden="true"></span>
                                      <span class="share-title">Compartir</span>
                                    </a>

                                    <!-- http://blogs.skype.com/2015/11/04/introducing-share-button-effortless-sharing-that-sparks-richer-conversations/ -->
                                    <a target="_blank" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="https://web.skype.com/share?url=<?=$Empresa['url']?>/<?=$_SESSION['lenguaje']?>producto/<?=$producto['id']?>/<?=$nombre?>/&amp;lang=es-es">
                                      <span class="icon icon-skype" aria-hidden="true"></span>
                                      <span class="share-title">Compartir</span>
                                    </a>
                              </div>
                            
                        </div>
                        <?php if($producto['aplazame'] == 1){ ?>
                            <div style="display:table-row;">
                                <div style="display:table-cell;vertical-align:middle;width:100%;">
                                    <span style="padding:0 !important;font-size:2em;margin-right: 15px; margin-top: 7px;" class="precio"><small>Financialo con Aplazame por <?=number_format(ConvertirMoneda($Empresa['moneda'],$_SESSION['divisa'],$producto['caplazame1']), 2, ',', '.')?><?=$_SESSION['moneda']?> + <?=number_format(ConvertirMoneda($Empresa['moneda'],$_SESSION['divisa'],$producto['caplazame']), 2, ',', '.')?><?=$_SESSION['moneda']?> al mes</small></span>
                                </div>
                            </div>
                            <?php } ?>		
                        </div>
                    <?php }else{ ?>
                            <style>
                                .talla{
                                    color:#ce3c3c;
                                    border: solid 2px #ce3c3c;
                                    padding: 5px;
                                }
                                .talla:hover{
                                    color:white;
                                    border: solid 2px white;
                                    background: #ce3c3c;
                                    padding: 5px;
                                }
                            </style>
                            <div style="display:table-cell;width:500px;">
                                <div class="talla" style="text-align:center;font-size:25px;"><a href="<?=$draizp?>/<?=$_SESSION['lenguaje']?>cuenta/">VER PRECIOS</a></div>
                            </div>
                    <?php } ?>
                            
					</form>
                        
                    
                    </div>
                    <br><hr>
		<?php if(strlen($producto['descripcion']) > 300){ ?>
                    <div style="font-family: '<?=$fuente2?>', sans-serif ! important; border: 1px solid rgba(150, 150, 150, 0.4); display: block; font-size: 16px; margin: 15px 0px; padding: 15px; color: #333;">
                        <h2 style="font-family: <?=$fuente1?>; font-size: 1.75em; font-weight: 500;">Más</h2><br>
                        <?=$producto['descripcion']?>
                    </div>
                <?php } ?>
                <?php if(count($ficheros) > 0){ ?>
                    <div style="font-family: '<?=$fuente2?>', sans-serif ! important; border: 1px solid rgba(150, 150, 150, 0.4); display: block; font-size: 16px; margin: 15px 0px; padding: 15px; color: #333;">
                        <h2 style="font-family: <?=$fuente1?>; font-size: 1.75em; font-weight: 500;">Ficheros Relacionados</h2><br>
                        <ul style="margin-left: 40px;">
                        <?php foreach ($ficheros AS $fich){ 
                            echo '<li><a href="/ficheros/'.$fich['idproducto'].'/'.$fich['fichero'].'" target="_blank">'.$fich['nombre'].'</a></li><br>';
                        }?>
                        </ul>
                    </div>
                <?php } ?>
    <?php if($Empresa['com_producto'] == 1){ ?>           
        <?php if($comentarios != null){ ?>
            <div style="display: inline-block; margin-right: 16px; vertical-align: top; float: right; width: 100% ! important;">
                <div style="text-align: center"><b><h3>Comentarios.</h3></b></div><br>
                <?php 
                    foreach ($comentarios as $comentario1){
                        echo $comentario1['nombre'] .': <b>'.$comentario1['comentario'] .'</b><br><br>';
                    }
                ?>
            </div>
            <?php } ?>
            
            <div style="display: inline-block; margin-right: 16px; vertical-align: top; float: right; width: 100% ! important;">
                <div style="text-align: center"><b>Dejanos aquí tu comentario</b></div>
                <form method="post" action="">
                    Nombre: <input type="text" name="nombre" id="nombre" maxlength="255" style="min-width: 100%; border: 1px solid #aaa; border-radius: 2px; box-sizing: border-box; font-family: inherit; font-size: 16px; height: auto; padding: 8px;" <?=$_SESSION['usr'] != null ? 'value="'.$_SESSION['usr']['nombre'].'"' : ''?>><br>
                    Email: <input type="text" name="email" id="email" maxlength="255" style="min-width: 100%; border: 1px solid #aaa; border-radius: 2px; box-sizing: border-box; font-family: inherit; font-size: 16px; height: auto; padding: 8px;" <?=$_SESSION['usr'] != null ? 'value="'.$_SESSION['usr']['email'].'"' : ''?>><br>
                    Comentario:<textarea name="comentario" id="comentario" style="min-width: 100%"></textarea>
                    <input type="hidden" name="envcom" id="envcom" value="1">
                    <input type="submit" id="BtSubmit" name="BtSubmit" class="button2" style="-webkit-appearance: none;" value="Enviar" disabled="">
                </form>
                <script>
                    jQuery(document).on("change", "#nombre", function(){  
                        if(jQuery("#nombre").val() != ''){
                            if(jQuery("#email").val() != ''){
                                if(jQuery("#comentario").val() != ''){
                                    document.getElementById("BtSubmit").disabled = false;
                                    document.getElementById("BtSubmit").className = 'button';
                                }else{
                                    document.getElementById("BtSubmit").disabled = true;
                                    document.getElementById("BtSubmit").className = 'button2';
                                }
                            }else{
                                document.getElementById("BtSubmit").disabled = true;
                                document.getElementById("BtSubmit").className = 'button2';
                            }
                        }else{
                            document.getElementById("BtSubmit").disabled = true;
                            document.getElementById("BtSubmit").className = 'button2';
                        }
                    });
                    
                    jQuery(document).on("change", "#email", function(){  
                        if(jQuery("#nombre").val() != ''){
                            if(jQuery("#email").val() != ''){
                                if(jQuery("#comentario").val() != ''){
                                    document.getElementById("BtSubmit").disabled = false;
                                    document.getElementById("BtSubmit").className = 'button';
                                }else{
                                    document.getElementById("BtSubmit").disabled = true;
                                    document.getElementById("BtSubmit").className = 'button2';
                                }
                            }else{
                                document.getElementById("BtSubmit").disabled = true;
                                document.getElementById("BtSubmit").className = 'button2';
                            }
                        }else{
                            document.getElementById("BtSubmit").disabled = true;
                            document.getElementById("BtSubmit").className = 'button2';
                        }
                    });
                    
                    jQuery(document).on("change", "#comentario", function(){  
                        if(jQuery("#nombre").val() != ''){
                            if(jQuery("#email").val() != ''){
                                if(jQuery("#comentario").val() != ''){
                                    document.getElementById("BtSubmit").disabled = false;
                                    document.getElementById("BtSubmit").className = 'button';
                                }else{
                                    document.getElementById("BtSubmit").disabled = true;
                                    document.getElementById("BtSubmit").className = 'button2';                                    
                                }
                            }else{
                                document.getElementById("BtSubmit").disabled = true;
                                document.getElementById("BtSubmit").className = 'button2';
                            }
                        }else{
                            document.getElementById("BtSubmit").disabled = true;
                            document.getElementById("BtSubmit").className = 'button2';
                        }
                    });
                    
                    jQuery(document).on("click", "#BtSubmit", function(){  
                       if(jQuery("#nombre").val() != ''){
                            if(jQuery("#email").val() != ''){
                                if(jQuery("#comentario").val() != ''){
                                    document.getElementById("BtSubmit").disabled = false;
                                    document.getElementById("BtSubmit").className = 'button';
                                }else{
                                    document.getElementById("BtSubmit").disabled = true;
                                    document.getElementById("BtSubmit").className = 'button2';
                                }
                            }else{
                                document.getElementById("BtSubmit").disabled = true;
                                document.getElementById("BtSubmit").className = 'button2';
                            }
                        }else{
                            document.getElementById("BtSubmit").disabled = true;
                            document.getElementById("BtSubmit").className = 'button2';
                        }
                    });
                </script>
            </div>    
        <?php } ?>
	</div>
		

        <div id="productos">
		<h3><?=$auxrel?></h3>
		<div class="muestra">
			<?php
				if (count($productosRE) < 1) echo 'No hay elementos relacionados a este producto.';
				for ($i = 0; $i < count($productosRE); $i++)
				{
                    $nombre = utf8_encode(strtr(utf8_decode($productosRE[$i]['nombre']), utf8_decode($tofind), $replac));
                    $nombre = strtolower($nombre);
                    $nombre = preg_replace('([^A-Za-z0-9])', '-', $nombre);	   
			?>
					<div class="producto">
                                            <?=$Empresa['etiqpro'] == 1 ? ($productosRE[$i]['mostraretq'] == 1 ? (($productosRE[$i]['tipo_prod'] == 0 ? '<span class="venta-label">Venta</span>' : ($productosRE[$i]['tipo_prod'] == 3 ? '<span class="alquiler-label">Alquiler</span>' : ''))) : '') : '' ?>	
						<a href="<?=$draizp?>/<?=$_SESSION['lenguaje']?>producto/<?=$productosRE[$i]['id']?>/<?=$nombre?>/"><img src="<?=$draizp?>/imagenesproductos/<?=$productosRE[$i]['imagen']?>" alt="<?=$productosRE[$i]['nombre']?>" /></a>
                                                <span class="descripcion"><?=$productosRE[$i]['nombre']?></span><br>
						<?php if($Empresa['actDes'] == 1){?><span class="descuento"><?=$productosRE[$i]['descuento'] != 0 && $productosRE[$i]['precio'] != 'Consultar' ? '-'.$productosRE[$i]['descuento'].' '.$productosRE[$i]['descuentoe'] : ''?></span><?php } ?>
						<?php if($Empresa['actPreAnt'] == 1){?><span class="precioa"><?=$productosRE[$i]['descuento'] != 0 && $productosRE[$i]['precio'] != 'Consultar' ? number_format(ConvertirMoneda($Empresa['moneda'],$_SESSION['divisa'],$productosRE[$i]['precio_ant']), 2, ',', '.').$_SESSION['moneda'] : ''?></span><?php } ?><br>
                        <?php //if($_SESSION['usr'] != null || ($_SESSION['usr'] == null && $Empresa['registro'] == 1))
                        if($_SESSION['usr'] != null || ($_SESSION['usr'] == null)){ ?>
                                                <?php if($Empresa['actPre'] == 1){ ?><span class="precio" id="precio_r<?=$i?>"><?=$productosRE[$i]['tprecio'] == '' ? number_format(ConvertirMoneda($Empresa['moneda'],$_SESSION['divisa'],$productosRE[$i]['precio']), 2, ',', '.') : $productosRE[$i]['tprecio']?><?=$productosRE[$i]['precio'] != 'Consultar' ? ($productosRE[$i]['tprecio'] == '' ? $_SESSION['moneda'] : '') : ''?></span><?php } ?>
                        <?php } ?>
						<a class="vermas" href="<?=$draizp?>/<?=$_SESSION['lenguaje']?>producto/<?=$productosRE[$i]['id']?>/<?=$nombre?>/"><?=$auxver?></a>
                                                <br>
                                                <form name="formulario_cesta" id="formulario_cesta" action="<?=$draizp?>/acc/anadir/<?=$productosRE[$i]['id']?>" method="post" style="max-height: 100% !important;">
                                                    <input type="hidden" name="cantidad" value="1">
                                                    <!--Deberíamos comprobar si tiene atributos obligatorios.--><input type="hidden" name="Fianza" value="Fianza">
                                                    <input type="submit" class="btanadir" value="Añadir">
                                                </form>
					</div>
			<?php
				}
                                echo "<input type='hidden' id='total_r' value=".$i.">";
			?>
                </div>
	   </div>
    <?php
        }
        
    ?>
	
	<?php /*include_once('./bloques/novedades.php'); ?>
	<?php include_once('./bloques/masvendidos.php');*/ ?>
</div>                     
                    
