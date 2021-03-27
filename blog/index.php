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
        <label for="menu">MENU</label>
        <div class="menu-content"> 
          <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">register</a></li>
       
        <li><a href="login.php">Login</a></li>
        
          </ul>
        </div>
   </div>
  
   </header>

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto ">
      <h1 class="mb-1">BABY BLOG</h1>
      <h4 class="mb-5">
      บทความที่น่าสนใจ
      </h4>
      <form class="form-signin">
      <a class="btn btn-primary col-sm-3" href="#about">อ่านบทความ</a>
</form>
    
  </header>

  <!-- บทความ -->
  
  <section class="content-section bg-light" id="about">
  
    <div class="container" > 
      <div class="content-section-heading">
        <h1 class="text-secondary mb-0">บทความ</h1>
        
        <?php
        // connect database 
        $db_host = "localhost";
        $db_user = "NuJErD";
        $db_password = "230144";
        $db_name = "blog";
        
        $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name); 
        $mysqli->set_charset("utf8");
        
        // check connection error 
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
        // connect success, do nothing
    }


    
    $sql = "SELECT *
              FROM articles  INNER JOIN authors 
              ON authors_id = authors.id
              WHERE publish_sts = 'Y'
             
              ";
    $result = $mysqli->query($sql);



    if (!$result) {
            echo ("Error: ". $mysqli->error);
    } else {
     

        while($row = $result->fetch_object()){ 

        echo "<div class='card mb-4'>";
        echo "<div class='card-body'>";
        echo "<h2 class='card-title'>$row->title</h2>";
        echo "<p class='card-text'>$row->body</p>";
        // echo "<a href='#' class='btn btn-primary'>Read More &rarr;</a>";
        echo "</div>";
        echo "<div class='card-footer text-muted'>";
        echo "Post on $row->create_ts";
        echo "<a href = '#'> By $row->penname</a>";
        echo "</div>";
        echo "</div>";
    }
}
    ?>
    <form class="form-signin">
        <a class="btn btn-warning btn-xl js-scroll-trigger col-sm-3" href="#page-top">กลับสู่หน้าหลัก</a>
</form>
      </div>
    </div>



    
  </section>

  <!-- Footer -->
  <!-- <footer class="footer text-center">
    <div class="container">
      <ul class="list-inline mb-5">
      <p class="text-muted small mb-0">Copyright &copy; Your Website 2019</p>
    </div>
  </footer> -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
