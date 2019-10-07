<?php
    require_once "connectDataBase.php";

    $name = $_POST["name"];

    
    $sql = "SELECT * FROM SoccerGame WHERE _name = '$name'";

    $result = $conn->query($sql);
    $result_text = "[";
    $i = 0 ;

    $row = mysqli_fetch_row($result);




   
   
   echo print_r($row);

?>