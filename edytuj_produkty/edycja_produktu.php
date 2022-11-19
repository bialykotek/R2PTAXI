<?php
session_start();
if(isset($_SESSION['dopuszczony'])) {
$login=$_SESSION['dopuszczony'];
$nazwa=$_POST['nazwa'];
$ilosc=$_POST['ilosc'];
$cena=$_POST['cena'];
$id_produktu=$_POST['id_produktu'];
echo"<a href=\"../wyloguj.php\">wyloguj</a><br>";
include('../funkcje.php');
dbConnect();
$zapytanie=mysqli_query($polaczenie, "UPDATE `produkty` SET `nazwa`='$nazwa',`ilosc`=$ilosc,`cena`=$cena WHERE `id_produkty`=$id_produktu;");
echo"zmieniono produkt ID $id_produktu </br>nazwe: $nazwa </br>ilosc: $ilosc </br>cena: $cena";
echo"</br><a href=\"../przegladaj_produkty/przegladaj_produkty.php\">powrót</a></br>";
}
else
	echo"Brak uprawnień do przeglądania zawartości, musisz się zalogować";
?>