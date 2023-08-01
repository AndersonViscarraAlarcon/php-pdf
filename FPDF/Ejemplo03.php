<?php
    require('fpdf186/fpdf.php');
    class PDF extends FPDF{
        //Creo la Cabecera
        function Header(){
            $this->Image('img/236-138-max.jpg',10,10,50);
            $this->SetFont('Arial','B',10);
            $this->SetTextColor(68,113,196);
            $this->Cell(50,30,'',1);
            $this->Cell(173,15,utf8_decode('REGISTRO DE ASESORÍAS'),1,'','C');
            $this->Cell(15,7.5,utf8_decode('Código'),1);
            $this->SetFont('Arial','',10);
            $this->Cell(40,7.5,'FO-01 (M12-P04-S01)',1,'L');
            $this->Ln(0);
            $this->Cell(223);
            $this->SetFont('Arial','B',10);
            $this->Cell(15,7.5,utf8_decode('Versión'),1);
            $this->SetFont('Arial','',10);
            $this->Cell(40,7.5,'1',1,'L');
            $this->Ln(0);
            $this->Cell(50);
            $this->SetFont('Arial','B',10);
            $this->Cell(173,15,utf8_decode('GESTIÓN DE MEDIACIÓN',),1,'','C');
            $this->Cell(15,7.5,utf8_decode('Fecha'),1);
            $this->SetFont('Arial','',10);
            $this->Cell(40,7.5,date('d-m-Y'),1,'L');
            $this->Ln(0);
            $this->Cell(223);
            $this->SetFont('Arial','B',10);
            $this->Cell(15,7.5,utf8_decode('Página'),1);
            $this->SetFont('Arial','',10);
            $this->Cell(40,7.5,$this->PageNo().'/{nb}',1,'L');
            $this->Ln(0);
            $this->SetFont('Arial','B',7);
            $this->Cell(22,10,'No.',1);
            $this->Cell(28,10,'FECHA',1);
            $this->Cell(50,10,'NOMBRES DEL USUSARIO',1);
            $this->Cell(20,10,utf8_decode('CÉDULA'),1);
            $this->Cell(25,10,utf8_decode('TELÉFONO'),1);
            $this->Cell(15,10,'ETNIA',1);
            $this->Cell(25,10,'GENERO',1);
            $this->Cell(38,10,'MATERIA',1);
            $this->Cell(15,10,'TEMA',1);
            $this->Cell(40,10,'NOMBRE DE QUIEN ASESORA',1);
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
    $pdf = new PDF('L');
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->Output();
?>