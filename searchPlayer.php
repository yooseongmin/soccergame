<?php
    require_once "connectSoccerGame.php";

    $_name = $_POST["_name"];
    
    $sql = "SELECT name,team FROM MyPlayer WHERE name LIKE '%$_name%'";
    $result = $conn->query($sql);
    while($row = mysqli_fetch_array($result)){
        echo '<p>'.$row['name'].$row['team'].'</p>';
    }
  
?>