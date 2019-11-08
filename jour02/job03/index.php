<?php  
$nbr = 0;
while ($nbr<=100) 
{
    for ($nbr;$nbr<=20;$nbr++) 
    { // boucle pour que l'interval entre 0 et 20 (qui peut être remplacé par si dans ce cas)
        echo "<i>".$nbr . "</i>";
		echo "<br/>";
    }
    for ($nbr;$nbr<25;$nbr++) 
    {   // boucle pour qui couvre l'interval entre 20 et 25 (qui peut être remplacé par si dans ce cas)
        echo $nbr;
		echo "<br/>";
    }
    for ($nbr;$nbr<=50;$nbr++) 
    { // boucle pour qui couvre l'interval entre 25 et 50 (qui peut être remplacé par si dans ce cas)
        if ($nbre==42) 
        {
			echo "LaPlateforme_";
			echo "<br/>";
		}
        else 
        {
			echo "<u>".$nbr."</u>";
	        echo "<br/>";
		}
    } 
    echo $nbr;// affichage nombres entre 50 et 100
    echo "<br/>";
    $nbr ++;
}
?>