<?php
function list($cale)
{
	if($dir = opendir($cale))
	{
		while(($file = readdir($dir))!== false)
		{
			if(!is_dir($cale.$file))
			{
				echo "Nume: $file<br />";
			}
		}
	}
}
#folosire
list('');
?>
