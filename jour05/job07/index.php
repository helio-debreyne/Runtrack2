<!DOCTYPE html>
<html>
<head>
	<title>Job 07 - Jour 05</title>
</head>
<body>

<form  action="index.php" method="get">
             <label>Str : </label>
             <input type="text" name="str" required/>
             <label>Decalage : </label>
             <input type="number" name="decalage" />
             <label>Fonction : </label>
             <select name="fonction" for="foncu" required>
                <option value="gras">Gras</option>
                <option value="cesar">Cesar</option>
                <option value="Plateforme_">Plateforme_</option>
             </select>
             <input  type="submit" value="OK">
</form>

<?php
function gras($str)
{
$i=0;
$maj =  array("A", "B", "C", "D", "E", "F","G", "H", "I", "J", "K", "L","M", "N", "O", "P", "Q", "R","S", "T", "U", "V", "W", "X","Y", "Z");
$sizemaj = sizeof($maj);
  while (isset($str[$i])==true)
{
    for($v = 0; $v < $sizemaj; $v++)
    {
         if (($str[$i] == $maj[$v] && $str[$i-1] == " ") || ($str[$i] == $maj[$v] && $i==0))
            {
                  while ($str[$i]!=" " && isset($str[$i+1])==true )
                  {
                     echo "<b>".$str[$i]."</b>";
                     $i++;
                  }
            }
    }
    echo $str[$i];     
    $i++;
}
}
function cesar($str, $decalage)
    {
        $i = 0;
        $maj = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
        $min = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
        $sizemaj = sizeof($maj);
        while (isset($str[$i])) 
        {
            $j = 0;
            $decale = 0;
            $bool = false;
            while ($j < $sizemaj) 
            {
                $decale = $j + $decalage;
                if ($decale < 26)
                {
                    if ($str[$i] == $maj[$j]) 
                    {
                        $str[$i] = $maj[$decale];
                        echo $str[$i];
                         $bool = true;
                         break;
                    }
                    if ($str[$i] == $min[$j]) 
                    {
                        $str[$i] = $min[$decale];
                        echo $str[$i];
                        $bool = true;
                        break;
                    }
                }
                else 
                {
                    if ($str[$i] == $maj[$j]) 
                    {
                        $decale = $decale - 26;
                        $str[$i] = $maj[$decale];
                        echo $str[$i];
                        $bool = true;
                        break;
                    }
                    if ($str[$i] == $min[$j]) 
                    {
                        $decale = $decale - 26;
                        $str[$i] = $min[$decale];
                        echo $str[$i];
                        $bool = true;
                        break;
                    }
                }
                $j++;
            }
        
        if($bool == false)
        {
           echo $str[$i];
                    
        }
            $i++;
     }
  }
function Plateforme_($str)
{     
$i=0;
while (isset($str[$i])==true)
{
    
         if (($str[$i] == "m" && $str[$i+1] == "e") && isset($str[$i+2])==false  )
            {
                  $str[$i+2] = "_";
                  echo $str[$i];
                  $i++;
                 
            }
          elseif (($str[$i] == "m" && $str[$i+1] == "e") && $str[$i+2]==" ")
            {
                 $str[$i+2] = "_";
                 echo $str[$i];
                 $i++;
            }
            else{
                 echo $str[$i];
                 $i++;
            }
           
}
}
if($_GET==true)
{
$str = $_GET["str"];
$decalage = $_GET["decalage"];
if ($_GET["fonction"] == "gras") 
{
     gras($str);
}
if ($_GET["fonction"] == "cesar") 
{
   if($_GET["decalage"]==true)
   {
    cesar($str,$decalage);
   }
   else{
    echo "Please enter the Decalage value :)";
   }
}
if ($_GET["fonction"] == "Plateforme_") 
{
     Plateforme_($str);
}
}
?>

</body>
</html>
