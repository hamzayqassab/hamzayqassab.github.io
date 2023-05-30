<?php
require('tcpdf/tcpdf.php');

$name = $_POST['name'];
$course = $_POST['course'];
$date = $_POST['date'];

$pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', true);

$pdf->SetTitle('Certificate of Completion');

$pdf->AddPage();

$pdf->SetFont('', '', 24,'dance.z');

$pdf->Image('cert.jpg',10,10,460,300);
$pdf->Image('seal1.jpg',220,140,40,30);
$pdf->Image('auto1.jpg',40,140,40,30);

$pdf->writeHTML
("
<style>
*{
  text-align: center;
  font-family:fangsong;

}
div{
top:250px;
}
span{


}

</style>
<div>
<h2> <span>Certificate of Completion</span> </h2>
<p> This certifies that </p>
<h3> $name </h3>
<p> has successfully completed the </p>
<h3> $course course</h3>
<p> on $date </p></div>
");
$pdf->Output($name.'-'.$course.'-'.'certificate.pdf', 'D');
