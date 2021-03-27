<?php
  session_start();

if (!isset($_SESSION['loggedin'])) {
    header("location: login.php");
} else {
    //
} 
?>

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


<?php
    
    // connect database 
    require_once('db.php');

    // check connection error 
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
        // connect success, do nothing
    }

    // select data from tables

    
      
?>

<body style="background-image:url('img/assorted-color-crayons-2078147.jpg');">

  <!-- Navigation -->
  <header>
    <div class="collapsible-menu">
        <input type="checkbox" id="menu">
        <label for="menu">Menu</label>
        <div class="menu-content"> 
          <ul>
        <li><a href="index.php">Home</a></li>
        
        
        
        <li><a href="logout.php">Log out</a></li>
          </ul>
        </div>
   </div>
   
   </header>
  <h5 class="mb-5 text-uppercase">
      บทความของ <?php 
if(isset($_SESSION['loggedin'])) {

  $user222 = $_SESSION['username'];
    $userid = $_SESSION['id']; 

    echo "$user222";

}else {
  header("location:index.php");
    
    
}
?>
  </h5>
    <!-- Page Header -->
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-lg-8 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">

                        <h5 class=" text-center text-uppercase">Add New Article</h5>
                        <form class="form-signin" method="post" action="save_article.php">

                        <div class="form-label-group">
                                

                            <div class="form-label-group">
                                 <label class="control-label col-sm-6" for="title">Title</label>
                                <input type="text" class="form-control col-sm-12" id="title" name="title"
                                    placeholder="Your Title">
                               
                            </div>

                            <div class="form-label-group">
                                <label class="control-label col-sm-6">body</label>
                                <textarea class="form-control col-sm-12" id="body" name="body" rows="7" cols="50"
                                    placeholder="Your Body"></textarea>
                                
                            </div>

                            <div class="form-label-group">
                                <label class="control-label col-sm-6" for="authors_id">Author ID</label>
                                <input type="text" class="form-control col-sm-12" id="authors_id" name="authors_id"
                                    value="<?php echo $userid;?>">
                                
                            </div>
                            <div class="form-label-group">
                                <label class="control-label col-sm-6" for="create_ts">Create Article</label>
                                    <input type="datetime" class="form-control col-sm-12" id="create_ts"
                                        name="create_ts" value="<?=date('d-m-Y H:m:s')?>">
                                    
                                </div>


                            <div class="form-label-group">
                                <!-- <label class="control-label col-sm-2" for="publish_sts">การเผยแพร่บทความ</label> -->
                                <input type="radio" id="publish_sts" name="publish_sts" value="N" checked>ไม่เผยแพร่
                                <input type="radio" id="publish_sts" name="publish_sts" value="Y" checked>เผยแพร่
                            </div>

                            <input class="btn btn-lg btn-success btn-block text-uppercase" type="submit" value="Add article">

                            <hr class="my-4">

                            <input class="btn btn-lg btn-danger btn-block text-uppercase" type="reset" value="Reset">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>
</body>

</html>