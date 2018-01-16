<?php
/* this file Display all user info, pay methods, transfer services... */
function extraePortes($Empresa, $total, $draizp){
    $portes = 0;
    if($Empresa['tipoportes'] == 0){
        $portes = number_format(CalculaPortesPS($total), 2, ',', '.');
        $portes = str_replace(',', '.', $portes);
    }else if($Empresa['tipoportes'] == 1){
        $portes_ar = CalculaPortesKmS($total);
        //$logoPortes = $portes_ar[1];
        $portes = $portes_ar[0];
        $portes = str_replace(',', '.', $portes);
        if($portes_ar[0] < 0){
            echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$draizp.'/'.$_SESSION['lenguaje'].'/cesta">';
            exit;
        }
    }else if($Empresa['tipoportes'] == 2){
        $portes = CalculaPortesProvS($total);
        if($portes >= 0){
            $portes = number_format($portes, 2, ',', '.');
            $portes = str_replace(',', '.', $portes);
        }else{
            $portes = -4;
        }
    }else if($Empresa['tipoportes'] == 3){
        $portes = CalculaPortesProvSP($total, $peso);
        if($portes >= 0){
            $portes = number_format($portes, 2, ',', '.');
            $portes = str_replace(',', '.', $portes);
        }else{
            $portes = -4;
        }
    }
    return $portes;
}

 ?>

<script type="text/javascript">
    jQuery(document).ready(function(){
        var base = jQuery('#importeBase').val().replace(',','.');
        jQuery('.importe-total').text(base);
        jQuery('#nuevotransp').val(jQuery('#transp2').val());

        jQuery( ".update-data" ).click(function() {
            jQuery( "#datosper" ).submit();
        });
        jQuery( ".pay-form" ).click(function() {
            jQuery( "#pago-form" ).submit();
        });
        jQuery('input[type=radio][name=penvio]').change(function() {//Script para cambiar el precio total
            total = 0;
            base = parseFloat(base);
            porte = parseFloat(this.value);
            total = base + porte;
            var rounded = Math.round((total*100),2) /100;
            if(porte == 0)
                jQuery('.portes-text').text('Gratis');
            else
                jQuery('.portes-text').text(porte + ' €');
            jQuery('#importeTotal').val(total);
            jQuery('#nuevopenvio').val(this.value);
            jQuery('.importe-total').text(total);
        });    
    });  
    function cambTransp($id){
        document.getElementById("nuevotransp").value = $id;
    }
</script>

