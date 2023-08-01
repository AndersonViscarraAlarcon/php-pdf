<?php

    require('fpdf186/fpdf.php');
    //Herencia de la clase FPDF
    class PDF extends FPDF{
        //Creo la Cabecera
        function Header(){
            //Logo (Directorio-X-Y-)
            $this->Image('img/header.png',0,5,205);
            //Fuente
            $this->SetFont('Arial','B',15);
            //Nos Movemos a la derecha0
            $this->Ln(20);
        }
        //Creo el Pie de Pagina
        function Footer(){
            //Logo (Directorio-X-Y-)
            $this->Image('img/footer.png',0,286,210);
            //Posicion
            $this->SetY(-20);
            //Letra
            $this->SetFont('Arial','I',8);
            //Numero de Pagina
            $this->Cell(0,10,'Página '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }
    //Cuerpo
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    //Agregamos espaciado
    $pdf->Cell(10);
    //Declaramos Letra, estilo y tamanio
    $pdf->SetFont('Arial','B',14);
    //Establecemos el Contenido
    $pdf->Cell(0,10,'Desginacion de Mediador Nro. ',0,'L', 1);
    //Fecha
    //Salto de Linea
    $pdf->Ln(5);
    $pdf->Cell(10);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,'Quito DM, de .......... de 2023',0,'L', 1);
    //Dirigido
    $pdf->Ln(7);
    $pdf->Cell(10);
    $pdf->Cell(0,10,'Senor/a Doctor/a',0,'L', 1);
    $pdf->Cell(0,10,'NOMBRE Y APELLIDOS',0,'L', 1);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,10,'MEDIADOR /A DEL CENTRO DE MEDIACION DE LA DEFENSORIA PUBLICA ',0,'L', 1);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,'Presente',0,'L', 1);
    $pdf->Ln(1);
    $pdf->Cell(10);
    $pdf->Cell(0,10,'Senor Mediadior:',0,'L', 1);
    $pdf->Ln(1);
    $pdf->Cell(10);
    $pdf->MultiCell(172,5,'El Centro de Mediación de la Defensoría Pública, Registrado en el Consejo Nacional de la Judicatura con el No. 15, tiene a bien invitarle a participar como facilitador en el proceso de mediación No. ……, detallado a continuación:');
    $pdf->Output();
?>