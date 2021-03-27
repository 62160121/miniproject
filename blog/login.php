<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <title>BABYBLOG</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap1.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap core js -->
    <script src="vendor/jquery/jquery1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap1.bundle.min.js"></script>

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">  
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-image:url('img/assorted-color-crayons-2078147.jpg');">

  <!-- Navigation -->
  <header>
    <div class="collapsible-menu">
        <input type="checkbox" id="menu">
        <label for="menu">Menu</label>
        <div class="menu-content"> 
          <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">register</a></li>
        
        
        
          </ul>
        </div>
   </div>
  
   </header>

  

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="text-center text-uppercase">LOG IN</h5>
                        <form class="form-signin" method="post" action="login_db.php">
                            <div class="form-label-group">
                             <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username" required
                                   >
                               
                            </div>

                            <div class="form-label-group">
                            <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    required>
                                
                            </div>

                            
                            <div class="btn btn-lg btn-success btn-block text-uppercase"><button class="btn" type="submit" name="loggedin"  >Sign in</button>
                            
                            </div>
                            

                            <hr class="my-4">

                            <a class="btn btn-lg btn-warning btn-block text-uppercase" href="register.php">Register</a>
                    </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <?php session_start();

if (isset($_SESSION['loggedin'])) {
    header("location: authors.php");
}?>
   
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>
</body>


</html>
