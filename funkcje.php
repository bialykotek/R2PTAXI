<?php
/*funkcja łączenia się z bazą danych powinna znaleźć się na początku każdego pliku, w którym wykonuje się zapytania do bazy*/
function dbConnect() {
/*polaczenie z baza danych*/
global $polaczenie;
/*argumenty pisz w apostrofach*/
if ($polaczenie=mysqli_connect('localhost', 'root', '', 'r2ptaxi')) {
	}
else{
	/* Pobierz informacje o błędzie połączenia.*/
	echo "Nieudane polaczenie z baza danych MYSQL.</br>";
	}
}
?>