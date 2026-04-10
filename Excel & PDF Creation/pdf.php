<?php

include 'db.php';
require 'vendor/autoload.php';

$result = $conn->query("select * from emp");

$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('times', 'italic', 12);
$pdf->Cell(0, 10, 'Employee Table', 0, 1, 'C');

$html = '<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
</tr>';

while($row = $result->fetch_assoc()){
    $html .= '<tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['name'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['password'].'</td>
    </tr>';
}

$html .= '</table>';

$pdf->writeHTML($html, true, false, true, false, '');

$pdf->Output('emp.pdf', 'D');
?>