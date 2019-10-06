<?php
    require_once "connectSoccerGame.php";

    $name = $_POST["name"];
    $sql = "SELECT _name FROM Myplayer WHERE _name = '$name'";

    $result = $conn -> query($sql);
    $result_text = "[";
    $i = 0 ;

    while($row = mysqli_fetch_array($result)){
        if($i>0){
            $result_text = $result_text.",";
        }
        $result_text = $result_text.json_encode($row);
        $i++;
    }

   $result_text = $result_text."]";
   
   echo $result_text;

?>