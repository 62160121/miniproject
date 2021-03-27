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

<body id="page-top">
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

   <!-- Header -->
   <header class="masthead d-flex">
    <div class="container text-center my-auto ">
      <h1 class="mb-1">BABY BLOG</h1>
      <h2 class="mb-5 text-uppercase">
      บทความของ <?php session_start();
if(!isset($_SESSION['loggedin'])) {

    header("location:index.php");

}else {

    $user222 = $_SESSION['username'];

    echo "$user222";
}
?>
      </h2>
      <form class="form-signin">
      <a class="btn btn-primary col-sm-3" href="index.php">อ่านบทความ</a>
</form>
    </div>
    <div class="overlay"></div>
  </header>

  <section class="content-section bg-light" id="about">

  
    <div class="container" > 
      <div class="content-section-heading">
      <form class="form-signin">
    <hr class="my-4">
        <a class="btn btn-info btn-xl js-scroll-trigger col-sm-2" href="newarticle.php">เพิ่มบทความใหม่</a>
        
        <!-- <a class="btn btn-warning btn-xl js-scroll-trigger col-sm-2" href="newarticle.php">เพิ่มบทความ</a> -->
        <hr class="my-4">
        </form>
        <h1 class="text-secondary mb-0">บทความ</h1>


  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
  
  <?php
    // connect database 
  require_once('db.php');

    // check connection error 
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
        // connect success, do nothing
    }

    
    $sql = "SELECT *
    FROM authors    INNER JOIN articles 
     ON authors_id = authors.id
    WHERE username = '$user222'
    
    ";
    $result = $mysqli->query($sql);

    if (!$result) {
            echo ("Error: ". $mysqli->error);
    } else {
	
        while($row = $result->fetch_object()){ //????????????
           
           echo "<div class='card mb-4'>" ;
           echo "<div class='card-body'>" ;
           echo "<h2 class='card-title'>$row->title</h2>";
           echo "<p class='card-text'>$row->body</p>";
           echo "</div>";
           echo "<div class='card-footer text-muted'>";
           echo "Create on $row->create_ts by" ;
           echo "<a href='#'>$row->authors_id</a>";
          //  Publish $row->publish_sts
           echo  "<a href='edit_authors.php?ids=$row->id' class='edit_btn' ></a>" ;
          
          
           echo "</div>" ;
           echo "</div>" ;
     
      
       } 
    }
    ?>

   
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
