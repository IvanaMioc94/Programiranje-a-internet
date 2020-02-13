<?php
//neuspjeli kod
require_once __DIR__ '/vendor/autoload.php';


$fname = $POST['fname'];
$lname = $POST['lname'];
$email = $POST['email'];
$phone = $POST['phone'];
$adresa = $POST['adresa'];

$mpdf = new \Mpdf\Mpdf();

$data = '';

$data .= '<h1>VAŠ RAČUN</h1>' ;

$data .= '<strong>Ime</strong>' . $fname .' <br />';
$data .= '<strong>Prezime</strong>' . $lname .' <br />';
$data .= '<strong>Email</strong>' . $email .' <br />';
$data .= '<strong>Telefon</strong>' . $phone .' <br />';
$data .= '<strong>Adresa</strong>' . $adresa .' <br />';


$mpdf->WriteHTML($data);

$mpdf->Output('Racun.pdf', 'D');



?>