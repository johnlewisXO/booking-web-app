<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$hostname = 'localhost';
$username = 'root';
$password = 'CarolJeandre786';
$dbname = 'testx';
 
/* Attempt to connect to MySQL database */
$conn = new mysqli($hostname, $username, $password, $dbname);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}


?>