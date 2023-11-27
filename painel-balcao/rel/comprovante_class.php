<?php 

require_once __DIR__ .  '/../../vendor/autoload.php';
use Dompdf\Dompdf;

$id = $_GET['id'];

//ALIMENTAR OS DADOS NO RELATÓRIO
$path = "http://localhost/delivery/painel-balcao/rel/comprovante.php?id=".$id;

$html = (file_get_contents($path));

// var_dump($html);

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream(
'comprovante.pdf',
array("Attachment" => false)
);



