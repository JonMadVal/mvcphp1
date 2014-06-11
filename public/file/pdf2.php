<?php

        $this->_pdf->AddPage();
        $this->_pdf->SetFont('Arial','B',16);
        $this->_pdf->Cell(40,10,'! Hola '.$nombre.' '.$apellido);
        $this->_pdf->Output();
?>
