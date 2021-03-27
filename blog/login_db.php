<?php
session_start();



if(isset($_POST['loggedin'])){
    $username =  $_POST['username'];
    $passwd =  $_POST['password'];
}

$DBServer = 'localhost';
$DBUser   = 'NuJErD';
$DBPass   = '230144';
$DBName   = 'blog';
// 
$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
$sql = "SELECT *
        FROM authors
        WHERE username='$username' AND passwd=md5('$passwd')";
$result = $conn->query($sql);
// echo $sql;
//if ($_POST['username'] == 'wittawas' and $_POST['password'] == '12345')
if ($result->num_rows == 1) {
   
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['id'] = $result->fetch_object()->id;
    header("location: authors.php");
    exit(0);
} else {
   header("location: login.php");
}
?>