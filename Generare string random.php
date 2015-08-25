<?php 
#functie pentru generare de stringuri aleatorii
function generare($lungime = 10)
 {
    $caractere = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $sir = '';
    for ($i = 0; $i < $lungime; $i++) 
    {
        $sir .= $caractere[rand(0, strlen($caractere) - 1)];
    }
    return $sir;
}
#folosire
echo generare(7);
?>