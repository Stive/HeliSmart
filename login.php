<?php
  include "redirect.php";
          
  $usern = $_POST['username'];
  $pass = $_POST['password'];
  if ($usern){
   if($pass){

     require("connect.php");
     $pass = md5(md5("@lm1".$pass."@lm1"));
     $query = mysqli_query($con, "SELECT * FROM myguests WHERE username='$usern'");
     $numrows = mysqli_num_rows($query);

          if ($numrows == 1){

              $row = mysqli_fetch_assoc($query);
              echo $row;
              $dbpass = $row['password'];
              $dbuser = $row['username'];
              if ($dbpass."52" == $pass){
                      $_SESSION['username'] = $dbuser;
                      $_SESSION['userid'] = $dbid;
                      if(true){
                       redirect::to('member.php');
                      }
                      else{
                        header("Location: welcome.php");
                      }
                      
                      
              
         }
         else {
          echo "Invalid Username or Password.";
         }
       }
   else{
      echo "Invalid Username or Password.";
   }
  }
  else{
    echo "Please enter a password.";
  }
}else{

}


?>