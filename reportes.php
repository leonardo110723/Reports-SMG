<?php
require_once 'vendor/autoload.php';
require_once 'plantilla/plantillaReportes.php';

$css=file_get_contents('styles.css');

$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
	'fontDir' => array_merge($fontDirs, [__DIR__]),
	'fontdata' => $fontData + 
		[
			'clashdisplay' => [
				'R' => 'assets/clash-display.ttf',
            ],
			'clashdisplay-ligth' => [
				'R' => 'assets/clash-display-ligth.ttf',
            ],
			'clashdisplay-medio' => [
				'R' => 'assets/clash-display-medio.ttf',
            ],
			'clashdisplay-bold' => [
				'R' => 'assets/clash-display-bold.ttf',
            ]
		],
    'setAutoTopMargin' => 'stretch'
]);

$plantilla = getPlantilla();

$mpdf->WriteHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($plantilla,\Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output('ReportePDF.pdf', 'I');