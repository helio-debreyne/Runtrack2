<?php  
$str = "Les choses que l'on possède finissent par nous posseder.";
$strlength = strlen ($str);
while ($strlength > 0) 
  {
	$ strlength  =  $strlength - 1;
	echo  $str [$strlength];
  }
?>