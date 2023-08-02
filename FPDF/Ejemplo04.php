<?php
    require('fpdf186/fpdf.php');
    class PDF extends FPDF{
        function Header(){
            $this->Image('img/header.png',0,5,205);
            $this->SetFont('Arial','B',8);
            $this->Ln(22);
            $this->Cell(0,0,utf8_decode('CENTRO DE MEDIACIÓN DE LA DEFENSORÍA PÚBLICA,  AUTORIZADO POR EL CONSEJO DE LA JUDICATURA, REGISTRO NRO.15'),0,'','C');
            $this->Ln(10);
        }
        function Footer(){
            $this->Image('img/footer.png',0,286,210);
            $this->SetY(-20);
            $this->SetFont('Arial','I',8);
            $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
        }
    }
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','U',11);
    $pdf->Cell(0,0,utf8_decode('SOLICITUD DE MEDIACIÓN'),0,'','C');
    $pdf->Ln(12);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(0,0,utf8_decode('Lugar y Fecha'),0,'L');
    $pdf->Ln(8);
    $pdf->MultiCell(0,0,utf8_decode('SEÑOR/A, DIRECTOR/A CENTRO DE MEDIACIÓN \nDE LA DEFENSORÍA PÚBLICA'),0,'L');
    $pdf->Ln(8);
    $pdf->MultiCell(0,0,utf8_decode('OFICINA A LA QUE DIRIGE LA SOLICITUD:   MATRIZ -------   QUITUMBE -------  GUAYAQUIL --------'),0,'L');
    $pdf->Ln(8);
    $pdf->MultiCell(0,0,utf8_decode('Solicito se sirva admitir a mediación el caso que a continuación presento:'),0,'L');
    $pdf->Ln(5);
    $pdf->Cell(20,8,utf8_decode('MATERIA:'),1,'','C');
    $pdf->Cell(15,8,utf8_decode('NIÑEZ:'),1);
    $pdf->Cell(15,8,utf8_decode(''),1);
    $pdf->Cell(20,8,utf8_decode('LABORAL:'),1);
    $pdf->Cell(15,8,utf8_decode(''),1);
    $pdf->Cell(15,8,utf8_decode('CIVIL'),1);
    $pdf->Cell(15,8,utf8_decode(''),1);
    $pdf->Cell(25,8,utf8_decode('INQUILINATO'),1);
    $pdf->Cell(15,8,utf8_decode(''),1);
    $pdf->Cell(20,8,utf8_decode('TRÁNSITO'),1);
    $pdf->Cell(15,8,utf8_decode(''),1,'L');
    $pdf->Ln(0);
    $pdf->Cell(20,8,utf8_decode('TEMA:'),1);
    $pdf->Cell(170,8,utf8_decode(''),1,'L');
    $pdf->Ln(5);
    /*****************DATOS DE LA PERSONA QUE SOLICITA*******************/
    $pdf->Cell(190,8,utf8_decode('DATOS DE LA PERSONA QUE SOLICITA EL SERVICIO DE MEDIACIÓN'),1,'L','C');
    $pdf->Ln(0);
    $pdf->Cell(50,8,utf8_decode('APELLIDOS Y NOMBRES:'),1,'','C');
    $pdf->Cell(140,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',5);
    $pdf->Cell(50,8,utf8_decode('TIPO Y NÚMERO DE: CÉDULA, PASAPORTE,  OTROS:'),1,'','C');
    $pdf->Cell(50,8,utf8_decode(''),1,'','C');
    $pdf->Cell(90,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,8,utf8_decode('ESTADO CIVIL:'),1,'','C');
    $pdf->Cell(50,8,utf8_decode(''),1,'','C');
    $pdf->Cell(15,8,utf8_decode('EDAD'),1,'','C');
    $pdf->Cell(30,8,utf8_decode(''),1,'','C');
    $pdf->Cell(15,8,utf8_decode('ETNIA'),1,'','C');
    $pdf->Cell(30,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,8,utf8_decode('NÚMEROS TELEFÓNICOS:'),1,'','C');
    $pdf->Cell(140,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,8,utf8_decode('CORREO ELECTRONICO:'),1,'','C');
    $pdf->Cell(140,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,8,utf8_decode('NIVEL DE INSTRUCCIÓN:'),1,'','C');
    $pdf->Cell(140,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,8,utf8_decode('NACIONALIDAD:'),1,'','C');
    $pdf->Cell(140,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,8,utf8_decode('OCUPACION:'),1,'','C');
    $pdf->Cell(140,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,8,utf8_decode('DOMICILIO - PARROQUIA:'),1,'','C');
    $pdf->Cell(140,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(5);
    /*****************DATOS DEL INVITADO*******************/
    $pdf->Cell(190,8,utf8_decode('DATOS DEL INVITADO'),1,'L','C');
    $pdf->Ln(0);
    $pdf->Cell(50,8,utf8_decode('APELLIDOS Y NOMBRES:'),1,'','C');
    $pdf->Cell(140,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',5);
    $pdf->Cell(50,8,utf8_decode('TIPO Y NÚMERO DE: CÉDULA, PASAPORTE,  OTROS:'),1,'','C');
    $pdf->Cell(50,8,utf8_decode(''),1,'','C');
    $pdf->Cell(90,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,8,utf8_decode('ESTADO CIVIL:'),1,'','C');
    $pdf->Cell(50,8,utf8_decode(''),1,'','C');
    $pdf->Cell(15,8,utf8_decode('EDAD'),1,'','C');
    $pdf->Cell(30,8,utf8_decode(''),1,'','C');
    $pdf->Cell(15,8,utf8_decode('ETNIA'),1,'','C');
    $pdf->Cell(30,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,8,utf8_decode('NÚMEROS TELEFÓNICOS:'),1,'','C');
    $pdf->Cell(140,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,8,utf8_decode('CORREO ELECTRONICO:'),1,'','C');
    $pdf->Cell(140,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,8,utf8_decode('NIVEL DE INSTRUCCIÓN:'),1,'','C');
    $pdf->Cell(140,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,8,utf8_decode('NACIONALIDAD:'),1,'','C');
    $pdf->Cell(140,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,8,utf8_decode('OCUPACION:'),1,'','C');
    $pdf->Cell(140,8,utf8_decode(''),1,'L','C');
    $pdf->Ln(0);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,8,utf8_decode('DOMICILIO - PARROQUIA:'),1,'','C');
    $pdf->Cell(140,8,utf8_decode(''),1,'L','C');
    /*********************DESCRIPCON DEL CONFLICTO*********************/
    $pdf->Ln(0);
    $pdf->Cell(0,8,utf8_decode('BREVE DESCRIPCIÓN DEL CONFLICTO:'),0,'L');
    $conflicto = <<<EOD
    _______________________________________________________________________________________________
    _______________________________________________________________________________________________
    _______________________________________________________________________________________________
    _______________________________________________________________________________________________
    EOD;
    $pdf->MultiCell(0,8,utf8_decode($conflicto),0,'L');
    /******************************PROCESOS JUDICIALES***********************************/
    $pdf->Ln(3);
    $pdf->Cell(190,8,utf8_decode('¿Respecto al asunto que describe en la presente solicitud, existe proceso judicial?'),1,'L','C');
    $pdf->Ln(0);
    $pdf->Cell(40,8,utf8_decode('SI'),1,'','C');
    $pdf->Cell(10,8,utf8_decode(''),1,'','C');
    $pdf->Cell(40,8,utf8_decode('NO'),1,'','C');
    $pdf->Cell(10,8,utf8_decode(''),1,'','C');
    $pdf->Cell(90,8,utf8_decode(''),1,'L','C');
    $pdf->Output();
?>