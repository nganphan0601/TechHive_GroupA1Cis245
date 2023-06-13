<?php //connect.php
 require_once 'login.php'; //call once only

 try
 {
//try to connect to database using login.php 
 $pdo = new PDO($attr, $user, $pass, $opts);
 }
//if cannot connnect, throw exception
 catch (PDOException $e)
 {
  throw new PDOException($e->getMessage(), (int)$e->getCode());
 }
?>

