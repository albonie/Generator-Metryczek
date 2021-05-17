<?php
include 'funkcja.php';

require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->shrink_tables_to_fit=0;
$mpdf->WriteHTML(pies());
$mpdf->Output();
//echo pies();
?>