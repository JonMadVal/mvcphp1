<?php

class pdfController extends Controller
{
    private $_pdf;
    public function __construct() {
        parent::__construct();
        $this->getLibrary('fpdf');
        $this->_pdf = new FPDF;
    }
    //Metodo Obligatoria
    public function index(){}
    public function pdf1($nombre="", $apellido="")
    {        
        $this->_pdf->AddPage();
        $this->_pdf->SetFont('Arial','B',16);
        $this->_pdf->Cell(40,10,'! Hola '.$nombre.' '.$apellido);
        $this->_pdf->Output();
    }
    
    public function pdf2($nombre="", $apellido="")
    {
        require_once ROOT.'public'.DS.'file'.DS.'pdf2.php';
        
    }
}
?>
