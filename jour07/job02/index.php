<?php
setcookie("nbvisites","1",0);
$cpt = $_COOKIE['nbvisites'];
if(!isset($_COOKIE['nbvisites']))
{
    setcookie("nbvisites","0",0);
}
elseif (isset($_POST["dc"]) == false){
	$cpt++;
    setcookie("nbvisites", $cpt, 0);
}
if (isset($_POST["dc"])){
     setcookie("nbvisites","0",0);
     header('Location:index.php');
}
echo $_COOKIE['nbvisites'];
?>
<form action="index.php" method="post">
	  <input name="dc" value="Reset Counter" type="submit"/>
</form>
