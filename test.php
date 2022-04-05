<?php 
include 'N2TEXT.php';

$number = 158.86 ;

echo $number."<br><br>";

$z=$number-0.51;
$number2 = number_format($z, 0, '.', '');

$testo = $number-$number2;
$final = number_format($testo, 2, '.', '');
$a = new ConvertNumberToText();
 $ayman = $final*100;
 if ($ayman<10) {
 echo  $a->Convert($number2)." virgule zero ". $a->Convert($ayman);	
 }

else {echo  $a->Convert($number2)." virgule ". $a->Convert($ayman);
}
 ?>
