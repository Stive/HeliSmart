<?php
    
	$firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordcon = $_POST['password_confirmation'];
    if($firstname == "" || $lastname == "" || $gender == "0" || $username == "" || $email == "" || $password == "" || $passwordcon == ""){
        echo "Please fill in all details.";
    }
    else{
        if($password == $passwordcon){
            $firstname = ucfirst($firstname);
            $lastname = ucfirst($lastname);
            require("connect.php");
            $query = mysqli_query($con, "SELECT * FROM myguests WHERE username='$username'");
            $numrows = $query->num_rows;
            if($numrows == 0){
                $password = md5(md5("@lm1".$password."@lm1"));
                $code = md5(rand());
                mysqli_query($con, "INSERT INTO myguests VALUES (

                '', '$username', '$password', '$email', '$gender','$firstname','$lastname'

                )");
                header("Location: login.php");
                echo "Account created please login to coninue.";
            }
            else{
                echo "Username is already in use.";
            }

        }
        else{
            echo "Passwords do not match.";
        }
        
    }


 ?>