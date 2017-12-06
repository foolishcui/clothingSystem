<?php
/**
 * Created by PhpStorm.
 * User: Lipcui
 * Date: 14/11/2017
 * Time: 4:40 PM
 */

require_once '../include.php';

//连接数据库
include('../connectMysql.php');

//判断三个变量的值并like查询数据库
//if ($_POST['colorValue']!="")

$sql = "SELECT * FROM jacket_jinlilai WHERE color LIKE '%".$_POST['colorValue']."%' AND fabric LIKE '%".$_POST['fabricValue']."%' AND style LIKE '%".$_POST['styleValue']."%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<td>{$row['id']}</td>" .
            "<td><a href='details.php?id={$row['id']}' class='thumbnail'><img src='{$row['image1']}' alt=''></a></td>" .
            "<td>{$row['color']}</td>" .
            "<td>{$row['fabric']}</td>" .
            "<td>{$row['style']}</td>" .
            "</tr>";
    }
}
mysqli_close($conn);
?>