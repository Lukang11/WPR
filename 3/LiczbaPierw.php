<?php
$suma = 0;
function pierw(){
    
    if ($_GET['zmien']< 1) {
      echo ("nie istnieje dla :"),($_GET['zmien']);
    } elseif ($_GET['zmien'] == 1) {
      echo ('Liczba 1 nie jest ani pierwsza, ani złożona.');
    } else {
      $pierwsza = True;
      for ($i = 2; $i < $_GET['zmien']; $i++) {
        if ($pierwsza) {
          if ($_GET['zmien'] % $i == 0) {
           $pierwsza = False;
           $suma += 1;
          }
        }
      }
   }
   if ($pierwsza) {
     echo("Liczba "), ($_GET['zmien']),(" jest pierwsza.");
   } else {
     echo ("Liczba "), ($_GET['zmien']), (" nie jest pierwsza.");
   };    
}
pierw();
echo("Ilosc iteracji"),($suma);

?>