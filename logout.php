<?php 
session_start();
   /* error_reporting(E_ALL ^ E_NOTICE); */
  $dbuser=$_SESSION['username'];
  $dbid= $_SESSION['userid'];
 ?>
<html>
<head>
	<title>Log out</title>
</head>
<body>
	<?php 
		if($dbuser){
			session_destroy();
			echo " You have been logged out";
			 header("Location: index.php");

		}
		else{
			header("Location: index.php");
		}

	 ?>

</body>
</html>