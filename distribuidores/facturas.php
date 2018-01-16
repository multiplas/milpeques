				<?php require_once('blocks/cabecera.php'); ?>
                <div class="span9" id="content">
					<?php if ($resultaop) { ?>
						<div class="row-fluid">
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<h4>Correcto</h4>
								La operación se ha realizado correctamente.
							</div>
						</div>
					<?php } ?>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Listado de Facturas</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <div id="example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                        <div class="row" style="display: none;">
                                            <div class="span6">
                                                <div id="example_length" class="dataTables_length">
                                                    <label>
                                                    <select size="1" name="example_length" aria-controls="example">
                                                    <option value="10" selected="selected">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                    </select>
                                                    records per page</label>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <div class="dataTables_filter" id="example_filter">
                                                    <label>Search: <input type="text" aria-controls="example"></label>
                                                </div>
                                            </div>
                                        </div>
									<?php if (count($listados) > 0) { ?>
                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" id="example">
                                            <thead>
                                                <tr role="row">
													<th class="sorting_asc" role="columnheader" tabindex="0" colspan="2" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="text-align: center;">#</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Cliente</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">NIF</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Dirección</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Total</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Fecha</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Forma</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="text-align: center;">Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody role="alert" aria-live="polite" aria-relevant="all">
												<?php
													foreach ($listados AS $listado)
													{
                                                        if (@$lineapi != 'odd')
                                                            $lineapi = 'odd';
                                                        else
                                                            $lineapi = 'even';
														?>
														<tr class="<?=$lineapi?>">
															<td valign="top" class=""  style="text-align: center;"><i style="color: #<?=@($listado['estado'] == 1 ? 'EF6A21' : ($listado['estado'] == 2 ? 'A159CF' : ($listado['estado'] == 3 ? '7759CF' : ($listado['estado'] == 4 ? '09F' : ($listado['estado'] == 5 ? '93BF63' : ($listado['estado'] == 6 ? '999' : ($listado['estado'] == 7 ? 'C00' : 'E9B93F')))))))?>;" class="fa fa-circle fa-lg" title="<?=@($listado['estado'] == 1 ? 'Pendiente' : ($listado['estado'] == 2 ? 'Procesando' : ($listado['estado'] == 3 ? 'Procesado' : ($listado['estado'] == 4 ? 'Enviado' : ($listado['estado'] == 5 ? 'Entregado' : ($listado['estado'] == 6 ? 'Pendiente de Stock' : ($listado['estado'] == 7 ? 'Cancelado' : 'Error')))))))?>"></i></td>
															<td valign="top" class=""  style="text-align: center;"><?=$listado['numero']?></td>
															<td valign="top" class="" ><?=$listado['apellidos']?>, <?=$listado['nombre']?></td>
															<td valign="top" class="" ><?=$listado['nif']?></td>
															<td valign="top" class="" ><?php if ($listado['direccion'] != '') { ?><?=$listado['direccion']?><br><?=$listado['localidad']?>, <?=$listado['provincia']?><br><?=$listado['pais']?>, <?=$listado['cp']?><?php } else { ?>Recogida en tienda<?php } ?></td>
															<td valign="top" class=""  style="text-align: right;"><?=number_format($listado['total'], 2, ',', '.')?> €</td>
															<td valign="top" class="" ><?=date_format(date_create($listado['fecha']), 'd/m/Y H:i:s')?></td>
															<td valign="top" class="" ><?=ucwords($listado['formapago'])?></td>
															<td valign="top" class=""  style="text-align: center; width: 100px;">
																<a href="detalle.php?id=<?=$listado['id']?>"><i class="fa fa-eye fa-lg"></i></a>
                                                                <a href="generarPDF.php?telf_adm=<?=$listado['telefono']?>&amp;fact_adm=<?=$listado['sesion']?>&amp;fact_adm_uid=<?=$listado['id']?>"><i class="fa fa-print fa-lg"></i></a>
                                                                <p><br></p><form action="#" method="get" style="margin: 0px; margin-top: -25px; position: fixed; width: 100px;">
                                                                    <select id="estadof" name="estadof" class="chzn-select span4" required style="width: 100px;" onchange="javascript: $(this).parent().submit();">
                                                                        <option value="1"<?=$listado['estado'] == 1 ? ' selected' : ''?>>Pendiente</option>
                                                                        <option value="2"<?=$listado['estado'] == 2 ? ' selected' : ''?>>Procesando</option>
                                                                        <option value="3"<?=$listado['estado'] == 3 ? ' selected' : ''?>>Procesado</option>
                                                                        <option value="4"<?=$listado['estado'] == 4 ? ' selected' : ''?>>Enviado</option>
                                                                        <option value="5"<?=$listado['estado'] == 5 ? ' selected' : ''?>>Entregado</option>
                                                                        <option value="6"<?=$listado['estado'] == 6 ? ' selected' : ''?>>Stock</option>
                                                                        <option value="7"<?=$listado['estado'] == 7 ? ' selected' : ''?>>Cancelado</option>
                                                                    </select>
                                                                    <input type="hidden" name="estadofact" value="<?=$listado['id']?>">
                                                                </form>
																<!--&#124;
																<a href="?eliminarfact=<?=$listado['id']?>" onclick="return confirm('Desea eliminar la factura \'\'#<?=$listado['numero']?> con fecha de <?=date_format(date_create($listado['fecha']), 'd/m/Y H:i:s')?>\'\' de la web?');">eliminar</a>-->
                                                            </td>
														</tr>
														<?php
													}
												?>
                                            </tbody>
                                        </table>
									<?php } else { ?>
										<p>No hay facturas!</p>
									<?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
				<?php require_once('blocks/pie.php'); ?>