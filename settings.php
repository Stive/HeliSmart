<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
    session_start();
    error_reporting(E_ALL^E_NOTICE);
    $dbuser=$_SESSION['username'];
    $dbid= $_SESSION['userid'];
    ?>
    <?php
        if($dbuser){
        }
        else{
          header("Location: index.php");
        }
        require("connect.php");
        $query = mysqli_query($con, "SELECT * FROM member WHERE username='$dbuser'");
        $row = mysqli_fetch_assoc($query);
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $avatar=$row['avatar'];

        ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HeliSmart</title>
    <link rel="icon" href="favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sidebar.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="padding:0px;">
    <div class="row">
    <div class="absolute-wrapper"> </div>
    <!-- Menu -->
    <div class="side-menu">
    
    <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Hamburger -->
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Brand -->
            <div class="brand-name-wrapper">
                <a class="navbar-brand" href="member.php">
                    <b>HeliSmart </b>
                </a>
            </div>

            <!-- Search -->
            <a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">
                <span class="glyphicon glyphicon-search"></span>
            </a>

            <!-- Search body -->
            <div id="search" class="panel-collapse collapse">
                <div class="panel-body">
                    <form class="navbar-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">
            <li><img src="<?php echo $avatar; ?>" style="width:150px;margin-left:60px;"></li>
            <li class="visible-xs visible-sm"><a href="#" style="color:black;"><span class="glyphicon glyphicon-user"></span><b><?php echo "     $firstname $lastname"; ?></b></a></li>

            <li><a href="member.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-heart"></span> Friends</a></li>

            <!-- Dropdown-->
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl1">
                    <span class="glyphicon glyphicon-book"></span> Subjects <span class="caret"></span>
                </a>

                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Electronics</a></li>
                            <li><a href="#" onmousedown="openTerms()">Chemistry</a></li>
                            <li><a href="#">Physics</a></li>

                            <!-- Dropdown level 2 -->
                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#dropdown-lvl2">
                                    <span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>
                                </a>
                                <div id="dropdown-lvl2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li><a href="#" id="settings"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>

            <li><a href="logout.php"><span class="glyphicon glyphicon-lock"></span>Logout</a></li>

        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
    
</div>
    <div class="container-fluid" id="subject1">
      <div class="hidden-xs hidden-sm">
            <div class="jumbotron" class="hidden-xs" class="hidden-sm" style="margin-left:250px;background-color:#AA01B6;height:200px;margin-bottom:10px;">
              <h2 style="color:white;margin-top:50px;">Settings<br>
               <small style="color:white;float:right;"><?php echo "$firstname $lastname"; ?></small>
              </h2>

            </div>
        </div>

        <div class="side-body" style="padding:0px;">
            <div class="jumbotron"  style="padding:20px;border:solid 1px;border-color: #A6A6A6;margin-bottom:10px;">
              <h3><b>Edit settings as preffered.</b></h3>
              <form id="loginForm" method="POST" action="settings.php" novalidate="novalidate">
                <div class="form-group" style="width:200px;">
                    <label for="username" class="control-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="" required="" title="Please enter you First Name" placeholder="<?php echo "$firstname"; ?>">
                </div>
                <div class="form-group" style="width:200px;">
                    <label for="username" class="control-label">Last Name</label>
                    <input type="text" class="form-control" id="username" name="lastname" value="" required="" title="Please enter you Last Name" placeholder="<?php echo "$lastname"; ?>">
                </div>
                <div class="form-group" style="width:200px;">
                    <label for="username" class="control-label">Password</label>
                    <input type="password" class="form-control" id="username" name="password" value="" required="" title="Please enter you Password" placeholder="Password">
                </div>
                <div class="form-group" style="width:200px;">
                    <label for="username" class="control-label">Retype Password</label>
                    <input type="password" class="form-control" id="username" name="repassword" value="" required="" title="Please retype your Password." placeholder="Password">
                </div>
                <button type="submit" class="btn btn-success btn-block" name='loginbtn' style="margin-top:20px;width:100px;">Submit</button>
              </form>
              <?php 
                $firstname=$_POST['firstname'];
                $lastname=$_POST['lastname'];
                $password=$_POST['password'];
                $repassword=$_POST['repassword'];
                if($firstname){
                    if($lastname){
                        if($password){
                            if($password == $repassword){
                                $password = md5(md5("@lm1".$password."@lm1"));
                                $firstname = ucfirst($firstname);
                                $lastname = ucfirst($lastname);
                                require("connect.php");
                                mysqli_query($con,"Update member SET password='$password' WHERE username='$dbuser'");
                                mysqli_query($con,"Update member SET lastname='$lastname' WHERE username='$dbuser'");
                                mysqli_query($con,"Update member SET firstname='$firstname' WHERE username='$dbuser'");
                                echo "The settings are sucessfully edited.";


                            }
                            else{
                              echo "Please fill in all details.";
                            }

                        }
                        else{
                            echo "Please fill in all details.";
                        }

                    }
                    else{
                        echo "Please fill in all details.";

                    }

                }
                else{
                    echo "Please fill in all details.";
                }

               ?>
              
            </div>

               
        </div>
      </div>
    </div>
    <footer>
      <p>&copy; RevaConnect 2015</p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/sidebar.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>