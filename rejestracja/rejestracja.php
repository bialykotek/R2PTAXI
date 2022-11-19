<?php
$login=$_POST['login'];
$haslo1=$_POST['haslo1'];
$haslo2=$_POST['haslo2'];
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
if(!empty($login and !empty($haslo1) and !empty($haslo2))) {
if($haslo1==$haslo2)
{
include('../funkcje.php');
dbConnect();
$sprawdz_login=mysqli_query($polaczenie, "SELECT `login` FROM `uzytkownicy` WHERE `login`='$login';");
$ile_loginow=mysqli_num_rows($sprawdz_login);
//echo"ile loginów: $ile_loginow";
if($ile_loginow==0){
mysqli_query($polaczenie, "INSERT INTO `uzytkownicy` (`id_uzytkownicy`, `login`, `haslo`) VALUES(null, '$login', password('$haslo1')); ");
echo"Pomyślnie zarejestrowano użytkownika";
}
else {
echo"Podany login już istnieje. Ustal inny.</br>
	<a href=javascript:history.go(-1)>powrót</a>";
}
}
else{
	echo"hasła różnią sie</br>
	<a href=javascript:history.go(-1)>powrót</a>";
}
}
else{
	echo"podaj wszystkie wymagane dane</br>
	<a href=javascript:history.go(-1)>powrót</a>";
}
?>