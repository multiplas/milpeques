<?php
session_start();

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor($_SESSION['factura']['empresa']);
$pdf->SetTitle('Factura '.$_SESSION['factura']['ano'].$_SESSION['factura']['id']);
$pdf->SetSubject('Emisión de Factura');
$pdf->SetKeywords('Factura, '.$_SESSION['factura']['empresa']);

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

// set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

$cambio = $_SESSION['factura']['cambio'];
$monedaWeb = $_SESSION['factura']['monedaWeb'];
$monedaUser = $_SESSION['factura']['monedaUser'];
if($_SESSION['factura']['formapago'] != 'tpv'){
    if($monedaUser == 'EUR')
        $moneda = '€';
    if($monedaUser == 'USD')
        $moneda = '$';
    if($monedaUser == 'JPY')
        $moneda = '¥';
    if($monedaUser == 'GBP')
        $moneda = '£';
    if($monedaUser == 'CHF')
        $moneda = '₣';
}else{
    if($monedaWeb == 'EUR')
        $moneda = '€';
    if($monedaWeb == 'USD')
        $moneda = '$';
    if($monedaWeb == 'JPY')
        $moneda = '¥';
    if($monedaWeb == 'GBP')
        $moneda = '£';
    if($monedaWeb == 'CHF')
        $moneda = '₣';
}

if($_SESSION['factura']['RazonSocial'] != '')
    $rsocial = '<table style="border: solid 1px #333; padding: 6px;">
	<thead>
		<tr>
			<th style="border-left: solid 1px #333;"><strong>Razón Social</strong></th>
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="border-left: solid 1px #333;">'.$_SESSION['factura']['RazonSocial'].'</td>
		</tr>
	<tbody>
</table>
<br /><br /><br />';
else
    $rsocial = '';

if($_SESSION['factura']['comentario'] != '' || $_SESSION['factura']['comentario_vend'] != '')
    $comentario = '<table style="border: solid 1px #333; padding: 6px;">
	<thead>
		<tr>
			<th style="border-left: solid 1px #333;"><strong>Comentario Cliente</strong></th>
                        <th style="border-left: solid 1px #333;"><strong>Comentario Vendedor</strong></th>
                        <th style="border-left: solid 1px #333;"><strong>Estado</strong></th>
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="border-left: solid 1px #333;">'.$_SESSION['factura']['comentario'].'</td>
                        <td style="border-left: solid 1px #333;">'.$_SESSION['factura']['comentario_vend'].'</td>
                            <td style="border-left: solid 1px #333;">'.ucwords ($_SESSION['factura']['estado']).'</td>
		</tr>
	<tbody>
</table>
<br /><br /><br />';
else
    $comentario = '';

// create some HTML content
$html = 
'<table style="border: solid 1px #333; padding: 15px;">
	<thead>
		<tr>
			<th rowspan="2"><img height="80px"; src="'.$_SESSION['factura']['logo'].'" alt="" /></th>
			<th style="border-left: solid 1px #333;"><h2>CIF</h2></th>
			<th style="border-left: solid 1px #333;"><h2>RMA</h2></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td style="border-left: solid 1px #333;">'.$_SESSION['factura']['cif'].'</td>
			<td style="border-left: solid 1px #333;">'.date("Y", strtotime($_SESSION['factura']['fecha'])).$_SESSION['factura']['id'].'</td>
		</tr>
	<tbody>
</table>
<br /><br /><br />
'.$rsocial.'
<table style="border: solid 1px #333; padding: 6px;">
	<thead>
		<tr>
			<th style="border-left: solid 1px #333;"><strong>DNI/CIF</strong></th>
			<th style="border-left: solid 1px #333;"><strong>Nombre</strong></th>
			<th style="border-left: solid 1px #333;"><strong>Dirección</strong></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="border-left: solid 1px #333;">'.$_SESSION['factura']['dni'].'</td>
			<td style="border-left: solid 1px #333;">'.$_SESSION['factura']['nombre'].'</td>
			<td style="border-left: solid 1px #333;">'.$_SESSION['factura']['direccion'].'</td>
		</tr>
	<tbody>
</table>
<br /><br /><br />
'.$comentario.'
<table style="border: solid 1px #333; padding: 4px;">
	<tr>
		<td style="backgrond: #CCC; border-left: solid 1px #333; border-bottom: solid 1px #333;"><strong>Producto/Servicio</strong></td>
		<td style="backgrond: #CCC; border-left: solid 1px #333; border-bottom: solid 1px #333; text-align: right;"><strong>'.$moneda.'/Uni</strong></td>
		<td style="backgrond: #CCC; border-left: solid 1px #333; border-bottom: solid 1px #333;"><strong>Cantidad</strong></td>
		<td style="backgrond: #CCC; border-left: solid 1px #333; border-bottom: solid 1px #333; text-align: right;"><strong>Total ('.$moneda.')</strong></td>
	</tr>';
	
	$colorrw = '#DDD';
	
	foreach($_SESSION['productos'] AS $producto)
	{
		if ($colorrw == '#DDD')
			$colorrw = '#FFF';
		else
			$colorrw = '#DDD';
		
                
		$html .= 
		'<tr style="background: '.$colorrw.';">
			<td style="border-left: solid 1px #333;"><strong>'.$producto['nombre'].'</strong>'.($producto['talla']!=null ? '<br>'.$producto['talla'] : '').($producto['fechas']!=null ? '<br>'.$producto['fechas'] : '').($producto['extra']!=null ? '<br>'.$producto['extra'] : '').'</td>
			<td style="border-left: solid 1px #333; text-align: right;">'.number_format(($producto['precio']*-1),2,',','.').'€</td>
			<td style="border-left: solid 1px #333; text-align: right;">'.$producto['cantidad'].'</td>
			<td style="border-left: solid 1px #333; text-align: right;">'.number_format(($producto['precio']*$producto['cantidad']*-1),2,',','.').'€</td>
		</tr>';
	}

	
$html .= 
	'<tr>
		<td style="border-left: solid 1px #333;">PORTES (Transporte)</td>
		<td style="border-left: solid 1px #333; text-align: right;">'.number_format(($_SESSION['factura']['portes']), 2, ',', '.').'€</td>
		<td style="border-left: solid 1px #333; text-align: right;">1</td>
		<td style="border-left: solid 1px #333; text-align: right;">'.number_format(($_SESSION['factura']['portes']), 2, ',', '.').'€</td>
	</tr>
	<tr>
		<td style="border-top: solid 1px #333;"><strong></strong></td>
		<td style="border-top: solid 1px #333;"><strong></strong></td>
		<td style="border-left: solid 1px #333; border-top: solid 1px #333;"><strong>TOTAL</strong></td>
		<td style="border-top: solid 1px #333; text-align: right;">'.number_format((($_SESSION['factura']['precio']*-1)+$_SESSION['factura']['portes']), 2, ',', '.').'€</td>
	</tr>
</table>
';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

//Close and output PDF document.
$pdf->Output('Factura_'.$_SESSION['factura']['cif'].$_SESSION['factura']['ano'].$_SESSION['factura']['id'], 'I');

//============================================================+
// END OF FILE
//============================================================+