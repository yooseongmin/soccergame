<?php
    require_once "connectDataBase.php";

    $name = $_POST["_name"];
    $team = $_POST["_team"];
    $age = $_POST["_age"];
    $country = $_POST["_country"];

    $power = $_POST["power"];
    $speed = $_POST["speed"];
    $dribble = $_POST["dribble"];
    $mental = $_POST["mental"];
    $physical = $_POST["physical"];

    $sql = "INSERT INTO SoccerGame (_name, team, age, country, power, speed, dribble, mental, physical) 
    VALUES ('$name', '$team', '$age', '$country', '$power' , '$speed', '$dribble' , '$mental' , '$physical')";

    if($conn->query($sql)==TRUE){
        echo "선수 등록이 완료되었단다." ;
    }
    else{
        echo "에러다 이유는".$conn->error;
    }

    $conn -> close();
?>