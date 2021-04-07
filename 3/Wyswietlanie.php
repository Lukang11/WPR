<?php
echo("Gratulacje udalo ci sie rezerwowac pokoj !<br>");
echo("Twoje dane : <br>");
echo("imie :"),($_GET['imie']),("<br>");
echo("Nazwisko :"),($_GET['nazwisko']),("<br>");
echo("Adres :"),($_GET['adress']),("<br>");
echo("nr karty :"),($_GET['karta']),("<br>");
echo("telefon : +48"),($_GET['tele']),('<br>');
echo("Zarezerwowales pokoj dla : "),($_GET['osoby']),(" osob "),("w terminie od "),($_GET['od']),(" do "),($_GET['do']) ,("<br> z udogodnieniami : "),($_GET['udogo']);


?>