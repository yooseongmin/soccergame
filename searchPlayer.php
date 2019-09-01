<?php
    require_once "connectSoccerGame.php";

    $_name = $_POST["_name"];
    
    $sql = "SELECT name,team FROM MyPlayer WHERE name LIKE '%$_name%'";
    $result = $conn->query($sql);
    $result_text = "[";
    $i = 0;
    while($row = mysqli_fetch_array($result)){
        if($i>0){
            $result_text= $result_text.",";
        }
        $result_text = $result_text.json_encode($row);
        $i++;
    }
    $result_text = $result_text."]";
    echo $result_text;
  
?>