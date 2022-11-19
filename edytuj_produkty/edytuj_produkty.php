<?php
session_start();
if(isset($_SESSION['dopuszczony'])) {
$login=$_SESSION['dopuszczony'];
echo"<a href=\"../wyloguj.php\">wyloguj</a></br>";
$id_produkty=$_POST['id_produkty'];
include('../funkcje.php');
dbConnect();
$zapytanie=mysqli_query($polaczenie, "SELECT * FROM `produkty` WHERE id_produkty = $id_produkty");
$rekord=mysqli_fetch_array($zapytanie);
echo"<form action='edycja_produktu.php' method='POST'>
<input type=\"hidden\" value=\"$id_produkty\" name=\"id_produktu\"></br>
zmień nazwę <input type=\"text\" value=\"".$rekord['nazwa']."\" name=\"nazwa\"></br>
zmień ilość <input type=\"text\" value=\"".$rekord['ilosc']."\" name=\"ilosc\"></br>
zmień cenę <input type=\"text\" value=\"".$rekord['cena']."\" name=\"cena\"></br>
<input type=\"submit\" value=\"zmień\">";
echo"</br><a href=\"../przegladaj_produkty/przegladaj_produkty.php\">powrót</a></br>";

}
else
	echo"Brak uprawnień do przeglądania zawartości, musisz się zalogować";
?>