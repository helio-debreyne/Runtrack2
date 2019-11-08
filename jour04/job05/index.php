<!DOCTYPE html>
<html>
<tête>
	<titre> Emploi 05 - Jour 04 </title>
</head>
<body>

<form  action = "index.php" method = "post">
             <label>Nom d'utilisateur:</label>
             <input type = "text" name = "Nom"/>
             <label>Mot De Passe:</label>
             <type d' entrée  = "mot de passe" name = "Mdp"/> 
             <input type = "submit"  value = "OK">
</form>

<?php
if ($_POST == true)
{
 *  if ($_POST ["Nom"] == "John" && $_POST ["Mdp"] == "Rambo") 
   {
      
      echo "C'est pas ma guerre";
   }
   else{
      echo "Votre pire cauchemar";
   }
   
}
?>

</body>
</html>