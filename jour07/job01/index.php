<?php
session_start();
if ((isset($_SESSION['nbvisites']))&&(empty($_GET['suppr'])))
{
    $_SESSION['nbvisites']=$_SESSION['nbvisites']+1;
    echo "Nombre de visite(s):"," ";
    echo $_SESSION['nbvisites'];
}
else
{
    $_SESSION['nbvisites']=0;
    echo "Nombre de visite(s):"," ";
    echo $_SESSION['nbvisites'];
}
if(!empty($_GET['suppr']))
{
    unset ($_SESSION['nbvisites']);
}
?>
<form method="get">
<input type="submit" name="suppr" value="Rénitialiser compteur">
</form>