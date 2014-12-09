<?php
#Are you fed-up of those blank profile images? why not replace empty images with popular Gravatar.
# This function allows you to quickly and easily insert Gravatars into page using PHP
function gravatar($email, $rating = false, $size = false, $default = false)
 {
	$out = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email);
	if($rating && $rating != '')
		$out .= "&amp;rating=".$rating;
	if($size && $size != '')
		$out .="&amp;size=".$size;
	if($default && $default != '')
		$out .= "&amp;default=".urlencode($default);
	echo $out;
}
/*folosire
email - Email address in gravatar
rating - rating of Gravatar(G, PG, R, X)
size - size of gravatar
default - URL of default gravatar to use or use various options : http://j.mp/SUmEq9
*/
	<img src="<?php gravatar('emailaddress@sgmail.com','G',32,'monsterid'); ?>" />
?>
