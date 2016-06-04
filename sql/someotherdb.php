<?php

// 
// PHP MySQLi
// 

// Connecting
$db = new mysqli('localhost', 'user', 'pass', 'demo');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

// Querying
$sql = <<<SQL
    SELECT *
    FROM `users`
    WHERE `live` = 1 
SQL;

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

// Output query results
while($row = $result->fetch_assoc()){
    echo $row['username'] . '<br />';
}

// Number of returned rows
echo 'Total results: ' . $result->num_rows;

// Number of affected rows
echo 'Total rows updated: ' . $db->affected_rows;

// Free result
$result->free();

// Escaping characters
$db->real_escape_string('This is an unescaped "string"');
$db->escape_string('This is an unescape "string"');

// Close that connection
$db->close();

// 
// Prepared Statements
// 

// Define a statement
$statment = $db->prepare("SELECT `name` FROM `users` WHERE `username` = ?");
/**/$statment = $db->prepare("SELECT `name`, `height`, `age` FROM `users` WHERE `username` = ?");

// Bind parameters
$name = 'Bob';
$statement->bind_param('s', $name); // s for string
/**/$statement->bind_param('d', $height); // d for double
/**/$statement->bind_param('i', $age); // i for int
/**/$statement->bind_param('sdi', $name, $height, $age); 

// Execute the statement
$statement->execute();

// Iterating over results
$statement->bind_result($returned_name);

while($statement->fetch()){
    echo $returned_name . '<br />';
}

// Close statement

$statement->free_result();


?>