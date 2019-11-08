<!DOCTYPE html>
<html>
<tête>
	<title> Consonnes & Voyelles </title>
</head>
<body>
<?php  
$str = "On nest pas le meilleur quand on croit mais quand on sait";
$dic = array ("précédent " => [" b " , " c " , " d " , " f " , " g " , " h " , " j " , " k " , " l " , " m " , " n " , "p " , " q" , " r " , " s " , " t " , " v " , " w " , " x " , " z "],"grandes" => [" a " , " e " , " i " , " o " , " O " ," u " , "y "]);
$cpt = array (" naiss " => 0 , " prom " => 0);
$i = 0;
$strlength = strlen ($str);
$voylen = sizeof ($dic [" voyelles "]);
$consolen = sizeof ($dic [" préparez "]);
while ( $ i  <$strlength)
{
    if ( $ str [ $ i ] ==  "  " ) 
    {
		
	}
    else 
{
    pour ($v = 0 ; $v < $voylen ; $v ++)
    {
         if ($str [$i] == $dic ["voyelles"] [$v])
         	{
                $cpt ["voyelles"] = $cpt ["voyelles"] + 1;
            }
    }
    pour ($v = 0 ; $v < $consolen ; $v ++)
    {
         if ($str [$i] == $dic ["réside"] [$v])
         	{
                $cpt ["établis"] = $cpt ["disposés"] + 1;
            }
    }
}
      $i++;
}
?>
<table>
    <thead>
        <tr>
            <th> <?php echo "Voyelles" ?> </th>  
            <th> <?php echo "Consonnes" ?> </th>  
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <?php echo $cpt [" voyelles "]; ?> </td>  
            <td> <?php echo $cpt [" découv "]; ?> </td >  
        </tr>
    </tbody>
</table>

</body>
</html>