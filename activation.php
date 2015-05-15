<?php 
   $user = $_GET['user'];
   $code1 = $_GET['code'];

   if($user && $code){
   require 'connect.php';
   $query = mysqli_query($con, "SELECT * FROM member WHERE username='$user'");
   $numrows = mysqli_num_rows($query);
	   if($numrows == 1){
	   	$row = mysqli_fetch_assoc($query);
	   	$code = $row['code'];
	   	if($code == $code1){
	   	 mysqli_query($con,"Update member SET active='1' WHERE username='$user'");
	   	}
	   }
   }

 ?>