<?php
  session_start();

  if(isset($_SESSION['username']))
  {

?>
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

     <style>
      

      #Buttons:hover
      {
        background-color: #326836;
        color: white;
      }

      h1 a:hover
      {
        color: white !important;
        text-shadow: -1px 0 #326836, 0 1px #326836, 1px 0 #326836, 0 -1px #326836;
      }

    </style>

    <title>Dashboard</title>

  </head>

  <body>

    <div class="w3-sidebar w3-light-grey w3-bar-block shadow" style="width:15%">
      <h3 class="w3-bar-item">Dashboard</h3>
      <a href="work.php" class="w3-bar-item" id="Buttons" onmouseover='hoverbtn()' onmouseout='hoveroutbtn()'>
        <img id="cform" style="margin-top:-0.6%;" src="6.png" width="20" height="20"> Challan Form
      </a>
      <a href="certificatelogin.php" class="w3-bar-item" id="Buttons" onmouseover='hoverbtn2()' onmouseout='hoveroutbtn2()'>
        <img id="cert" style="margin-top:-0.6%;" src="7.png" width="20" height="20"> Certificate 
      </a>
        
    </div>

    <!-- Page Content -->
    <div style="margin-left:15%">

      <div class="w3-container w3-white shadow">
        <!-- #326836 -->
        <h1><a href="https://yetp.pk" style="text-decoration: none; color: #326836;">YETP</a></h1>
      </div>
      <div class="container">

      </div>

    </div>  

    <script>

      function hoverbtn()
      {
        // document.getElementById("challanid").style.transitionDuration  = '0.3s';
        // document.getElementById("challanid").style.backgroundColor = '#326836';
        document.getElementById("cform").style.transitionDuration  = '0.3s';
        document.getElementById("cform").style.filter = 'invert(100%)';
      }
      function hoveroutbtn()
      {
        // document.getElementById("challanid").style.backgroundColor = '#F1F1F1';
        document.getElementById("cform").style.filter = 'invert(0%)';
      }
      function hoverbtn2()
      {
        // document.getElementById("challanid").style.transitionDuration  = '0.3s';
        // document.getElementById("challanid").style.backgroundColor = '#326836';
        document.getElementById("cert").style.transitionDuration  = '0.3s';
        document.getElementById("cert").style.filter = 'invert(100%)';
      }
      function hoveroutbtn2()
      {
        // document.getElementById("challanid").style.backgroundColor = '#F1F1F1';
        document.getElementById("cert").style.filter = 'invert(0%)';
      }

    </script>


  </body>

</html> 
<?php   
  }
  else
  {
    session_unset();
    header('location:loginpage.php');
  }
?>