<?php
    require_once "connectSoccerGame.php";

    $name = $_POST["name"];
    $sql = "SELECT * From Myplayer WHERE name = '$name'";

    $result = $conn -> query($sql);

    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);

?>