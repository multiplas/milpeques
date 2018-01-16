﻿                <?php require_once('blocks/cabecera.php'); ?>
				<div class="span9" id="content">
                    <!--<div class="row-fluid">
                        <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Success</h4>
                        	The operation completed successfully
						</div>
					</div>-->
                    <!--<div class="row-fluid">
                        <!-- block 
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Statistics</div>
                                <div class="pull-right"><span class="badge badge-warning">View More</span>

                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span3">
                                    <div class="chart" data-percent="73">73%</div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Visitors</span>

                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="chart" data-percent="53">53%</div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Page Views</span>

                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="chart" data-percent="83">83%</div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Users</span>

                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="chart" data-percent="13">13%</div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Orders</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /block 
                    </div>-->
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Usuarios</div>
                                    <div class="pull-right">

                                    </div>
                                </div>
                                <div class="block-content collapse in">
									<?php if (count($usuarios) > 0) { ?>
										<table class="table table-striped">
											<thead>
												<tr>
													<th>#</th>
													<th>Nombre</th>
													<th>Rol</th>
												</tr>
											</thead>
											<tbody>
												<?php
													foreach ($usuarios AS $usuario)
													{
														?>
														<tr>
															<td><?=$usuario['id']?></td>
															<td><?=$usuario['nombre']?></td>
															<td><?=$usuario['rol_user']?></td>
														</tr>
														<?php
													}
												?>
											</tbody>
										</table>
									<?php } else { ?>
										<p style="text-align:center;">No hay usuarios registrados!</p>
									<?php } ?>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Páginas</div>
                                    <div class="pull-right">

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <?php if (count($paginas) > 0) { ?>
										<table class="table table-striped">
											<thead>
												<tr>
													<th>#</th>
													<th>Título</th>
													<th>Fecha</th>
												</tr>
											</thead>
											<tbody>
												<?php
													foreach ($paginas AS $pagina)
													{
														?>
														<tr>
															<td><?=$pagina['id']?></td>
															<td><?=$pagina['titulo']?></td>
															<td><?=date_format(date_create($pagina['fecha']), 'd-m-Y H:i')?></td>
														</tr>
														<?php
													}
												?>
											</tbody>
										</table>
									<?php } else { ?>
										<p style="text-align:center;">No hay páginas!</p>
									<?php } ?>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left"><a href="carrito.php">Carrito</a></div>
                                    <div class="pull-right">

                                    </div>
                                </div>
                                <div class="block-content collapse in">
									<?php if (count($carritos) > 0) { ?>
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Usuario</th>
													<th>Producto</th>
													<th>Fecha</th>
												</tr>
											</thead>
											<tbody>
												<?php
													foreach ($carritos AS $carrito)
													{
                                                        $date = date('d/m/Y', strtotime($carrito['fechaC']));
														?>
														<tr>
															<td><?=$carrito['nombreU']?></td>
															<td><?=$carrito['nombreP']?></td>
															<td><?=$date?></td>
														</tr>
														<?php
													}
												?>
											</tbody>
										</table>
									<?php } else { ?>
										<p style="text-align:center;">No hay productos en el carrito!</p>
									<?php } ?>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Pedidos pendientes</div>
                                    <div class="pull-right">

                                    </div>
                                </div>
                                <div class="block-content collapse in">
									<?php if (count($facturas) > 0) { ?>
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Usuario</th>
													<th>Estado</th>
													<th>Fecha</th>
												</tr>
											</thead>
											<tbody>
												<?php
													foreach ($facturas AS $factura)
													{
                                                        $date = date('d/m/Y', strtotime($carrito['fechaC']));
														?>
														<tr>
															<td><?=$factura['nombre']?></td>
															<td><?=$factura['estado']?></td>
															<td><?=date_format(date_create($factura['fecha']), 'd/m/Y')?></td>
														</tr>
														<?php
													}
												?>
											</tbody>
										</table>
									<?php } else { ?>
										<p style="text-align:center;">No hay facturas recientes</p>
									<?php } ?>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>
                    <div class="row-fluid">
                        <!-- block 
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Imágenes de la web</div>
                                <div class="pull-right"><span class="badge badge-info">4</span>

                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="row-fluid padd-bottom">
                                  <div class="span3">
                                      <a href="../imagenes/<?=$System->Empresa('logotop')?>" target="_blank" class="thumbnail">
                                        <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="../imagenes/<?=$System->Empresa('logotop')?>">
                                      </a>
                                  </div>
                                  <div class="span3">
                                      <a href="../imagenes/<?=$System->Empresa('logobottom')?>" target="_blank" class="thumbnail">
                                        <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="../imagenes/<?=$System->Empresa('logobottom')?>">
                                      </a>
                                  </div>
                                  <div class="span3">
                                      <a href="../source/<?=$System->Empresa('bgtop')?>" target="_blank" class="thumbnail">
                                        <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="../source/<?=$System->Empresa('bgtop')?>">
                                      </a>
                                  </div>
                                  <div class="span3">
                                      <a href="../source/<?=$System->Empresa('bgbottom')?>" target="_blank" class="thumbnail">
                                        <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="../source/<?=$System->Empresa('bgbottom')?>">
                                      </a>
                                  </div>
                                </div>
                                <!--<div class="row-fluid padd-bottom">
                                </div>
                            </div>
                        </div>-->
                        <!-- /block -->
                    </div>
                </div>
				<?php require_once('blocks/pie.php'); ?>