<?php
  
    if(!isset($_COOKIE['prenom']) || !isset($_POST["prenom"]))
    {
    
    echo "<form action=\"index.php\" method=\"post\">
	<input name=\"prenom\"  type=\"text\" required />
	<input name=\"connexion\" value=\"Connexion\" type=\"submit\" />
    </form>";
    }
    if(isset($_POST["prenom"]))
    {
    	setcookie("prenom",$_POST["prenom"],0);
    }
    
    if (isset($_POST["deco"]) == false && isset($_POST["prenom"]) && isset($_COOKIE["prenom"]))
    {
    	 
        if ($_COOKIE["prenom"] == $_POST["prenom"]) 
        {
	 	echo "Bonjour ".$_POST["prenom"]."<br>";
	 	echo "<form action=\"index.php\" method=\"post\">
	    <input name=\"deco\" value=\"Deconnexion\" type=\"submit\" />
        </form>";
	    }
	    else
	    {
	 	echo "<form action=\"index.php\" method=\"post\">
	    <input name=\"prenom\"  type=\"text\" required />
	    <input name=\"connexion\" value=\"Connexion\" type=\"submit\" />
        </form>";
	    }
      }
    if (isset($_POST["deco"])){
        setcookie("prenom","0",time()-1);
         header('Location:index.php');
     }
?>