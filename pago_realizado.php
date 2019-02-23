<?php

require_once 'PDF.php';
session_start();

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
if (isset($_POST['pdf'])){
    $lista = $_SESSION['cesta'];
    $total = $_SESSION['total'];
    /*
     * creamos los titulos de las columnas
     */
    $pdf->Cell(20,5,utf8_decode('Codigo'), 0, 0, 'B');
    $pdf->Cell(100,5,utf8_decode('Nombre'), 0, 0, 'C');
    $pdf->Cell(20,5,utf8_decode('Cantidad'), 0, 0, 'B');
    $pdf->Cell(15,5,utf8_decode('Precio Unitario'), 0, 0, 'B');
    $pdf->Ln(10);
    $pdf->Line(1, 35, 180, 35);
    $x=35;
    foreach ($lista as $producto) {
        //recorremos la lista y mostramos los datos de cada producto y añadimos un linea al final
        $x+=10;
        $cod = $producto['cod'];
        $nombre = $producto['nombre'];
        $cant = $producto['cantidad'];
        $precio = $producto['precio'];
        $pdf->Cell(20,5,utf8_decode($cod), 0, 0, 'C');
        $pdf->Cell(100,5,utf8_decode($nombre), 0, 0, 'C');
        $pdf->Cell(20,5,utf8_decode($cant), 0, 0, 'C');
        $pdf->Cell(15,5,utf8_decode($precio), 0, 0, 'C');
        $pdf->Ln(10);
        $pdf->Line(1, $x, 180, $x);
    }

    //mostramos los totales, sin iva, el iva y con iva
    $pdf->Cell(10,5,utf8_decode("Coste: " . $total." Euros"), 0, 0, 'L');
    $pdf->Ln(10);
    $pdf->Cell(10,5,utf8_decode("IVA: " . ($total * 0.21)." Euros"), 0, 0, 'L');
    $pdf->Ln(10);
    $pdf->Cell(10,5,utf8_decode("Total: " . ($total + ($total * 0.21))." Euros"), 0, 0, 'L');



$pdf->Output();
}


