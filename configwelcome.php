<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$hostname = 'localhost';
$username = 'root';
$password = 'CarolJeandre786';
$dbname = 'testx';
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli($hostname, $username, $password, $dbname);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>