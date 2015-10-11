<?php
#Database connection using PDO
#Author: Patrascu Gabriel
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
 print "Error!: " . $e->getMessage() . "<br/>";
 die();
 }
 ?>
