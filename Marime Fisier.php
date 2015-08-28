<?php
#functia formateaza marimea fisierului astfel incat sa poate fi inteleasa de fiecare persoana
function format_size($size)
 {
	$sizes = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
	if ($size == 0) 
	{
		 return('n/a');
		  }
		   else
		    {
		return (round($size/pow(1024, ($i = floor(log($size, 1024)))), 2) . $sizes[$i]);
		 }
}
#folosire
$thefile = filesize('nume_fisier.extensie');
echo format_size($thefile);
?>