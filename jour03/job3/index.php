<?php  
$str = "Je suis désolé Dave, j'ai bien peur de ne pas pouvoir faire ça.";
$voyelles = array ( " a " , " e " , " i " , " o " , " u " , " y " , " I " );
$i = 0;
$strlegnth = strlen ($str);
$voylen = sizeof ($voyelles);
/ * while ($i<$strlegnth)
{
 foreach ($voyelles comme $ voy) 
    {
        if ($str [$i] == $voy) 
            {
                echo $str [$i];
            }
		 }
		  $i++;
} * /
while ($i < $strlegnth)
{
   pour ($v = 0 ; $v < $voylen ; $v++)
    {
         if ( $str [$i] == $voyelles [$v])
         	{
                echo $str [$i];
            }
    }
    $i++;
}
?>