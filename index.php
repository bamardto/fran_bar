<?php
// Incluye la librería PHP QR Code
require_once('phpqrcode/qrlib.php');

// URL del archivo PDF
$pdf_url = 'test.pdf';

// Genera el código QR que apunta al archivo PDF
QRcode::png($pdf_url);

// Mostrar el código QR en la página web
echo '<img src="qr.png" alt="Código QR">';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fran Bar</title>
</head>
<body>
    <h1>Mi sitio web</h1>
    <embed src="test.pdf" type="application/pdf" width="100%" height="600px">
</body>
</html>