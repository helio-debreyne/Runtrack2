
<?php
 $str = "LaPlateforme";
 $val = 6;
 $myBool = true;
 $float = 2.1;
?>


<!DOCTYPE html>
<body>
<table style="width:100%">
  <tr>
    <th>Type</th>
    <th>Nom</th>
    <th>Valeur</th>
  </tr>
  <tr>
    <td>String</td>
    <td>$str</td>
    <td><?php echo "$str" ?></td>
  </tr>
  <tr>
    <td>Entier</td>
    <td>$val</td>
    <td><?php echo "$val" ?></td>
  </tr>
  <tr>
    <td>Booléen</td>
    <td>$myBool</td>
    <td><?php echo "$myBool" ?></td>
  </tr>
  <tr>
    <td>Nombre a virgule flottante</td>
    <td>$float</td>
    <td><?php echo "$float" ?></td>
  </tr>
</table>     
</body>