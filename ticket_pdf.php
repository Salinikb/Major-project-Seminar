


<?php
    require_once('fpdf/fpdf.php');
    
    $name = $_GET['name'];
    $amount = $_GET['amount'];
    $adult = $_GET['adult'];
    $children = $_GET['children'];
    $infant = $_GET['infant'];
    $DepartureLocation = $_GET['DepartureLocation'];
    $Arrivallocation = $_GET['Arrivallocation'];

    $class = $_GET['class'];
    $preferedairline = $_GET['preferedairline'];
    $preferedseating = $_GET['preferedseating'];




    
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    // $pdf->Cell(40,10,'Passenger Name:');
    
    $pdf->Cell(40, 10, 'Passenger Email: ' . $name, 0, 1);
    
    $pdf->Cell(40, 10, 'DepartureLocation: ' . $DepartureLocation, 0, 1);
    $pdf->Cell(40, 10, 'Arrivallocation: ' . $Arrivallocation, 0, 1);
    $pdf->Cell(40, 10, 'Adult: ' . $adult, 0, 1);
    $pdf->Cell(40, 10, 'Children: ' . $children, 0, 1);
    $pdf->Cell(40, 10, 'infant: ' . $infant, 0, 1);
    $pdf->Cell(40, 10, 'class: ' . $class, 0, 1);

    $pdf->Cell(40, 10, 'preferedseating: ' . $preferedseating, 0, 1);
    $pdf->Cell(40, 10, 'preferedairline: ' . $preferedairline, 0, 1);

    $pdf->Cell(40, 10, 'Amount: ' . $amount, 0, 1);
    
    // Output PDF
    $pdf->Output();
?>