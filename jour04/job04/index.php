<!DOCTYPE html>
<html>
<tête>
	<title> Emploi 04 - Jour 04 </title>
</head>
<body>

<form  action = "index.php" method = "post">
             <label> Votre nom: </label>
             <input  type = "text"  name = "Nom"/>
             <label> Mot De Passe: </label>
             <type d' entrée = "mot de passe" name = "Mdp"/> 
             <label> Email: </label>
             <input  type = "email" name = "Email"/>
             <label> Age:</label>
             <type d' entrée = "text" name = "Age"/> 
             <input type = "submit" value = "OK">
</form>

<?php
echo "<table> <thead> <tr> <th> Arguments </th> <th> Valeurs </th> </tr> </thead> <tbody>";
foreach ($_POST en  tant que  $cle  =>  $valeur) 
{
echo "<tr> <td>" . $cle . "</td> <td>" . valeur de $ . "</td> </tr>";
}
echo "</tbody> </table>";
?>

</body>
</html>