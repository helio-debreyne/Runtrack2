<? php  
$nbr = 0;
while ($nbr <= 100) 
{
   if ($nbr % 3 == 0 && $nbr % 5 == 0) // si le modulo 3 égal à 0 le modulo 5 égal à 0 sur affiche fizzbuzz
   {
    echo "FizzBuzz";
    echo "<br/>";
    $nbr++;
   }
   elseif ($nbr % 3 == 0) // si le modulo 3 normal et le modulo 5 différent de 0 sur affiche fizz
   {
    echo "Fizz";
    echo "<br/>";
    $nbr++;
   }
    elseif ($nbr % 5 == 0) // si le modulo 5 égal à 0 le modulo 3 différent de 0 sur affiche buzz
   {
     echo "Buzz";
     echo "<br/>";
     $nbr++;
   }
   else
   {
     echo $nbr;
     echo "<br/>";
     $nbr++;
   }   
}
?>