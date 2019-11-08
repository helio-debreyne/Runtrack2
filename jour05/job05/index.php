<?php
function occurrences($str,$char)
{
$i=0;
$taille = strlen($str);
$ocu = 0;
while ($i < $taille)
{
    if ($str[$i] == $char) 
    {
		$ocu++;
	}
    $i++;
}
  return($ocu);
}
$resultat = occurrences("La plateforme","a");
echo $resultat;
?>