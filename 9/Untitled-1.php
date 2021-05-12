<?php
$servername = "localhost";
$username = "root";
$password = "";
if(!$conn = mysqli_connect($servername, $username,$password)){
    echo("Nie mozna sie połaczyc");
}
else{
   echo ("Connected successfully"); 
}
if(mysqli_select_db($conn,"serwis")){
    echo ("Udalo sie polaczyc do serwis");
}
else{
    echo("nie udalo sie");
}
$query = "SELECT * FROM klient";
$wynik = mysqli_query($conn,$query);
echo("<br>");
echo("I");

while($row = mysqli_fetch_row($wynik)){
    echo("<br>");
    echo("$row[0] |");
    echo("$row[1] |");
    echo("$row[2] |");
    echo("$row[3] |");
    echo("<br>");
}

echo("II");
$row2 = mysqli_fetch_array($wynik,MYSQLI_NUM);
echo("<br>");
print_r(mysqli_fetch_array($wynik));
echo (" III \t");
echo(mysqli_num_rows($wynik));
$sql = "INSERT INTO klient ( ID, Imie, Nazwisko, Nr_tel, Miejsc)
VALUES ('5','Jan','Tomaszewski','321453221','Torun')";
if($conn->query($sql) == TRUE ){
    echo("Udalo sie");
}
else {
    echo("nie udalo sie");
} 

?>