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
        }
        require("connect.php");
        $query = mysqli_query($con, "SELECT * FROM myguests WHERE username='$dbuser'");
        $row = mysqli_fetch_assoc($query);
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];

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
                <a class="navbar-brand" href="#">
                    <b>HeliSmart</b>
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
            <li><a href="vr.html"><span class="glyphicon glyphicon-heart"></span> Virtual Reality</a></li>
            <li><a href="core.html"><span class="glyphicon glyphicon-heart"></span> Heart Rate</a></li>
            <li><a href="settings.php" id="settings"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>

            <li><a href="logout.php"><span class="glyphicon glyphicon-lock"></span> Logout</a></li>

        </ul>
        <script type="text/javascript">
            var requestURL = "https://api.idolondemand.com/1/api/sync/recognizespeech/v1"            
            $.post( requestURL, { apikey: "8e30aace-b942-4ff6-b392-6201f6653f14", url : "https://www.idolondemand.com/sample-content/videos/hpnext.mp4", language:"en-US", interval: -1 });
        </script>
    </div><!-- /.navbar-collapse -->
</nav>
    
</div>

    <!-- Main Content -->
    <div class="container-fluid" id="start">
      <?php 
        include "startpage.php";
       ?>
        
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