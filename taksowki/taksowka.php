<?php
session_start();
if(isset($_SESSION['dopuszczony'])) {
$login=$_SESSION['dopuszczony'];
$typ_taxi=$_POST['typ_taxi'];
$miejsca=$_POST['miejsca'];
if(!empty($typ_taxi) && !empty($miejsca)){
include('../funkcje.php');
dbConnect();
if(isset($_POST['przycisk'])){
	$przycisk=1;
}else
	$przycisk=0;
$zapytanie=mysqli_query($polaczenie, "INSERT INTO `taksowki`(`id_taksowki`, `miejsca`, `bagazowa`, `typ_auta`, `dostepna`) VALUES (NULL, $miejsca,'$przycisk')");
}else {
	echo"Nie wprowadzono danych.";
	echo"<br><a href=javascript:history.go(-1)>powrót</a>";
	}
}
else
	echo"Brak uprawnień do przeglądania zawartości, musisz się zalogować";
?>