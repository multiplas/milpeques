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
                     <div class="row-fluid">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Listado de Productos</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<?php if (count($listados) > 0) { ?>
                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" id="example">
                                            <thead>
                                                <tr role="row">
													<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="text-align: center;">#</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Distribuidor</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Producto</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Precio</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">IVA</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Des.</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">PVP</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Estado</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Destacado</th>
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
															<td valign="top" class=""  style="text-align: center;"><?=$listado['id']?></td>
															<td valign="top" class="" ><?=$listado['distribuidor']?><br><b style="font-size: 0.8rem;"><em><?=$listado['razonsocial']?></em></b></td>
															<td valign="top" class="" ><?=$listado['nombre']?></td>
															<td valign="top" class=""  style="text-align: right;"><?=number_format($listado['precio'], 2, ',', '.')?> €</td>
															<td valign="top" class=""  style="color: #D00; text-align: right;"><?=$listado['iva']?> %</td>
															<td valign="top" class=""  style="color: green; text-align: right;"><?=$listado['descuento'] > 0 ? $listado['descuento'].' %' : ($listado['descuentoe'] > 0 ? number_format($listado['descuentoe'], 2, ',', '.').' €' : 'N/A')?></td>
															<td valign="top" class=""  style="color: #06F; text-align: right;"><?=number_format(($listado['precio'] - ($listado['descuento'] > 0 ? ($listado['precio'] * ($listado['descuento'] / 100)) : ($listado['descuentoe'] > 0 ? $listado['descuentoe'] : 0))) * ($listado['iva'] / 100 + 1), 2, ',', '.')?> €</td>
                                                            <td valign="top" class="" ><?=$listado['disponible'] ? 'activo' :  'oculto'?></td>
                                                            <td valign="top" class="" ><?=$listado['destacado'] ? 'si' :  'no'?></td>
															<td valign="top" class=""  style="text-align: center;">
																<a href="?estadopr=<?=$listado['id']?>"><?=$listado['disponible'] ? '<i style="color: green;" class="fa fa-eye fa-lg"></i>' :  '<i style="color: #999;" class="fa fa-eye-slash fa-lg"></i>'?></a>
																<a href="?destacadopr=<?=$listado['id']?>"><?=$listado['destacado'] ? '<i style="color: green;" class="fa fa-check fa-lg"></i>' :  '<i style="color: #C00;" class="fa fa-times fa-lg"></i>'?></a>
															</td>
														</tr>
														<?php
													}
												?>
                                            </tbody>
                                        </table>
									<?php } else { ?>
										<p>No hay productos!</p>
									<?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
				<?php require_once('blocks/pie.php'); ?>