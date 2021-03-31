<?php
$z = 5;
echo("Oto wyniki :");
for ($i = 0; $i < $z; $i++)
{
    $r = $i+1;
    $tab[$i] = rand(1,6);
    echo("<br/>Rzut $r  wypadła: $tab[$i]");
}
?>