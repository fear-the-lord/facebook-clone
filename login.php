<?php
session_start();
if(isset($_SESSION['name']))
{
    header('Location: profile.php');
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body style="background-color:#34495e">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Friends</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        
        
      </div>
    </nav>

    <div class="container">
        <div class="row mt-100">
            <div class="col-md-8">
                <h1 class="ex-large">Life is too long and boring. Let's be friends.</h1>
            </div>
            <div class="col-md-4">
                <h3 class="text-white">Login Here</h3>
                <?php
                if(isset($_GET['msg']))
                {
                    echo "<p style='color:red'>Incorrect Username/password</p>";
                }

                ?>
                <form class="form" action="login_validation.php" method="POST">
                    <label class="text-white">Email: </label><br>
                    <input type="email" class="form-control" name="user_ka_email"><br>
                    <label class="text-white">Password: </label><br>
                    <input type="password" class="form-control" name="user_ka_password"><br>
                    <input type="submit" value="Login" class="btn btn-danger btn-block btn-lg"> 
                </form>
                <p class="text-white">Don't have an account? <a href="register.php">Create One</a></p>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
