<?php
session_start();
if(isset($_SESSION['dopuszczony'])) {
$login=$_SESSION['dopuszczony'];
echo"<a href=\"../wyloguj.php\">wyloguj</a>";
include('../funkcje.php');
dbConnect();
echo"<form action='taksowka.php' method='POST'>
podaj typ auta taxi <input type=\"text\" name=\"typ_taxi\"></br>
podaj liczbe miejsc <input type=\"text\" name=\"miejsca\"></br>
bagażowa ? <input type=\"checkbox\" name=\"przycisk\"></br>
<input type=\"submit\" value=\"zmień\">";
echo"</br><a href=javascript:history.go(-1)>powrót</a>";
}
else
	echo"Brak uprawnień do przeglądania zawartości, musisz się zalogować";
?>