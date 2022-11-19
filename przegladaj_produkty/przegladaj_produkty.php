<?php
session_start();
if(isset($_SESSION['dopuszczony'])) {
$login=$_SESSION['dopuszczony'];
//$poziom=$_SESSION['poziom'];
//echo"Witaj $login, poziom uprawnień: $poziom</br>";
//operacje dla klienta
echo"<a href=\"../wyloguj.php\">wyloguj</a></br>";
include('../funkcje.php');
dbConnect();
$zapytanie=mysqli_query($polaczenie, "SELECT * FROM `produkty`;");
echo"<table
border=\"1px\"><tr><td>nazwa</td><td>ilość</td><td>cena</td></tr>";
while($rekord=mysqli_fetch_array($zapytanie)) {
	echo"<tr><td>".$rekord['nazwa']."</td><td>".$rekord['ilosc']."</td><td>".$rekord['cena']."</td>";
	echo"<td><form 
	action=\"../usun_produkty/usun_produkty.php\" 
	method=\"POST\">
	<input type='hidden' value=\"".$rekord['id_produkty']."\" name=\"id_produkty\">
	<input type='submit' value='usuń'>
	</form>
	</td>";
	echo"<td><form 
	action=\"../edytuj_produkty/edytuj_produkty.php\" 
	method=\"POST\">
	<input type='hidden' value=\"".$rekord['id_produkty']."\" name=\"id_produkty\">
	<input type='submit' value='edytuj'>
	</form>
	</td>";
	echo"</tr>";
}
echo"</table>";
}
else
	echo"Brak uprawnień do przeglądania zawartości, musisz się zalogować";
?>
