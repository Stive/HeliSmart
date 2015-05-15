<!DOCTYPE html>
<html lang="en">
 <?php
    error_reporting(E_ALL ^ E_NOTICE); 
    session_start();
  ?>
  <head>
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
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="container">
          <style type="text/css">
            .width1{
              width: 500px;
            }
          </style>
          <div class="margin">
              <div class="container">
                <div class="container">

                  <div class="row">
                      <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                      <form role="form" method="POST" action="register_script.php">
                        <h2>Please Sign Up <small>It's free and always will be.</small></h2>
                        <hr class="colorgraph">
                        <div class="row">
                          <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                          <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6">

                            <div class="form-group">
                              <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                  <select class="form-control input-lg" id="sel1" placeholder="Gender" name="gender">
                                    <option value="0">Gender</option>
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                  </select>
                                  <br>
                            </div>
                          </div>
                          
                        </div>
                        </div>
                        <div class="form-group">
                          <input type="text" onblur="checkusername()" onkeyup="restrict('username')" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="3">
                          <span id="unamestatus"></span>
                        </div>
                        <div class="form-group">
                          <input type="email" name="email" id="email" onkeyup="restrict('email')" class="form-control input-lg" placeholder="Email Address" tabindex="4">
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                              <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                            </div>
                          </div>
                        </div>                        
                        <hr class="colorgraph">
                        <div class="row">
                          <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
                  </div>
                  <div class="margin1"></div>
                </div>
                <?php 
                  include "register_script.php";
                 ?>


      <div class="container">
      <!-- Example row of columns -->
      
      </div>
      <!-- Example row of columns -->
      
    </div>


  <footer>
    <p>&copy; RevaConnect 2015</p>
  </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>