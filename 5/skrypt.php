<?php
setcookie('imie',$_GET['imie']);
setcookie('nazwisko',$_GET['nazwisko']);
setcookie('miasto',$_GET['miasto']);
setcookie('plec',$_GET['plec']);
setcookie('osoby',$_GET['osoby']);
if($_GET['osoby'] == 1){
    echo("twoje imie :"),($_GET['imie']);
}
elseif($_GET['osoby'] == 2){
    include("form 1.html");
    for($i=1;$i<3;$i++){
        setcookie('imie$i',$_GET['imie']);
        setcookie('nazwisko$i',$_GET['nazwisko']);
        setcookie('miasto$i',$_GET['miasto']);
        setcookie('plec$i',$_GET['plec']);
        setcookie('osoby$i',$_GET['osoby']);
    }
}
elseif($_GET['osoby'] == 3){
    include("form 2.html");
    for($i=0;$i<3;$i++){
        setcookie('imie$i',$_GET['imie']);
        setcookie('nazwisko $i',$_GET['nazwisko']);
        setcookie('miasto $i',$_GET['miasto']);
        setcookie('plec$i',$_GET['plec']);
        setcookie('osoby$i',$_GET['osoby']);
    }
}
elseif($_GET['osoby'] == 4){
    include("form 3.html");
    for($i=1;$i<5;$i++){
        setcookie('imie$i',$_GET['imie']);
        setcookie('nazwisko$i',$_GET['nazwisko']);
        setcookie('miasto$i',$_GET['miasto']);
        setcookie('plec$i',$_GET['plec']);
        setcookie('osoby$i',$_GET['osoby']);
    }
}


?>