<?php
    $servername = "localhost";
    $username = "cocoa900";
    $password = "a@741852963";
    $dbname = "cocoa900";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("연결 실패 : ".$conn->connect_error);
    }

?>