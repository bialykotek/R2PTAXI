<?php
session_start();
if(isset($_SESSION['dopuszczony'])) {
$login=$_SESSION['dopuszczony'];
//$poziom=$_SESSION['poziom'];
//echo"Witaj $login, poziom: $poziom</br>";
//operacje dla klienta:
echo"<a href=\"../wyloguj.php\">wyloguj</a></br>";
//if($poziom==1) {
//operacje dla pracownika:
$id_produkty=$_POST['id_produkty'];
include('../funkcje.php');
dbConnect();
$zapytanie=mysqli_query($polaczenie, "DELETE FROM `produkty` WHERE `id_produkty` = $id_produkty");
echo"Usunięto wybrany produkt ID $id_produkty";
//}
}
else
	echo"Brak uprawnień do przeglądania zawartości, musisz się zalogować";
?>