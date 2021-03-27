<?php

require_once('db.php');

    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
    $name = $_POST['name'];
    $penname = $_POST['penname'];
    $email = $_POST['email'];

    $sql = "INSERT 
            INTO authors (username, passwd,name,penname,email) 
            VALUES ( ?,?,?,?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssss",$username,md5($passwd),$name,$penname,$email);
    $stmt->execute();

    header("location: login.php");