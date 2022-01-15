<?php

try

{

$pdo= new PDO("mysql:host=127.0.0.1;dbname=differenziata",'root','');

$statement= $pdo->prepare("SELECT * FROM settimana");

$statement->execute();

var_dump($statement->fetchAll(PDO::FETCH_OBJ));


}catch (PDOException){

  die('Could not connect');

}




?>
