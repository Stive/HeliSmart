<?php
  session_start();
    $dbuser=$_SESSION['username'];
    $dbid= $_SESSION['userid'];  
   if(isset($_FILES['file'])){
  	$file = $_FILES['file'];
  	$type = $file['type'];
  	$size = $file['size'];
  	$tmpname = $file['tmp_name'];
  	$error = $file['error'];
  	if($error > 0){
  		echo "An error occurred please try again.";
  	}
  	else{
  		mkdir("./profile/$dbuser");
		move_uploaded_file($tmpname, "./profile/$dbuser/".$file['name']);
		$pic = $file['name'];
		$pic1 ="./profile/$dbuser/";
  		echo "Upload done";
  		$avatar = "$pic1$pic";
        require("connect.php");
        mysqli_query($con,"Update member SET avatar='$avatar' WHERE username='$dbuser'");
        header("Location: welcome.php");
  	}

  }
 ?>
