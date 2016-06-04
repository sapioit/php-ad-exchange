<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'database';
try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
}
catch(PDOException $e) {
    echo $e->getMessage();
}
?>