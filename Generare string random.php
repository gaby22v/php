<?php 
#Function for random string
function generate($l = 10)
 {
    $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string = '';
    for ($i = 0; $i < $l; $i++) 
    {
        $string .= $char[rand(0, strlen($char) - 1)];
    }
    return $string;
}
#how to use
echo generate(7);
?>
