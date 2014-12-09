<?php
function sterge($fisier)
{
	$ext = strrchr($fisier, '.');
	if($ext !== false)
	{
		$fisier = substr($fisier, 0, -strlen($ext));
	}
	return $fisier;
}
#folosire
echo sterge('favicon.ico');
?>
