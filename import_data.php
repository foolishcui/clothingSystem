<?php
/**
 * Created by PhpStorm.
 * User: Lipcui
 * Date: 02/11/2017
 * Time: 9:43 PM
 */

    // Connect database
    $host = 'localhost';
    $db_user = 'root';
    $db_password = '11221995cui';
    $db = 'MenWear';
    $conn = mysqli_connect($host, $db_user, $db_password) or die (mysqli_error());
    mysqli_select_db($conn, $db) or die (mysqli_error());
    if ($conn -> connect_error) {
        die('Could not connect: ' . $conn->connect_error);
    }
    echo 'Connected successfully! <br>';

    // import file
    $handle = fopen('worksheet.csv', "r");
    if ($handle) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $result [] = $data;
            $sql = "INSERT into test(sleeve_length, collar_type, design, sleeve_style, model, lower_hem, pocket_style, clothes_placket, clothes_length, craft, pattern, fabric, color, thickness, style, link) VALUES ('$result[0]','$result[1]','$result[2]','$result[3]','$result[4]','$result[5]','$result[6]','$result[7]','$result[8]','$result[9]','$result[10]','$result[11]','$result[12]','$result[13]','$result[14]','$result[15]')";
            mysqli_query($conn, $sql);
        }
    } else {
        die ("Unable to open file");
    }
?>