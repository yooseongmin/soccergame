<?php
require_once "connectSoccerGame.php";

$uploads_dir = "./uploads";
$allowed_ext = array('jpg','jpeg','png','gif');
$error = $_FILES['_img']['error'];
$fileName = $_FILES['_img']['name'];

echo $error;
echo $fileName;

echo "테스트 해보기";
$name = $_POST["_name"];
$age = $_POST["_age"];
$team = $_POST["_team"];
$speed = $_POST["speed"];
$dribble = $_POST["dribble"];
$mental = $_POST["mental"];
$pass = $_POST["pass"];
$physical = $_POST["physical"];

$sql = "INSERT INTO MyPlayer (name, age, team, speed, dribble, mental, pass, physical) VALUES
('$name','$age','$team', '$speed', '$dribble', '$mental', '$pass' , '$physical')";
echo $age;
if($conn->query($sql)==TRUE){
    echo "정상적으로 선수등록이 완료되었습니다.";
}
else{
    echo "선수 등록 오류 : ".$conn->error;
}
$conn -> close();
?>