<?php
session_start();
if(!(isset($_SESSION['name'])))
{
    header('Location: login.php');
}
?>
<?php
//conecting to db
include("includes/dbconnect.php");
//fetching data
$user_id=$_SESSION['user_id'];
$query="SELECT * FROM `users` WHERE `user_id`='$user_id'";

$result=mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($result);
$profile_pic=$row['profile_pic'];

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

  <body>

    <?php include("includes/navbar.php"); ?>
    <div class="container">
    	<div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <img src="img/<?php echo $profile_pic; ?>" style="width:100%;height:250px">
                    </div>
                    <div class="col-md-12 mt-25">
                        <div class="card">
                            <h5 class="text-center">Profile Menu</h5>
                            <ul>
                                <li>Home</li>
                                <li><a href="view_users.php">View Users</a></li>
                                <li>View Following</li>
                                <li>View Messages</li>
                                <li>Edit Profile</li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="p-10">
                                <textarea class="form-control" placeholder="What's on your mind"></textarea><br>
                                <input type="submit" value="Post" class="btn btn-danger pull-right"> 
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 mt-25">
                        <div class="card">
                            <p class="p-10">This is my first news feed. Have a look</p>
                            <img src="img/hangover.jpg" style="width:100%;height:300px">
                        </div>
                    </div>
                    <div class="col-md-12 mt-25">
                        <div class="card">
                            <p class="p-10">This is my first news feed. Have a look</p>
                            <img src="img/lotr.jpg" style="width:100%;height:300px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <h5>Friends Online</h5>
                </div>
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
