<?php
if($Empresa['tipoportes'] == 0 || $Empresa['tipoportes'] == 2 || $Empresa['tipoportes'] == 3){
    if($_SESSION['compra']['pago']['pagov'] != 'tie'){ ?>
    <h4>Tipo de envío</h4>
                                
    <?php
    if($Empresa['tipoportes'] == 0){
        @$portes_extras = OtrosEnvios($total);
    }
    if($Empresa['tipoportes'] == 2){
        $portes_extras2 = OtrosEnvios2($total);
    }
    if($Empresa['tipoportes'] == 3){
        $portes_extras3 = OtrosEnvios3($total);
    }

    $cont = 0;
    $idPT = 0;

    foreach ($portes_extras AS $nporte){
        if($nporte['Gratis'] > $total || !isset($nporte['Gratis'])){
    ?>
        <input onclick="cambTransp(<?=$nporte['id']?>)" type="radio" id="penvio" name="penvio" <?php if($cont == 0){ echo "checked"; $cont++; $idPT=$nporte['id']; } ?> value="<?=$nporte['precio']-$portes?>"> <?=$nporte['transportista']?> (+<?=number_format(ConvertirMoneda($Empresa['moneda'],$_SESSION['divisa'],$nporte['precio']), 2, ',', '.')?><?=$_SESSION['moneda']?>)
    <?php 
        }else{
    ?>
            <input onclick="cambTransp(<?=$nporte['id']?>)" type="radio" id="penvio" name="penvio" <?php if($cont == 0){ echo "checked"; $cont++; $idPT=$nporte['id']; } ?> value="<?=-$portes?>"> <?=$nporte['transportista']?> (0,00<?=$_SESSION['moneda']?>)
    <?php 
        }
        if($nporte['extension'] != ''){ ?>
            <img src="<?=$draizp?>/logos/<?=$nporte['id']?>.<?=$nporte['extension']?>" style="max-width: 60px; max-height: 30px; float:left" />
        <?php }?>
            <br><br>
            <?php
    } 
    foreach ($portes_extras2 AS $nporte){ ?>
        <input onclick="cambTransp(<?=$nporte['id']?>)" type="radio" id="penvio" name="penvio" <?php if($cont == 0){ echo "checked"; $cont++; $idPT=$nporte['id']; } ?> value="<?=$nporte['precio']-$portes?>"> <?=$nporte['transportista']?> (+<?=number_format(ConvertirMoneda($Empresa['moneda'],$_SESSION['divisa'],$nporte['precio']), 2, ',', '.')?><?=$_SESSION['moneda']?>)
    <?php                                 
        if($nporte['extension'] != ''){ ?>
            <img src="<?=$draizp?>/logosProvincias/<?=$nporte['id']?>.<?=$nporte['extension']?>" style="max-width: 60px; max-height: 30px; float:left" />
        <?php }?>
            <br><br>
            <?php
    } 
    ?>
    <?php foreach ($portes_extras3 AS $nporte){ ?>
        <input onclick="cambTransp(<?=$nporte['id']?>)" type="radio" id="penvio" name="penvio" <?php if($cont == 0){ echo "checked"; $cont++; $idPT=$nporte['id']; } ?> value="<?=($nporte['precio']*$peso)-$portes?>"> <?=$nporte['transportista']?> (+<?=number_format(ConvertirMoneda($Empresa['moneda'],$_SESSION['divisa'],($nporte['precio']*$peso)), 2, ',', '.')?><?=$_SESSION['moneda']?>)
    <?php                                 
        if($nporte['extension'] != ''){ ?>
            <img src="<?=$draizp?>/logosProvinciasP/<?=$nporte['id']?>.<?=$nporte['extension']?>" style="max-width: 60px; max-height: 30px; float:left" />
        <?php }?>
            <br><br>
            <?php
    } 
    ?>
            <input type='hidden' id='transp' name='transp' value='<?=$idPT?>'>
            <script>
                function cambTransp($id){
                    document.getElementById("transp").value = $id;
                }
            </script>
<?php }
}
 ?>