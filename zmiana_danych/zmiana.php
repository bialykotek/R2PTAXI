<?php
session_start();
if(isset($_SESSION['dopuszczony'])) {
$login=$_SESSION['dopuszczony'];
$nazwa=$_POST['nazwa'];
$haslo1=$_POST['haslo'];
$haslo2=$_POST['haslo2'];
if($haslo1==$haslo2 && !empty($haslo1) && !empty($haslo2) && !empty($nazwa)){
include('../funkcje.php');
dbConnect();
$sprawdz_login=mysqli_query($polaczenie, "SELECT `login` FROM `uzytkownicy` WHERE `login`='$nazwa';");
$ile_loginow=mysqli_num_rows($sprawdz_login);
if($ile_loginow==0 || $nazwa==$login){
$zapytanie=mysqli_query($polaczenie, "UPDATE `uzytkownicy` SET `login`= '$nazwa',`haslo`=password('$haslo1') WHERE `login`='$login'");
header("location:../wyloguj.php");
}else {
	echo"Podany login już istnieje. Ustal inny.</br>
	<a href=javascript:history.go(-1)>powrót</a>";
}
}else {
	echo"Dane się nie zgadzają albo ich nie wprowadzono.";
	echo"<br><a href=javascript:history.go(-1)>powrót</a>";
	}
}
else
	echo"Brak uprawnień do przeglądania zawartości, musisz się zalogować";
?>