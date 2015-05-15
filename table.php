<?php

require('vendor/autoload.php');
$services = getenv('VCAP_SERVICES');
$json = json_decode($services, TRUE);
$dbname = $json['mysql'][0]['credentials']['name'];
$hostname = $json['mysql'][0]['credentials']['hostname'];
$user = $json['mysql'][0]['credentials']['user'];
$password = $json['mysql'][0]['credentials']['password'];
$port = $json['mysql'][0]['credentials']['port'];
$conn = mysqli_connect($hostname, $user, $password, $dbname, $port);
// sql to create table
$sql = "CREATE TABLE MyGuests (
userid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
email VARCHAR(100) NOT NULL,
gender VARCHAR(30) NOT NULL,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>