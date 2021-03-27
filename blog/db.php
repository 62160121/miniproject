<?php

    // connect database 
    $db_host = "localhost";
    $db_user = "NuJErD";
    $db_password = "230144";
    $db_name = "blog";

    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
    $mysqli->set_charset("utf8");

?>