<?php
$nombre = -1;
while($nombre<=1336)

{   
    $nombre = $nombre+1;

if($nombre == 42)
{
    echo "<u><b>$nombre</u></b>";
    echo "<br>";
}else{
    echo $nombre; 
    echo "<br>";
}   
}
?>