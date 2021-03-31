<?php
$tab[0]=rand(0,30);
$tab[1]=rand(0,30);
$tab[2]=rand(0,30);
$tab[3]=rand(0,30);
$tab[4]=rand(0,30);
$tab[5]=rand(0,30);
$tab[6]=rand(0,30);
echo ("Twoja tablica :");
$z = $tab[0];
$i = 0;
while ($i < 6){
    echo(" $tab[$i], ");

    if($tab[$i] >= $tab[$i + 1] && $tab[$i] > $z)
     {
         $z = $tab[$i];
 
     }
     else if ($tab[$i] <= $tab[$i + 1] && $tab[$i] > $z){
         $z = $tab[$i + 1];
     }
     $i++; 
}
echo("Najwiekszy elemnt tablicy to :$z");

?>