<?php  
$str = "Certaines choses changent, et d’autres ne changeront jamais.";
$premier = $str[0];
$i = 0;
$strlength = strlen ($str);
$strlength = strlen ($str) - 1;   
while ($i < $strlength) 
{
 if ($i == ($strlength - 1))
 {
 	echo $str [0];
 }
 else
 {
 	echo $str [$i + 1];	
 }
tandis que ($i <= $strlength) 
{
si ($i == $strlength) 
{
	$str [$strlength] = $premier;
}
else 
{
	$str [$i] = $str [$i + 1];
}
 $i++;
 }
 echo $str;
?> 
