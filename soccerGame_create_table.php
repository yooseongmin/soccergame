<?php
    require_once "connectSoccerGame.php";

    $sql = "CREATE TABLE MyPlayer (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) ,
        age INT(6) UNSIGNED NOT NULL,
        team VARCHAR(30) NOT NULL,
        speed INT(6) UNSIGNED NOT NULL,
        dribble INT(6) UNSIGNED NOT NULL,
        mental INT(6) UNSIGNED NOT NULL,
        pass INT(6) UNSIGNED NOT NULL,
        physical INT(6) UNSIGNED NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if($conn->query($sql) === TRUE){
        echo "선수 등록 테이블이 생성되었습니다.";
    }
    else{
        echo "테이블 생성 오류 : ".$conn->error;
    }

?>