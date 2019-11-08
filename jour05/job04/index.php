<?php
function calcul($a,$operation,$b)
{
	if ($operation == "+") {
		$result = $a + $b ;
	}
    if ($operation == "-") {
		$result = $a - $b ;
	}
	if ($operation == "*") {
		$result = $a * $b ;
	}
	if ($operation == "/") {
		$result = $a / $b ;
	}
	if ($operation == "%") {
		$result = $a % $b ;
	}
  return($result);
}
$resultat =  calcul(10,"+",5);
echo $resultat;
?>