<?php
function get_extension($fisier)
{
	$myext = substr($fisier, strrpos($fisier, '.'));
	return str_replace('.','',$myext);
}
#folosire
$fisier = 'Get-File-Extension.php';
echo get_extension($fisier)
?>