<div class="container-fluid">
    <form method="post" id="datosper" name="datosper" action="<?=$draizp?>/acc/pago">
        <div class="col-xs-12 col-sm-offset-1 col-sm-5 datos-personales-izquierda">
            <div class="row">
                <div class="form-group">
                    <h4><?=$auxdc?></h4>   
                    <div class="row datos-contacto">
                        <div class="col-sm-6">
                            <label for="email">Correo electrónico</label>
                            <input type="text" class="form-control" id="email" name="email" disabled class="dobleF" placeholder="Correo Electrónico" value="<?=$_SESSION['usr']['email']?>"/>       
                        </div>
                        <div class="col-sm-6">
                            <label for="telefono">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="<?=$_SESSION['usr']['telefono']?>" />
                        </div>
                    </div>
                    <h4><?=$auxdp?></h4>
                    <div class="row datos-personales">
                        <?php if($_SESSION['usr']['RazonSocial'] != ''){ ?>
                                <label for="rsocial">Razón social</label>
                                <input type="text" class="form-control" id="rsocial" name="rsocial" placeholder="Razon Social" value="<?=$_SESSION['usr']['RazonSocial']?>" class="dobleF" disabled="">
                        <?php } ?>
                        <div class="col-sm-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre *" value="<?=$_SESSION['usr']['nombre']?>">
                        </div>
                        <div class="col-sm-6">
                            <label for="dni">DNI/CIF</label>
                            <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI *" value="<?=$_SESSION['usr']['dni']?>" />
                        </div>
                    </div>
                    <h4><?=$auxde?></h4>
                    <div class="row datos-facturacion">
                        <div class="col-xs-12">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" required name="direccion" placeholder="Dirección *" value="<?=$_SESSION['usr']['direccion']?>" />
                        </div>
                        <div class="col-sm-4">
                            <label for="pais">País</label>
                            <select class="form-control" id="pais" name="pais" required>
                            <option value="" selected>País</option>
                            <?php
                            foreach($paises as $pais)
                            echo '<option'.($pais['id'] == $_SESSION['usr']['pais'] ? ' selected' : '').' value="'.$pais['id'].'">'.$pais['nombre'].'</option>';
                            ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="provincia">Provincia</label>
                            <select id="provincia" name="provincia" required>
                            <option value="" selected>Selecciona primero un país</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="cp">Código Postal</label>
                            <input type="text" id="cp" name="cp" class="form-control" required placeholder="C. Postal *" value="<?=$_SESSION['usr']['cp']?>" />
                        </div>
                        <div class="col-xs-12">
                            <label for="localidad">Localidad</label>
                            <input type="text" class="form-control" id="localidad" name="localidad" required placeholder="Localidad *" value="<?=$_SESSION['usr']['poblacion']?>" />
                        </div>
                        <input type="hidden" id="idpro" name="idpro" value="<?=$_SESSION['usr']['provinciaid']?>" />
                        <span style="display: <?=$mostraEnvio ? 'block' : 'none'?>">
                    </div>
                    <h4><?=$auxdentre?></h4>
                    <div class="row datos-entrega">
                        <div class="col-xs-12">
                            <label for="nombreE">Nombre</label>
                            <input type="text" id="nombreE" name="nombreE" placeholder="Nombre" value="<?=@$_SESSION['usr']['nombreE']?>">
                        </div>
                        <div class="col-xs-12">
                            <label for="direccionE">Dirección</label>
                            <input type="text" class="" id="direccionE" name="direccionE" placeholder="Dirección *" value="<?=$_SESSION['usr']['direccionEnv']?>" />
                        </div>
                        <div class="col-sm-4">
                            <label for="paisE">País</label>
                            <select id="paisE" name="paisE" required>
                            <option value="" selected>País</option>
                            
                            <?php
                            foreach($paises as $pais)
                            echo '<option'.($pais['id'] == $_SESSION['usr']['paisEnv'] ? ' selected' : '').' value="'.$pais['id'].'">'.$pais['nombre'].'</option>';
                            ?>
                            </select> 
                        </div>
                        <div class="col-sm-4">
                            <label for="provinciaE">Provincia</label>
                            <select id="provinciaE" name="provinciaE" required>
                            <option value="" selected>Selecciona primero un país</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="cpE">Código Postal</label>
                            <input type="text" id="cpE" name="cpE" placeholder="C. Postal *" value="<?=$_SESSION['usr']['cpEnv']?>" />
                        </div>
                        <div class="col-xs-12">
                            <label for="localidadE">Localidad</label>
                            <input type="text" id="localidadE" name="localidadE" placeholder="Localidad *" value="<?=$_SESSION['usr']['poblacionEnv']?>" />
                        </div>
                    </div>
                    <input type="hidden" id="idpro2" name="idpro2" value="<?=$_SESSION['usr']['provinciaidEnv']?>" />  
                    </span>
                    <h5 style="display: inline-block; color: #E81F32; font-style: italic;"><?=$auxcam?></h5>
                </div>
            </div>
        </div>   
        </form>
        <div class="col-xs-12 col-sm-5 datos-personales-derecha">
            <?php
            $precio_total_portes = number_format(ConvertirMoneda($Empresa['moneda'],$_SESSION['divisa'],($total+ $portes)), 2, ',', '.') . $_SESSION['moneda'] ;
            $subtotal = 0;
			if ($_SESSION['usr'] != null)
			{
				$pedido = Cesta($_SESSION['usr']['id']);
			}
			else
			{
				$pedido = CestaSession($_SESSION['cestases']);
			}
            ?>
            <?php $total = 0 ?>
            <?php foreach ($_SESSION['datos_cesta'] as $current_item):
                if(isset($current_item['id'])): ?>
                 <?php   
                    $total += ($current_item['precio'] + $current_item['personalizacion']) * $current_item['cantidad'];
                        
                    $total += $Empresa['contrareembolso'];

                    if($Empresa['tipoportes'] == 0){
                        $portes = CalculaPortesP($total);
                        $portes = str_replace(',', '.', $portes[0]);                                                                    
                    }else if($Empresa['tipoportes'] == 1){
                        $portes_ar = CalculaPortesKm($total);
                        $logoPortes = $portes_ar[1];
                        $portes = $portes_ar[0];
                        $portes = str_replace(',', '.', $portes);
                        if($portes_ar[0]<0){
                            echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$draizp.'/'.$_SESSION['lenguaje'].'/cesta">';
                            exit;
                         }
                    }else if($Empresa['tipoportes'] == 2){
                        $portes = CalculaPortesProv($total);
                        if($portes >= 0){
                            $portes = number_format($portes, 2, ',', '.');
                            $portes = str_replace(',', '.', $portes);
                        }else{
                            $portes = -4;
                        }
                    }else if($Empresa['tipoportes'] == 3){
                        $portes = CalculaPortesProvP($total, $peso);
                        if($portes >= 0){
                            $portes = number_format($portes, 2, ',', '.');
                            $portes = str_replace(',', '.', $portes);
                        }else{
                            $portes = -4;
                        }
                    }
                    $abono = Abono(@$_SESSION['usr']['id']);
                    $total = $total - $abono;
                    if (@$_SESSION['compra']['codpromo'] != null && @$_SESSION['compra']['codpromo'] != '')
                    {
                        $pcode = CodigoPromocional(strtolower($_SESSION['compra']['codpromo']), $total);
                        if ($pcode != null)
                        {
                            if ($pcode['tipo'] == $_SESSION["moneda"])
                                $total = $total - $pcode['descuento'];
                            else
                                $total = $total - ($total * ($pcode['descuento'] / 100));
                            
                            //echo $total;
                        }
                    }
                    $_SESSION['compra']['total'] = $total+ $portes;
                 ?>
                 
                 
                <div class="row bag-item">
                    <div class="col-sm-3 hidden-xs">
                        <img src="<?php echo (!empty($current_item['imagen'])) ? $draizp.'/imagenesproductos/'.$current_item['imagen'] : $draizp.'/imagenesproductos/'.'default.png' ?>" alt=""/>
                    </div>
                    <div class="col-xs-6">
                        <span><?php echo $current_item['nombre'] ?></span>
                    </div>
                    <div class="col-xs-6 col-sm-3 price text-right">
                        <?php echo $current_item['cantidad'] ." x ". round($current_item['precio'],2) . $_SESSION['moneda'] ?>
                    </div>
                </div>
                <?php $subtotal += $current_item['cantidad']*$current_item['precio'] ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php
           
            $_SESSION['datos_cesta']['subtotal'] = $subtotal;
            ?>
            <hr>
            <div class="row transporte-gastos">
            <?php  include_once 'tipo_envio.php'; ?>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12"><?php echo $_SESSION['datos_cesta']['baseImp'] ?></div>
                <div class="col-xs-9">Subtotal</div>
                <div class="col-xs-3 text-right"><?php echo round($subtotal,2) ?></div>
                <div class="col-xs-9">Envio</div>
                <div class="col-xs-3 text-right portes-text"><?php echo ($Empresa['portes_gratis'] == 0) ? 'Gratis' : extraePortes($Empresa, $total, $draizp) ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-sm-9"><span class="importe-title">Total</span></div>
                <div class="col-xs-12 col-sm-3 text-right"><span class="importe-total"><?php echo $_SESSION['datos_cesta']['ImporteTotal'] ?></span> <?=$_SESSION['moneda']?> </div>
            </div>
             <hr>
            <?php  include_once('modulo_pago.php'); ?>
        </div>
    </div>

<hr>
<div class="row">
    <div class="col-xs-12">
        <div class="col-xs-4">
            <span type="submit" class="btn btn-primary custom-btn" onclick="location.href='<?=$draizp?>/<?=$_SESSION['lenguaje']?>cesta';"><?=$auxvol?></span>
        </div>
        <div class="col-xs-4">
            <span class="btn btn-primary custom-btn update-data">Actualizar datos</span>
        </div>
        <div class="col-xs-4">
            <span class="btn btn-primary custom-btn pay-form" style="float: right;"><?=$auxcon?></span>
        </div>
    </div>
</div>