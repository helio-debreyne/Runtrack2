<!DOCTYPE html>
<html>
<head>
	<titre> Job 03 - Jour 04 </title>
</head>
<body>

<form   action = "index.php"  method = "post">
             <label> Votre nom: </label>
             <type d' entrée  = "text" name = "nom"/> 
             <label> Mot De Passe: </label>
             <type d' entrée  = "mot de passe" name = "mdp"/> 
             <label> Email: </label>
             <input  type = "email"  name = "email"/>
             <label> Age: </label>
             <type d' entrée = "text" name = "age"/> 
             <input type = " submit " value = "OK">
</form>

<?php
$i = 0;
foreach ($_POST en tant que $valeur ) 
{
$i++;
}
echo $i;
?>

</body>
</html>