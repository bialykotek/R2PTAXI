<?php
session_start();
if(isset($_SESSION['dopuszczony'])) {
$login=$_SESSION['dopuszczony'];
echo"<a href=\"../wyloguj.php\">wyloguj</a>";
include('../funkcje.php');
dbConnect();
echo"<form action='zmiana.php' method='POST'>
zmień login* <input type=\"text\" value=\"".$login."\" name=\"nazwa\"></br>
zmień hasło* <input type=\"password\" name=\"haslo\"></br>
potwierdź hasło* <input type=\"password\" name=\"haslo2\"></br>
<input type=\"submit\" value=\"zmień\">";
echo"<br><br>UWAGA! Po zmianie danych zostaniesz automatycznie wylogowany.";
echo"</br><a href=javascript:history.go(-1)>powrót</a>";

}
else
	echo"Brak uprawnień do przeglądania zawartości, musisz się zalogować";
?>