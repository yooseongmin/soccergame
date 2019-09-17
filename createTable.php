<?php
    require_once "connectDataBase.php";

    $sql = "CREATE TABLE SoccerGame(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        team VARCHAR(30) NOT NULL,
        age INT(6) NOT NULL,
        country VARCHAR(30) NOT NULL,
        power INT(6) NOT NULL,
        speed INT(6) NOT NULL,
        dribble INT(6) NOT NULL,
        mental INT(6) NOT NULL,
        physical INT(6) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    
    if($conn->query($sql)==TRUE){
        echo "테이블 생성 성공 ~";
    }
    else {
        echo "실패했단다 이유는, ". $conn->error;
    }
    $conn->close();

?>