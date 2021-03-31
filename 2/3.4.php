<?php
$z = 5;
$suma = 0;
$l=0;
$s=0;
for($i = 1; $i <= $z; $i++)
{
    if($z % $i == 0 && $i == 1 || $i == $z)
    {
        $l++;
    }
    if ($z % $i == 0){
        $s++;
    }
    $suma++;
}
if($l == $s){
    echo("Liczba $z jest pierwsza");
}
else{
    echo("Liczba $z nie jest pierwsza");
}
echo("<br/> Ilośc iteracji : $suma");
?>