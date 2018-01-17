<?php
/* this file Display all user info, pay methods, transfer services... */
 $mostraEnvio = MostrarEnvios($_SESSION['usr']['id']);
 ?>

<script type="text/javascript">
    var cambiado = false; 
    var oldPorte = 0;

    jQuery(window).load(function(){        
        var porteOriginal = parseFloat(jQuery('#nuevopenvio').val());
        jQuery('#nuevopenvio').val( jQuery('#nuevopenvio').val() - porteOriginal);

        jQuery( ".update-data" ).click(function() {
            jQuery( "#datosper" ).submit();
        });
        jQuery( ".pay-form" ).click(function() {
            jQuery( "#pago-form" ).submit();
        });
        jQuery('input[type=radio][name=penvio]').change(function() {//Script para cambiar el precio total
            base = jQuery('#importeBase').val().replace(',','.');
            if(base == ''){
                base = jQuery('#base_helper').val().replace(',','.');
            }
            total = 0;
            base = parseFloat(base);
            porte = this.value.replace('.','');
            porte = parseFloat(porte);
            porte = porte + porteOriginal;
            total = base + porte;
            if(porte == 0)
                jQuery('.portes-text').text('Gratis');
            else{
                jQuery('.portes-text').text(porte.toFixed(2) + ' €');
            }
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
                include_once 'total_calculate_helper.php';
                total_calculate_helper($draizp);
            ?>
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