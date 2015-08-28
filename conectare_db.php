<?php
#Conectare la baza de date folosind PDO
#Autor: Patrascu Gabriel
#Schimbati numele bazei de date, utilizator si parola
 $host_name = "localhost"; 
 $database = "zend"; 
 $username = "zend";
 $password = "zend";
 try 
 {
 $conexiune = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
 }
  catch (PDOException $e)
   {
 print "Eroare!: " . $e->getMessage() . "<br/>";
 die();
 }
 ?>