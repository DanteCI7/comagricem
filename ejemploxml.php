<?php
$xmlFile = './ws/VES150827JW60.xml'; // Ruta al archivo XML

$xml = simplexml_load_file($xmlFile);
$json = json_encode($xml, JSON_PRETTY_PRINT);
$json = str_replace(['\t', '\n'], ['    ', PHP_EOL], $json);

echo '<pre>' . $json . '</pre>';
?>
