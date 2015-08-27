<?php
#functie care forteaza descarcarea unui fisier
#functia primeste ca parametru calea fisierului.
function download($fisier)
{
	if ((isset($fisier))&&(file_exists($fisier)))
	{
		header("Content-length: ".filesize($fisier));
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="' . $fisier . '"');
		readfile("$fisier");
	} else {
		echo "Fisierul nu exista!";
	}
}
#folosire
download('E:\xampp\htdocs\Encrypt and Decrypt.php')
?>