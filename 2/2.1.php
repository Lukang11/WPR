<?php
function losujJeden($z)
{
    $i = 0;
    while ($z > $i){
        $l = rand();
        $Tablica[$i] = $l;
        echo($Tablica[$i]);
        echo("<br>");
        $i++;
        
    }
    echo("<br> Oto wynik dla indeksu $z : <br>" );
    echo("<br>");
    echo($Tablica[$z - 1]);

}
$z = 3;
losujJeden($z);
?>