<?php
$nbr = 0;
$nbdiv = 2;
while ($nbr <= 1000) 
{ // boucle pour sortir tous les nombres premier jusqu'a 1000
    if ($nbr ! = 1) // verification que le nombre est différent de 1 pour eviter boucle infini
    {
        while ($nbr % $nbdiv ! = 0) / * modulo of nbr by nbdiv, as the modulo is different of 0 on continue le processus jusqu'à ce qu'on soit tombé sur 0 pour le modulo et si ce nombre est egal a notre nombre sur peut conclure que ce numéro est un nombre premier * /
        {
            $nbdiv++;
        }
        si ($nbr == $nbdiv)
        {
            echo $nbr."<br/>";
        }
        $nbdiv = 2;
    }
    $nbr++;
}
?>