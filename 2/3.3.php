<?php
$a = 5;
$i = 1;
$w = 0;
for ( $i = 1; $i <= $a; $i++)
{

    for($j = 1; $j <= $a; $j++){
        $w = $i*$j;
        echo("$i x $j = $w");
        echo("<br/>");
    }

}
?>