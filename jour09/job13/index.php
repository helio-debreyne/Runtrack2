<?php 
$cnx = mysqli_connect("localhost", "root", "", "jour08");
$requete1 = "SELECT salles.nom, etage.nom FROM salles, etage WHERE salles.id_etage = etage.id";
$requete2 = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'salles' AND COLUMN_NAME='nom' OR table_name = 'etage' AND COLUMN_NAME='nom' ";
$query1 = mysqli_query($cnx , $requete1);
$query2 = mysqli_query($cnx , $requete2);
$resultat = mysqli_fetch_all($query1);
$resultat2 = mysqli_fetch_all($query2);
mysqli_close($cnx);
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Job13</title>
    </head>
    <body>
        <table border>
              <thead>
                <tr>
                  <?php 
                   $taille2 = sizeof($resultat2);
                    for ($i=0; $i <  $taille2 ; $i++) 
                    { 
                      echo "<th>".$resultat2[$i][0]."</th>";
                    }
                  ?>
                </tr>
              </thead>
              <tbody>
                    <?php 
                    $taille = sizeof($resultat);
                    for ($i=0; $i < $taille; $i++) 
                    { 
                      echo "<tr>";
                      for ($b=0; $b < $taille2; $b++) 
                      { 
                        echo "<td>".$resultat[$i][$b]."</td>";
                      }
                      echo "</tr>";
                    }
                  ?>
              </tbody>
        </table>
    </body>
</html>