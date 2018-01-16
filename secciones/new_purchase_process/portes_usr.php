<?php 
include_once __DIR__ . '/../auxiliares.php';
//Calculo de portes para el usuario
if($_SESSION['usr'] != null){
    $portes2 = $_SESSION['datos_cesta']['portes2'];

    if(($portes > 0 || $Empresa['portes_gratis'] == 0) && $portes2 != -1 && $portes2 != -2 && $portes2 != -3 && $portes2 != -4){ ?>
        <div class="row">
            <div class="col-xs-3 "><img src="<?=$draizp?>/<?=$logoPortes != "" && $logoPortes != "." ? ($Empresa['tipoportes'] == 0 ? 'logos/' : 'logoskm/').$logoPortes : ($Empresa['transporteIcon'] != '' ? 'iconos/'.$Empresa['transporteIcon'] : 'imagenesproductos/portes.png')?>" alt="<?=$micesta['nombre']?>"></div>
            <div class="col-xs-3 center-div"><div class="enlazado  red-colored"><?=$aux10?></div><div><?=$aux11?> <?=$_SESSION['usr']['provinciaEnv']?>, <?=$_SESSION['usr']['paisEnvN']?></div></div>
            <div class="col-xs-3 ">  
                <form method="post" action="#">
                        <input type="text" class="miniF" name="desertor" value="1" readonly />
                </form>
            </div>
            <div class="col-xs-3 center-div"><?=$portes > 0 ? number_format(ConvertirMoneda($Empresa['moneda'], $_SESSION['divisa'],$portes), 2, ',', '.') . $_SESSION['moneda'] : $aux15?></div>
        </div>
    <?php }else if($portes2 == -1){ ?>
        <tr>
            <td></td>
            <td style="position: relative;"><img src="<?=$draizp?>/<?=$logoPortes != "" && $logoPortes != "." ? ($Empresa['tipoportes'] == 0 ? 'logos/' : 'logoskm/').$logoPortes : 'imagenesproductos/portes.png'?>" alt="<?=$micesta['nombre']?>"></td>
            <td><span class="enlazado"><?=$aux10?></span><span><?=$aux11?> <?=$_SESSION['usr']['provinciaEnv']?>, <?=$_SESSION['usr']['paisEnvN']?></span></td>
            <td>
                    <form method="post" action="#">
                            <input type="text" class="miniF" name="desertor" value="1" readonly />
                    </form>
            </td>
            <td>Desde <?=$portes?>€</td>
            <td>N/A</td>
            <td>Desde <?=$portes?>€</td>
        </tr>
    <?php }else if($portes2 == -2){ ?>
        <tr>
            <td></td>
            <td style="position: relative;"><img src="<?=$draizp?>/<?=$logoPortes != "" && $logoPortes != "." ? ($Empresa['tipoportes'] == 0 ? 'logos/' : 'logoskm/').$logoPortes : 'imagenesproductos/portes.png'?>" alt="<?=$micesta['nombre']?>"></td>
            <td><span class="enlazado"><?=$aux10?></span><span><?=$aux11?> <?=$_SESSION['usr']['provinciaEnv']?>, <?=$_SESSION['usr']['paisEnvN']?></span></td>
            <td>
                    <form method="post" action="#">
                            <input type="text" class="miniF" name="desertor" value="1" readonly />
                    </form>
            </td>
            <td colspan="3"><small>No hemos podido calcular los portes usando su dirección de entrega. Modifíquela o pongase en contacto con nosotros.</small></td>
        </tr>
    <?php }else if($portes2 == -3){ ?>
        <tr>
            <td></td>
            <td style="position: relative;"><img src="<?=$draizp?>/<?=$logoPortes != "" && $logoPortes != "." ? ($Empresa['tipoportes'] == 0 ? 'logos/' : 'logoskm/').$logoPortes : 'imagenesproductos/portes.png'?>" alt="<?=$micesta['nombre']?>"></td>
            <td><span class="enlazado"><?=$aux10?></span><span><?=$aux11?> <?=$_SESSION['usr']['provinciaEnv']?>, <?=$_SESSION['usr']['paisEnvN']?></span></td>
            <td>
                    <form method="post" action="#">
                            <input type="text" class="miniF" name="desertor" value="1" readonly />
                    </form>
            </td>
            <td colspan="3"><small>Por problemas técnicos no podemos calcular en estos momentos el importe de los gastos de envío. Pongase en contacto con nosotros para poder indicarles los gastos de envío.</small></td>
        </tr>
    <?php }else if($portes2 == -4){ ?>
        <tr>
            <td></td>
            <td style="position: relative;"><img src="<?=$draizp?>/<?=$logoPortes != "" && $logoPortes != "." ? ($Empresa['tipoportes'] == 0 ? 'logos/' : 'logoskm/').$logoPortes : 'imagenesproductos/portes.png'?>" alt="<?=$micesta['nombre']?>"></td>
            <td><span class="enlazado"><?=$aux10?></span><span><?=$aux11?> <?=$_SESSION['usr']['provinciaEnv']?>, <?=$_SESSION['usr']['paisEnvN']?></span></td>
            <td>
                    <form method="post" action="#">
                            <input type="text" class="miniF" name="desertor" value="1" readonly />
                    </form>
            </td>
            <td colspan="3"><small>Actualmente no realizamos entrega en la provincia de <?=$_SESSION['usr']['provinciaEnv']?></small></td>
        </tr>
    <?php }
} ?>