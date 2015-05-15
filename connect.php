 <?php

require('vendor/autoload.php');
$services = getenv('VCAP_SERVICES');
$json = json_decode($services, TRUE);
$dbname = $json['mysql'][0]['credentials']['name'];
$hostname = $json['mysql'][0]['credentials']['hostname'];
$user = $json['mysql'][0]['credentials']['user'];
$password = $json['mysql'][0]['credentials']['password'];
$port = $json['mysql'][0]['credentials']['port'];
$con = mysqli_connect($hostname, $user, $password, $dbname, $port);

?>
<?php 
	global $con;
	if(mysqli_connect_errno()){
		echo mysqli_connect_error();
		exit();
	}
	else{
	}

 ?>