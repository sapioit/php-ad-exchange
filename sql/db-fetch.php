<?php
include('db-config.php');

$Fruitname				= 	"Apple";   		//Fruit name
$STM = $dbh->prepare("SELECT  `Fruitname`, FORMAT(AVG(`Rate`),2) FROM fruitsratelist WHERE Fruitname=:Fruitname");
$STM->bindParam(':Fruitname', $Fruitname);
$STM->execute();		
	
$STMrecords = $STM->fetch();
  echo $row[0];
  echo $row[1]; 
?> 