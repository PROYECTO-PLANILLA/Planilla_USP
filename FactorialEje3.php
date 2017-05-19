<?php



$factorial= $_POST['num'];

echo "<hr>".$factorial;
$svar=1;
for($matte=2;$matte<=$factorial;$matte++){
$svar=$svar * $matte;
 
}

echo " = ".$svar;
?>


