<?php
session_start();
if(!isset($_SESSION['prenom']))
{
    $_SESSION['prenom']= [];
}
if (isset($_POST["dc"]) == false && isset($_POST["prenom"]))
{
	array_push($_SESSION['prenom'], $_POST['prenom']);
}
if (isset($_POST["dc"]))
{
	session_destroy();
	header('Location:index.php');
}
$taille=sizeof($_SESSION['prenom']);
$i=0;
while ( $i < $taille) {
	echo $_SESSION['prenom'][$i];
	echo "<br>";
	$i++;
}
?>
<form action="index.php" method="post">
	  <input name="prenom"  type="text" required/>
	  <input name="envois" value="nouveau prenom" type="submit"/>
</form>

<form action="index.php" method="post">
	  <input name="dc" value="Reset Array" type="submit"/>
</form>