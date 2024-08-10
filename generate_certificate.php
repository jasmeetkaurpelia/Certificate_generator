<?php
require 'vendor/autoload.php';

use setasign\Fpdi\Fpdi;

// Get form data
$name = $_POST['name'];
$course = $_POST['course'];
$date = $_POST['date'];
$institution = $_POST['institution'];
$instructor = $_POST['instructor'];
$certificate_id = $_POST['certificate_id'];

// Create PDF instance with landscape orientation
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();

// Set background color (light cream)
$pdf->SetFillColor(255, 252, 240);
$pdf->Rect(0, 0, 297, 210, 'F');

// Add decorative border
$pdf->SetLineWidth(2);
$pdf->SetDrawColor(205, 170, 125); // Golden brown
$pdf->Rect(10, 10, 277, 190);
$pdf->SetLineWidth(0.5);
$pdf->SetDrawColor(139, 69, 19); // Saddle brown
$pdf->Rect(15, 15, 267, 180);

// Add logo or icon
$pdf->Image('logo.png', 20, 20, 25);

// Set Title
$pdf->SetFont('Arial', 'B', 36);
$pdf->SetTextColor(139, 69, 19); // Saddle brown
$pdf->SetXY(0, 30);
$pdf->Cell(297, 20, 'Certificate of Completion', 0, 1, 'C');

// Decorative line
$pdf->SetLineWidth(1);
$pdf->Line(60, 55, 237, 55);

// Recipient Name
$pdf->SetFont('Arial', '', 16);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(0, 70);
$pdf->Cell(297, 10, 'This is to certify that', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 28);
$pdf->SetTextColor(139, 69, 19); // Saddle brown
$pdf->SetXY(0, 85);
$pdf->Cell(297, 20, $name, 0, 1, 'C');

// Completion Message
$pdf->SetFont('Arial', '', 16);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(0, 110);
$pdf->Cell(297, 10, 'has successfully completed the course', 0, 1, 'C');

// Course Name
$pdf->SetFont('Arial', 'B', 24);
$pdf->SetTextColor(139, 69, 19); // Saddle brown
$pdf->SetXY(0, 125);
$pdf->Cell(297, 15, $course, 0, 1, 'C');

// Date
$pdf->SetFont('Arial', '', 14);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(0, 145);
$pdf->Cell(297, 10, 'Awarded on: ' . $date, 0, 1, 'C');

// Add a stamp (bottom right corner)
$pdf->Image('stamp.png', 205, 140, 45); // Increased size to 40

// Add a signature line (bottom right corner)
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(200, 175, 260, 175); // Adjusted position

// Add signature text (bottom right corner)
$pdf->SetFont('Arial', 'I', 12);
$pdf->SetXY(200, 177);
$pdf->Cell(60, 10, 'Authorized Signature', 0, 1, 'C');

// Add footer with copyright, ID, and organization name (left bottom corner)
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(100, 100, 100); // Gray color
$pdf->SetXY(20, 179); // Moved to left bottom corner
$pdf->Cell(0, 10, '© 2024 - ID: ' . $certificate_id . ' - ' . $institution, 0, 1, 'L');

// Output the PDF
$pdf->Output('I', 'certificate.pdf');
?>