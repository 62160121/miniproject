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
    <script src="validation.js"></script>
</head>



<body onload="document.registform.username.focus();" style="background-image:url('img/assorted-color-crayons-2078147.jpg');">

    <!-- Navigation -->
    <header>
    <div class="collapsible-menu">
        <input type="checkbox" id="menu">
        <label for="menu">Menu</label>
        <div class="menu-content"> 
          <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">register</a></li>
        
        <li><a href="login.php">Login</a></li>
        
          </ul>
        </div>
   </div>
   
   </header>

    <!-- Page Header -->
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-lg-8 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                    <h5 class=" text-center text-uppercase">Author registration</h5>
                        <form class="form-signin" name="registform" method="post" action="save.php"
                            onSubmit="return formValidation();">


                            <div class="form-label-group">
                            <label class="control-label col-sm-6" for="username">Username</label>
                                <input type="text" class="form-control col-sm-12" id="username" name="username"
                                    placeholder="Your Username">
                                
                            </div>

                            <div class="form-label-group">
                            <label class="control-label col-sm-6" for="passwd">Password</label>
                                <input type="password" class="form-control col-sm-12" id="passwd" name="passwd"
                                    placeholder="Your Password">
                                
                            </div>

                            <div class="form-label-group">
                            <label class="control-label col-sm-6" for="name">Name</label>
                                <input type="text" class="form-control col-sm-12" id="name" name="name"
                                    placeholder="Your Name">
                                
                            </div>

                            <div class="form-label-group"> 
                            <label class="control-label col-sm-6" for="penname">Penname</label>
                                <input type="text" class="form-control col-sm-12" id="penname" name="penname"
                                    placeholder="Your PenName">
                               
                            </div>

                            <div class="form-label-group"> 
                            <label class="control-label col-sm-6" for="email">E-mail</label>
                                <input type="text" class="form-control col-sm-12" id="email" name="email"
                                    placeholder="Your Email">
                               
                            </div>

                            <input class="btn btn-lg btn-success btn-block text-uppercase" type="submit" value="Submit">
                         
                         <hr class="my-4"> 
                         <!-- <a class="btn btn-lg btn-danger btn-block text-uppercase">Reset</a> -->
                         <input class="btn btn-lg btn-danger btn-block text-uppercase" type="reset" value="Reset">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>