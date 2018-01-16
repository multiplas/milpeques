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
						<div id="add" class="block" style="height: 0px; visibility: hidden;">
							<div class="navbar navbar-inner block-header">
								<div class="muted pull-left">Crear un Distribuidor</div>
							</div>
							<div class="block-content collapse in">
								<div class="span12">
									<form action="distribuidores.php?accion=subirdis" method="post" class="form-horizontal">
									  <fieldset>
										<legend>Crear Distribuidor</legend>
                                        <div class="control-group">
										  <label class="control-label" for="nrs">Razón Social </label>
										  <div class="controls">
											<input type="text" class="span6" id="nrs" name="rs" placeholder="Nombre del usuario" required>
											<span style="color: red; font-size: 0.70rem;">Requerido</span>
										  </div>
										</div>
										<div class="control-group">
										  <label class="control-label" for="nnombre">Nombre </label>
										  <div class="controls">
											<input type="text" class="span6" id="nnombre" name="nombre" placeholder="Nombre del usuario" required>
											<span style="color: red; font-size: 0.70rem;">Requerido</span>
										  </div>
										</div>
										<div class="control-group">
										  <label class="control-label" for="napellidos">Apellidos </label>
										  <div class="controls">
											<input type="text" class="span6" id="napellidos" name="apellidos" placeholder="Apellidos del usuario" required>
											<span style="color: red; font-size: 0.70rem;">Requerido</span>
										  </div>
										</div>
                                        <div class="control-group">
                                          <label class="control-label" for="nnif">NIF/NIE </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="nnif" name="nif" placeholder="NIF/NIE del usuario" required>
                                            <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="ntelefono">Teléfono </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="ntelefono" name="telefono" placeholder="Teléfono del usuario" required>
                                            <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                          </div>
                                        </div>
										<div class="control-group">
										  <label class="control-label" for="nemail">Email </label>
										  <div class="controls">
											<input type="text" class="span6" id="nemail" name="email" placeholder="Email del usuario" required>
											<span style="color: red; font-size: 0.70rem;">Requerido</span>
										  </div>
										</div>
                                        <div class="control-group">
                                          <label class="control-label" for="calle">Dirección</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="ncalle" name="calle" placeholder="Dirección" required>
                                            <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                          </div>
                                        </div>
										<div class="control-group">
										  <label class="control-label" for="Provincia2">Provincia/Estado</label>
										  <div class="controls">
											<select id="Provincia2" name="provincia" class="chzn-select span4" required>
												<option value="">Selecciona</option>
												<?php
													foreach ($listadosalt AS $listado)
													{
														?>
															<option value="<?=$listado['ID']?>"><?=$listado['Name']?></option>
														<?php
													}
												?>
											</select>
										  </div>
										</div>
										<div class="control-group">
										  <label class="control-label" for="npoblacion">Población </label>
										  <div class="controls">
											<input type="text" class="span6" id="npoblacion" name="poblacion" placeholder="Población del usuario" required>
											<span style="color: red; font-size: 0.70rem;">Requerido</span>
										  </div>
										</div>
                                        <div class="control-group">
                                          <label class="control-label" for="ncp">Código Postal </label>
                                          <div class="controls">
                                            <input type="text" class="span2" id="ncp" name="cp" placeholder="Código Postal" required>
                                            <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="paypal">Paypal </label>
                                          <div class="controls">
                                            <input type="text" class="span2" id="paypal" name="paypal" placeholder="Paypal" required>
                                            <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                          </div>
                                        </div>
										<div class="control-group">
										  <label class="control-label" for="npassword">Contraseña </label>
										  <div class="controls">
											<input type="password" class="span6" id="npasswordc" name="password" placeholder="Contraseña del usuario" required>
											<input type="password" class="span6" id="nrpasswordc" name="rpassword" placeholder="Repite contraseña del usuario" required>
											<span style="color: red; font-size: 0.70rem;">Requerido</span><br>
												<span style="color: #09F; font-size: 0.70rem;">Ambos campos deben coincidir exactamente!</span>
										  </div>
										</div>
										<button type="submit" class="btn btn-primary" onclick="return (if ($('#passwordc').val() != $('#rpasswordc').val()) { false; } else { true; });">Crear</button>
										<button type="button" onclick="location.href = 'distribuidores.php';" class="btn">Cancelar</button>
									  </fieldset>
									</form>
								</div>
							</div>
						</div>
                    </div>
						<?php if (@$elemento != null && $resultaop != 1) { ?>
                     <div class="row-fluid">
							<div id="edi" class="block">
								<div class="navbar navbar-inner block-header">
									<div class="muted pull-left">Editar un Distribuidor</div>
								</div>
								<div class="block-content collapse in">
									<div class="span12">
										<form action="distribuidores.php?editardist=<?=$elemento['id']?>" method="post" class="form-horizontal">
										  <fieldset>
											<legend>Editar <?=$elemento['nombre']?></legend>
                                            <div class="control-group">
                                              <label class="control-label" for="nrs">Razón Social </label>
                                              <div class="controls">
                                                <input type="text" class="span6" id="nrs" name="rs" placeholder="Nombre del usuario" value="<?=$elemento['razonsocial']?>" required>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                              </div>
                                            </div>
											<div class="control-group">
											  <label class="control-label" for="nombre">Nombre </label>
											  <div class="controls">
												<input type="text" class="span6" id="nombre" name="nombre" placeholder="Nombre del usuario" value="<?=$elemento['nombre']?>" required>
												<span style="color: red; font-size: 0.70rem;">Requerido</span>
											  </div>
											</div>
											<div class="control-group">
											  <label class="control-label" for="apellidos">Apellidos </label>
											  <div class="controls">
												<input type="text" class="span6" id="apellidos" name="apellidos" placeholder="Apellidos del usuario" value="<?=$elemento['apellidos']?>" required>
												<span style="color: red; font-size: 0.70rem;">Requerido</span>
											  </div>
											</div>
											<div class="control-group">
											  <label class="control-label" for="nif">NIF/NIE </label>
											  <div class="controls">
												<input type="text" class="span6" id="nif" name="nif" placeholder="NIF/NIE del usuario" value="<?=$elemento['dni']?>" required>
												<span style="color: red; font-size: 0.70rem;">Requerido</span>
											  </div>
											</div>
											<div class="control-group">
											  <label class="control-label" for="telefono">Teléfono </label>
											  <div class="controls">
												<input type="text" class="span6" id="telefono" name="telefono" placeholder="Teléfono del usuario" value="<?=$elemento['telefono']?>" required>
												<span style="color: red; font-size: 0.70rem;">Requerido</span>
											  </div>
											</div>
											<div class="control-group">
											  <label class="control-label" for="email">Email </label>
											  <div class="controls">
												<input type="text" class="span6" id="email" name="email" placeholder="Email del usuario" value="<?=$elemento['email']?>" required>
												<span style="color: red; font-size: 0.70rem;">Requerido</span>
											  </div>
											</div>
                                            <div class="control-group">
                                              <label class="control-label" for="direccion">Dirección</label>
                                              <div class="controls">
                                                <input type="text" class="span6" id="direccion" name="direccion" placeholder="Dirección" value="<?=$elemento['direccion']?>" required>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                              </div>
                                            </div>
											<div class="control-group">
											  <label class="control-label" for="Provincia">Provincia/Estado</label>
											  <div class="controls">
												<select id="Provincia" name="provincia" class="chzn-select span4" required>
													<option value="">Selecciona</option>
													<?php
														foreach ($listadosalt AS $listado)
														{
															?>
																<option value="<?=$listado['ID']?>"<?=($elemento['provincia'] == $listado['ID'] ? ' selected' : '')?>><?=$listado['Name']?></option>
															<?php
														}
													?>
												</select>
											  </div>
											</div>
											<div class="control-group">
											  <label class="control-label" for="poblacion">Población </label>
											  <div class="controls">
												<input type="text" class="span6" id="poblacion" name="poblacion" placeholder="Población del usuario" value="<?=$elemento['poblacion']?>" required>
												<span style="color: red; font-size: 0.70rem;">Requerido</span>
											  </div>
											</div>
                                            <div class="control-group">
                                              <label class="control-label" for="cp">Código Postal </label>
                                              <div class="controls">
                                                <input type="text" class="span2" id="cp" name="cp" placeholder="Código Postal" value="<?=$elemento['cp']?>" required>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                              </div>
                                            </div>
                                            <div class="control-group">
                                              <label class="control-label" for="paypal">Paypal </label>
                                              <div class="controls">
                                                <input type="text" class="span2" id="paypal" name="paypal" placeholder="Paypal" value="<?=$elemento['paypal']?>" required>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                              </div>
                                            </div>
											<div class="control-group">
											  <label class="control-label" for="password">Contraseña </label>
											  <div class="controls">
												<input type="password" class="span6" id="password" name="password" placeholder="Nueva contraseña del usuario">
												<input type="password" class="span6" id="rpassword" name="rpassword" placeholder="Repite nueva contraseña del usuario">
												<span style="color: green; font-size: 0.70rem;">Opcional</span><br>
												<span style="color: #09F; font-size: 0.70rem;">Rellenar solo en caso de querer modificar contraseña!</span>
											  </div>
											</div>
											<input type="hidden" class="span6" name="idm" value="<?=$elemento['id']?>">
											<button type="submit" class="btn btn-primary">Modificar</button>
											<button type="button" onclick="location.href = 'distribuidores.php';" class="btn">Cancelar</button>
										  </fieldset>
										</form>
									</div>
								</div>
							</div>
                        </div>
						<?php } ?>
                        <!-- block -->
                    
                        <script>
                            $(document).ready(function () {
                                var data_id = '';
                                var data_name = '';
                                
                                $('.open-Modal').click(function () {
                                    
                                    //alert('error 00');
                                    if (typeof $(this).data('id') !== 'undefined') {
                                        data_id = $(this).data('id');
                                        data_name = $(this).data('name');
                                        //alert('valor: ' + $(this).data('id'));
                                    }
                                    //$('#id-elemento').text(data_id);
                                    $('#elemento').text(data_name);
                                })
                                
                                $('#btn-eliminar').click(function () {
                                    var url = "?eliminardist=" + data_id;
                                    location.href = url;
                                })
                                
                            });
                        </script>
                    
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">ELIMINAR DISTRIBUIDOR</h4>
                              </div>
                              <div class="modal-body">
                                ¿Esta seguro de que desea eliminar el distribuidor "<strong><span id="elemento"></span></strong>"?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button id="btn-eliminar" type="button" class="btn btn-danger">Eliminar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- -->
                    
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Listado de Distribuidores</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="#subirco" onclick="javascript: $('#add').css('height', 'auto'); $('#add').css('visibility', 'visible');"><button class="btn btn-success">Distribuidor Nuevo <i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                   </div>
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
													<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="text-align: center;">#</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Razon Social</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nombre</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Apellidos</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Email</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Estado</th>
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
															<td valign="top" class="" style="text-align: center;"><?=$listado['id']?></td>
															<td valign="top" class=""><?=$listado['razonsocial']?></td>
															<td valign="top" class=""><?=$listado['nombre']?></td>
															<td valign="top" class=""><?=$listado['apellidos']?></td>
															<td valign="top" class=""><?=$listado['email']?></td>
															<td valign="top" class=""><?=$listado['estado'] == 'A' ? 'activo' : ($listado['estado'] == 'S' ? 'suspendido/bloqueado' : ($listado['estado'] == 'R' ? 'registrado' : '- error -'))?></td>
															<td valign="top" class="" style="text-align: center;">
																<a href="?estadodist=<?=$listado['id']?>"><?=$listado['estado'] == 'A' ? '<i style="color: green;" class="fa fa-check fa-lg"></i>' : ($listado['estado'] == 'R' ? '<i style="color: blue;" class="fa fa-registered fa-lg"></i>' : '<i style="color: #C00;" class="fa fa-times fa-lg"></i>')?></a>
																<a href="?editardist=<?=$listado['id']?>"><i class="fa fa-pencil fa-lg"></i></a>
                                                                <a class="open-Modal" href="#" data-name="<?=$listado['razonsocial']?>" data-id="<?=$listado['id']?>" data-toggle="modal" data-target="#myModal" /><i style="color: red;" class="fa fa-trash-o fa-lg"></i></a>
																<!--<a href="?eliminardist=<?=$listado['id']?>" onclick="return confirm('Desea eliminar el distribuidor \'\'#<?=$listado['id']?> - <?=$listado['razonsocial']?> (<?=$listado['nombre']?> <?=$listado['apellidos']?>)\'\' de la web?');"><i style="color: #C00;" class="fa fa-trash-o fa-lg"></i></a>-->
															</td>
														</tr>
														<?php
													}
												?>
                                            </tbody>
                                        </table>
									<?php } else { ?>
										<p>No hay usuarios!</p>
									<?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
				<?php require_once('blocks/pie.php'); ?>