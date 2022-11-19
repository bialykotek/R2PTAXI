<?php
session_start();
if(isset($_SESSION['dopuszczony'])) {
$login=$_SESSION['dopuszczony'];
$poziom=$_SESSION['poziom'];
echo"Witaj $login</br>";
//echo"Witaj $login, poziom uprawnień: $poziom</br>";
//operacje dla klienta:
echo"<a href=\"wyloguj.php\">wyloguj</a></br>";
echo"<a href=\"zmiana_danych/zmiana_danych.php\">zmień dane</a></br>";
echo"<br><a href=\"taksowki/taksowki.php\">dodaj taksowki</a></br>";
if($poziom==1) {
//operacje dla pracownika
echo"<a href=\"dodaj_produkt/index.php\"dodaj produkt</a></br>";
}
}
else
echo"Brak uprawnień do przeglądania zawartości, musisz się zalogować";
?>