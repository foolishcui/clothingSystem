<?php
    //Connect mysql
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = '11221995cui';
    $conn = new mysqli($dbhost, $dbuser, $dbpass);

    //设置UTF-8编码
    mysqli_set_charset($conn,"utf8");
    if ($conn -> connect_error) {
        die('Could not connect: ' . $conn->connect_error);
    }

    //选择数据库
    mysqli_select_db($conn, "MenWear");
?>