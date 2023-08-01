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
            $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
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
    $pdf->Cell(0,10,utf8_decode('Desginación de Mediador Nro. '),0,'L', 1);
    //Fecha
    //Salto de Linea
    $pdf->Ln(5);
    $pdf->Cell(10);
    $pdf->SetFont('Arial','',11);
    setlocale(LC_TIME, "spanish");
    $pdf->Cell(0,10,'Quito DM, '.strftime("%A %d de %B de %Y"),0,'L', 1);
    //Dirigido
    $pdf->Ln(7);
    $pdf->Cell(10);
    $pdf->Cell(0,10,utf8_decode('Señor/a Doctor/a'),0,'', 1);
    $pdf->Ln(4.5);
    $pdf->Cell(10);
    $pdf->Cell(0,10,'NOMBRE Y APELLIDOS',0,'', 1);
    $pdf->Ln(4.5);
    $pdf->Cell(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,10,utf8_decode('MEDIADOR /A DEL CENTRO DE MEDIACIÓN DE LA DEFENSORÍA PÚBLICA '),0,'', 1);
    $pdf->Ln(4.5);
    $pdf->Cell(10);
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(0,10,'Presente',0,'L', 1);
    $pdf->Ln(1);
    $pdf->Cell(10);
    $pdf->Cell(0,10,utf8_decode('Señor Mediadior:'),0,'L', 1);
    $pdf->Ln(1);
    $pdf->Cell(10);
    $pdf->MultiCell(172,5,utf8_decode('El Centro de Mediación de la Defensoría Pública, Registrado en el Consejo Nacional de la Judicatura con el No. 15, tiene a bien invitarle a participar como facilitador en el proceso de mediación No. XXXX, detallado a continuación:'));
    //Partes
    $pdf->Cell(10);
    $pdf->Cell(0,10,"Partes:",0);
    $pdf->Ln(7);
    $pdf->Cell(10);
    $pdf->Cell(171,5,"Nombres y Apellidos: ",1,'L');
    $pdf->Cell(171,5,"Abogado: ",1,'L');
    $pdf->Cell(171,5,"Nombres y Apellidos: ",1,'L');
    $pdf->Cell(171,5,"Abogado: ",1,'L');
    //Materia de Controversia
    $pdf->Cell(0,10,"Materia de Controversia:",0);
    $pdf->Ln(7);
    $pdf->Cell(10);
    $pdf->Cell(171,5,"",1,'L');
    $pdf->Cell(171,5,"",1,'L');
    $pdf->Cell(171,5,"",1,'L');
    $pdf->Cell(171,5,"",1,'L');
    //Primera Audiencia
    $pdf->Cell(0,10,"Primera Audiencia:",0);
    $pdf->Ln(7);
    $pdf->Cell(10);
    $pdf->Cell(85.5,5,"Fecha: ",1);
    $pdf->Cell(85.5,5,"Hora: ",1,'L');
    $pdf->Ln(0);
    $pdf->Cell(10);
    $pdf->Cell(171,5,"Sala de Audiencia No.",1,'L');
    $pdf->Cell(171,5,"",1,'L');
    //Parrafo Final
    $pdf->Ln(3);
    $pdf->Cell(10);
    $pdf->MultiCell(172,5,utf8_decode('Por lo expuesto solicito de usted, muy comedidamente confirmar su aceptación de participación en dicho proceso.'));
    $pdf->Ln(3);
    $pdf->Cell(10);
    $pdf->Cell(0,10,'Atentamente,');
    $pdf->Ln(15);
    $pdf->Cell(62);
    $pdf->Cell(0,10,'.........................................................',0,'');
    $pdf->Ln(4.5);
    $pdf->Cell(63);
    $pdf->Cell(0,10,utf8_decode('Director/a del Centro de Mediación'),0,'L');
    $pdf->Ln(0);
    $pdf->Cell(10);
    $pdf->MultiCell(172,5,utf8_decode('______________________________________________________________________________'),0,'L');
    $pdf->Cell(10);
    $pdf->SetFont('Arial','B',11);
    $pdf->SetTextColor(0,26,248);
    $pdf->Cell(0,10,utf8_decode('ACEPTACIÓN'),0,'');
    $pdf->Ln(4.5);
    $pdf->Cell(10);
    $pdf->SetFont('Arial','',11);
    $pdf->SetTextColor(0,0,0);
    date_default_timezone_set('America/Guayaquil');
    $pdf->Cell(0,10,'Fecha y Hora: '.date('d-m-Y h:i:s'),0);
    $pdf->Ln(23);
    $pdf->Cell(73);
    $pdf->Cell(0,5,'.....................................');
    $pdf->Ln(4.5);
    $pdf->Cell(83,0,'');
    $pdf->Cell(0,5,'MEDIADOR');
    $pdf->Output();
?>