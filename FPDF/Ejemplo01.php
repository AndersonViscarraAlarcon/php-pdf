<?php
    //Requerimos la libreria
    require('fpdf186/fpdf.php');
    //Genero un Objeto de la Clase FPDF
    $pdf = new FPDF();
    //Agrega una nueva pagina
    $pdf->AddPage();
    //Determina la Fuente, el Estilo y el Tamanio
    $pdf->SetFont('Arial', 'B', 16);
    //Inserta Celda con ancho, alto, contenido y borde
    $pdf->Cell(50, 10, 'STL Technologics', 1);
    //Agrega una nueva pagina
    $pdf->AddPage();
    //Determina la Fuente, el Estilo y el Tamanio
    $pdf->SetFont('Arial', 'B', 16);
    //Inserta Celda con ancho, alto, contenido y borde
    $pdf->Cell(50, 10, 'STL Technologics', 1);
    //Emite la salida del documento y llama a close
    $pdf->Output();
?>