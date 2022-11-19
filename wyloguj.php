<?php
session_start();
unset($_SESSION['dopuszczony']); /*usuwanie zmiennej sesyjnej
usuwanie większej ilości zmiennych sesejnych naraz
$_SESSION = array();*/
session_destroy();
echo"wylogowano użytkownika";
echo"<br><a href=\"index.php\">powrót</a>";
?>