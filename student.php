<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
    session_start();
    error_reporting(E_ALL^E_NOTICE);
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
          <a class="navbar-brand" href="index.php">HeliSmart</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="col-md-8">
          <h1>Howdy</h1>
          <p style="margin-top:40px;">This is a Web application to make your life simpler.<br>
            Register today to experience all the features.<br>
            The whole application is hosted on hp helion cloud and was built for the HP Code off 2015.<br>
          </p>
          <p style="margin-top:20px;margin-bottom:40px;"><a class="btn btn-primary btn-lg" href="register.php" role="button">Register &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Sign In</h2>
        <div class="well">

                          <form id="loginForm" method="POST" action="login.php" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label>
                              </div>
                              <p class="help-block" style="font-size:15px;color:red;"><span id="error">
                                <?php 
                                  include "login.php";
                                 ?>
                              </span></p>
                              <button type="submit" class="btn btn-success btn-block" name='loginbtn' style="margin-top:20px;">Login</button>
                          </form>
                      </div>
      </div>
      </div>
      <div class="margin1"></div>
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