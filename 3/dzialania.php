<?php
$i = 0;

if($_GET['dodaj'] == "on"){
    $i = $_GET['pierw'] + $_GET['druga'];
    echo($i);
}
if($_GET['odejmij'] == "on"){
    $i = $_GET['pierw'] - $_GET['druga'];
    echo($i);
}
if($_GET['pom']=="on"){
    $i = $_GET['pierw'] * $_GET['druga'];
    echo($i);
}
if($_GET['dziel']=="on"){
    $i = $_GET['pierw'] / $_GET['druga'];
    echo($i);
}
?>