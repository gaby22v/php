<?php
#Function for file force download.
#The function receives as parameter the path file and force the download..
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
#how to use
download('test.php')
?>
