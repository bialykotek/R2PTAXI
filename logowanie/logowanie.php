<?php
session_start();
$login=$_POST['login'];
$haslo=$_POST['haslo'];
if(!empty($login) and !empty($haslo)) {
include('../funkcje.php');
dbConnect();
$sprawdz_login=mysqli_query($polaczenie, "SELECT `login`, `haslo` FROM `uzytkownicy` WHERE `login`='$login' and `haslo`=password('$haslo');");
$ile_loginow=mysqli_num_rows($sprawdz_login);
if ($ile_loginow==1) {
$_SESSION['dopuszczony']=$login;
//$rekord=mysqli_fetch_array($sprawdz_login);
header("location:../po_zalogowaniu.php");
echo"Pomyślnie zalogowano użytkownika";
}
else{
echo"Błędny login i/lub hasło</br>
	<a href=javascript:history.go(-1)>powrót</a>";
}
}
else {
	echo"Podaj wszystkie wymagane dane</br>
	<a href=javascript:history.go(-1)>powrót</a>";
}
?>