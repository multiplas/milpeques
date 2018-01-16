<?php
require_once "system/config/config_db_cms.php";
require_once "system/config/conectar_cms.php";
require_once('system/productos/functions-arbol-categorias.php');
$tree = new Tree("BD_CLIENTE");


$elements = $tree->get();
$masters = $elements["masters"];
$childrens = $elements["childrens"];

?>
<style type="text/css">
ul{
	list-style: none;
}
</style>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
//evento de cambio de �conos del arbol de categor�as
	$(document).ready(function(){
		$(".btn-folder").on("click",function(e){
			e.preventDefault();
			if($(this).attr("data-status") === "1"){
				$(this).attr("data-status", "0");
				$(this).find("i").removeClass("fa fa-folder").addClass("fa fa-folder-open");
				$(this).find("span").removeClass("fa fa-plus-circle").addClass("fa fa-minus-circle");
			}
			else{
				$(this).attr("data-status", "1");
				$(this).find("i").removeClass("fa fa-folder-open").addClass("fa fa-folder");
				$(this).find("span").removeClass("fa fa-minus-circle").addClass("fa fa-plus-circle");
			}
			$(this).next("ul").slideToggle();
		});

//selecci�n de checkbox del arbol de categorias
/*		$(function () {
 			$(".autoCheckbox").on("click",function () {
  			var expr="li input[type=checkbox]",$this=$(event.target);
 				 while ($this.length) {
   					$input=$this.closest("li").find(expr);
   						if ($input.length) {
    							if ($this[0]==event.target) {
     								checked = $this.prop("checked");
     								$input.prop("checked", checked).css("opacity","1.0");
    							}
    							checked=$input.is(":checked");
    							$this.prop("checked", checked).css("opacity", (checked && $input.length!= $this.closest("li").find(expr+":checked").length) ? "0.5" : "1.0");
   						}
   						$this=$this.closest("ul").closest("li").find(expr.substr(3)+":first");
  				}
 			});
		});	*/






// Evento que se ejecuta al soltar una tecla en el input
	$("#cantidad").keydown(function(){
		$(".checkbox-cat").prop('checked', false);
		$("#seleccionados").html("0");
	});
 
	// Evento al pulsar en un checkbox
	$("input[type=checkbox].checkbox-cat").change(function(){
 
		// elemento actual
		var elemento=this;
		var contador=0;
 
		// Recorremos todos los checkbox para contar los que estan seleccionados
		$("input[type=checkbox].checkbox-cat").each(function(){
			if($(this).is(":checked"))
				contador++;
		});
 
		var cantidadMaxima=5;
 
		// Comprobamos si supera la cantidad m�xima indicada
		if(contador>cantidadMaxima)
		{
			//alert("Has seleccionado mas checkbox que los indicados");
			$('#msj_tope_categoria').show(300);
			$('.msj_tope_categoria').show("slow");
			$('#msj_tope_categoria').hide(9000);
			$('.msj_tope_categoria').hide("linear");
 
			// Desmarcamos el �ltimo elemento
			$(elemento).prop('checked', false);
			contador--;
		}
 
		$("#seleccionados").html(contador);
	});





	});
</script>