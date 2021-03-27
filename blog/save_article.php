<?php
  session_start();
if (!isset($_SESSION['loggedin'])) {
    header("location: login.php");
} else {
    //
} 
?>

<?php
    // connect database 
    require_once('db.php');

    // echo"<pre>";
      
    // print_r($_POST);

    // echo"</pre>";
     

     $title = $_POST['title'];
     $body = $_POST['body'];
    //  $create_sts = $_POST['create_sts'];
     $authors_id = $_POST['authors_id'];
     $publish_sts = $_POST['publish_sts'];
     $id = $_POST['id'];

     $sql = "INSERT 
            INTO articles (title, body,authors_id, publish_sts,id) 
            VALUES ($title, $body , $authors_id  ,$publish_sts,$id)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssss", $title, $body,$authors_id ,  $publish_sts,$id);
    $stmt->execute();

 header("location: authors.php");
   