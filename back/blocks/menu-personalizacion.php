<li class="dropup <?=$menusel == 'colores' ? 'active' : ''?><?=$menusel == 'plantilla' ? ' active' : ''?><?=$menusel == 'fuentes' ? ' active' : ''?><?=$menusel == 'mensaje_publicitario' ? ' active' : ''?><?=$menusel == 'cabpie' ? ' active' : ''?><?=$menusel == 'extrasPedido' ? ' active' : ''?><?=$menusel == 'iconosRedes' ? ' active' : ''?><?=$menusel == 'cesta' ? ' active' : ''?><?=$menusel == 'pagos' ? ' active' : ''?><?=$menusel == 'productos_opc' ? ' active' : ''?><?=$menusel == 'pedido' ? ' active' : ''?><?=$menusel == 'megaMenu' ? ' active' : ''?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personalización <i class="icon-chevron-up"></i></a>
                            <ul class="dropdown-menu" style="width:99%;" role="menu">
                                <li<?=$menusel == 'plantilla' ? ' class="active"' : ''?>>
                                    <a href="plantilla.php"><i class="icon-chevron-right"></i> Línea de estilo</a>
                                </li>
                                <li<?=$menusel == 'colores' ? ' class="active"' : ''?>>
                                    <a href="colores.php"><i class="icon-chevron-right"></i> Colores de la web</a>
                                </li>
                                <li<?=$menusel == 'fuentes' ? ' class="active"' : ''?>>
                                    <a href="fuentes.php"><i class="icon-chevron-right"></i> Fuentes de la web</a>
                                </li>
                                <li<?=$menusel == 'mensaje_publicitario' ? ' class="active"' : ''?>>
                                    <a href="mensaje_publicitario.php"><i class="icon-chevron-right"></i> Anuncio página principal</a>
                                </li>
                                <li<?=$menusel == 'cabpie' ? ' class="active"' : ''?>>
                                    <a href="cabpie.php"><i class="icon-chevron-right"></i> Html en cabecera y píe</a>
                                </li>
                                <li<?=$menusel == 'extrasPedido' ? ' class="active"' : ''?>>
                                    <a href="extrasPedido.php"><i class="icon-chevron-right"></i> Campos extras en Pedido</a>
                                </li>
                                <li<?=$menusel == 'iconosRedes' ? ' class="active"' : ''?>>
                                    <a href="iconosRedes.php"><i class="icon-chevron-right"></i> Iconos Redes Sociales</a>
                                </li>
                                <li<?=$menusel == 'cesta' ? ' class="active"' : ''?>>
                                    <a href="cesta.php"><i class="icon-chevron-right"></i> Cesta</a>
                                </li>
                                <li<?=$menusel == 'pedido' ? ' class="active"' : ''?>>
                                    <a href="pedido.php"><i class="icon-chevron-right"></i> Resumen Pedido</a>
                                </li>
                                <li<?=$menusel == 'pagos' ? ' class="active"' : ''?>>
                                    <a href="pagos.php"><i class="icon-chevron-right"></i> Pagos</a>
                                </li>
                                <li<?=$menusel == 'productos_opc' ? ' class="active"' : ''?>>
                                    <a href="productos_opc.php"><i class="icon-chevron-right"></i> Productos</a>
                                </li>
                                <li<?=$menusel == 'megaMenu' ? ' class="active"' : ''?>>
                                    <a href="megaMenu.php"><i class="icon-chevron-right"></i> Mega Menú</a>
                                </li>
                                <li<?=$menusel == 'buscador' ? ' class="active"' : ''?>>
                                    <a href="buscador.php"><i class="icon-chevron-right"></i> Buscador</a>
                                </li>
                            </ul>
                        </li>