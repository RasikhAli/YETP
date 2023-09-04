<?php
  session_start();
  session_unset();
?>

<script>
  function setbackgroundimage()
  {
    document.getElementById("bodybg").style.backgroundSize = "cover"; 
    document.getElementById("bodybg").style.backgroundImage = "url('https://i.pinimg.com/originals/c4/b4/07/c4b407781f3b73b4390b0fc1ba237241.jpg')";
  }
</script>

<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="LoginPage/fonts/icomoon/style.css">

    <link rel="stylesheet" href="LoginPage/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="LoginPage/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="LoginPage/css/style.css">

    <title>Login Page</title>

  </head>

  <body id="bodybg">

    <div class="content" >
      <?php
        if(!isset($_POST['submitbtn']) && !isset($_SESSION['username']))
        {
      ?>
      <!--style="background-image: url(https://www.sliit.lk/wp-content/uploads/2018/02/minimalizm-gradient-background.jpg); background-size: cover; height:100vh;"-->

      <div class="container shadow" style="background-color: white;">

        <div class="row">
          
          <div class="col-md-12" style="">
                      
            <div style="width:11%; float: left; margin-left: 25%; margin-top: 1%;">
              <!-- IMG -->
              <img src="logoPNGYETP.png" alt="Image" width="120" height="120" class="img-fluid">
            </div>
            <div style="width:50%; float: left; margin-left: 1%;margin-top: 5%;">
              <!-- TEXT --> 
              <h4 style="color: #326836;font-weight: bold;">YOUTH EMPOWERMENT TRAINING PROGRAM</h4>
            </div>

          </div>

          <div class="col-md-12">

            <hr style="border: 1px solid silver;">

          </div>

          <div class="col-md-6 order-md-2">
            <img src="3.jpg" alt="Image" class="img-fluid" style="margin-top: 1%;">
          </div>
        
        
          <div class="col-md-6 contents">
          
            <div class="row justify-content-center">
            
              <div class="col-md-8">
                <br>
                <div class="mb-4">
                  <h3>Sign in to <a href="https://yetp.pk" style="text-decoration: none; color: #326836;">YETP</a></h3>
                  <p class="mb-4" style="font-weight: bold;"> Only for authorised users</p>
                </div>
              
                <form action="" method="post">

                  <div class="form-group first">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                  </div>

                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                  </div>
                
                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">I Agree to the Terms & Conditions</span>
                      <input type="checkbox" checked="checked" required/>
                      <div class="control__indicator"></div>
                    </label>
                  </div>

                  <input type="submit" value="Log In" class="btn text-white btn-block btn-primary shadow-sm" name="submitbtn">
                  <br>

                  <!-- <span class="d-block text-left my-4 text-muted"> or sign in with</span>
                
                  <div class="social-login">
                    <a href="#" class="facebook">
                      <span class="icon-facebook mr-3"></span> 
                    </a>
                    <a href="#" class="twitter">
                      <span class="icon-twitter mr-3"></span> 
                    </a>
                    <a href="#" class="google">
                      <span class="icon-google mr-3"></span> 
                    </a> 
                  </div> -->

                </form>
              </div>
            </div>
          </div>

        </div>

      </div>
      <?php  
        }
        else if(isset($_POST['submitbtn']))
        {
          $user = $_POST['username'];
          $pass = $_POST['password'];

          require 'connection.php';

          $query = "SELECT * FROM `logininfo`";
          $result = mysqli_query($conn, $query);

          while($row = mysqli_fetch_array($result))
          {
            if($row['Username'] == $user)
            {
              if($row['Password'] == $pass)
              {
                if(!isset($_SESSION['username']))
                {
                  $_SESSION['username'] = $user;
                  header("location:dashboard.php");
                }
              }
              else
              {
                session_unset();
                header("location:loginpage.php");
              }
            }
            else
            {
              session_unset();
              header("location:loginpage.php");
            }
          }
        }
      ?>
      
    </div>
  
    <script src="LoginPage/js/jquery-3.3.1.min.js"></script>
    <script src="LoginPage/js/popper.min.js"></script>
    <script src="LoginPage/js/bootstrap.min.js"></script>
    <script src="LoginPage/js/main.js"></script>

  </body>

</html>