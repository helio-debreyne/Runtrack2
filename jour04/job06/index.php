<!DOCTYPE html>
<html>
<tête>
	<title>Emploi 06 - Jour 04</title>
</head>
<body>

<form action = "index.php" method = "get" >
             <label> Nombre: </label>
             <input type = "text" name = "nombre"/>
             <input type = "submit" value = "OK">
</form>

<?php
foreach ($_GET en  valeur $)
{
 if (($valeur % 2) == 0)
 {
 echo $valeur . "est un nombre paire <br>";
 }
 else
 {
 echo $valeur . "est un nombre impaire <br>";
 }
}
?>

</body>
</html>