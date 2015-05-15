
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
    session_start();
    error_reporting(E_ALL^E_NOTICE);
    $dbuser=$_SESSION['username'];
    $dbid= $_SESSION['userid'];
    if($dbuser){
        }
        else{
          header("Location: index.php");
        }
        require("connect.php");
        $query = mysqli_query($con, "SELECT * FROM member WHERE username='$dbuser'");
        mysqli_query($con,"Update member SET firstopen='1' WHERE username='$dbuser'");
        $row = mysqli_fetch_assoc($query);
                $avatar = $row['avatar'];
                $lastname = $row['lastname'];
                $branch = $row['branch'];
                $sem = $row['sem'];
                $lastread=$row['lastread'];
                $lasturl=$row['lasturl'];
                $active=$row['active'];
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RevaConnect</title>
    <link rel="icon" href="favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">RevaConnect</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container">
      <div class="jumbotron" style="border-color: #A6A6A6;border:solid 1px;margin-top:30px;">
        <h2 style="margin-top:0px;">Profile Picture</h2>
        <h3 style="color:#929292;">I believe that this guy looks like <b>Justin Bieber</b>, Give your profile you're image.</h3>
        <div class="container" style="margin-top:25px;">
          <div class="row" style="margin-left:50px;">
            <div class="col-lg-4"></div>
            <div class="col-lg-4"><img src="<?php echo $avatar;?>" style="width:200px;"></div>
            <div class="col-lg-4"></div>
            
          </div>
          <div class="row" style="margin-top:25px;">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
              <form role="form" method="POST" action="upload.php" enctype="multipart/form-data">
                <input type="file" name="file">
                <button type="submit" class="btn btn-success btn-block" name='submit' style="margin-top:20px;">Upload</button>
                
              </form>
              
            </div>
            <div class="col-lg-4"></div>
            
          </div>
          <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4"><a style="float:right;" href="member.php" class="btn btn-info ">Next</a></div>
          </div>
          
        </div>
      </div>  
    </div>

    <div class="container">
      <!-- Example row of columns -->
      
      </div>

      <hr>

      <footer>
        <p>&copy; RevaConnect 2015</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>