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
$sql = "SELECT * FROM jacket_jinlilai";
$filter = array();
if ($_POST['colorValue'] !== 'all') {
    $filter[0] = "color LIKE '%".$_POST['colorValue']."%'";
}
if ($_POST['fabricValue'] !== 'all') {
    $filter[1] = "fabric LIKE '%".$_POST['fabricValue']."%'";
}
if ($_POST['styleValue'] !== 'all') {
    $filter[2] = "style LIKE '%".$_POST['styleValue']."%'";
}
if (!empty($filter)) {
    $sql .= ' WHERE ' . implode(' AND ', $filter);
} else {
    $sql = "SELECT * FROM jacket_jinlilai";
}

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td>" .
            "<td><a href='details.php?id={$row['id']}' class='thumbnail'><img src='{$row['image1']}' alt=''></a></td>" .
            "<td>{$row['color']}</td>" .
            "<td>{$row['fabric']}</td>" .
            "<td>{$row['style']}</td>" .
            "</tr>";
    }
} else {
    echo "<tr><td>抱歉，没有帮您找到符合要求的男装。</td>" .
        "<td></td>" .
        "<td></td>" .
        "<td></td>" .
        "<td></td>" .
        "</tr>";
}
mysqli_close($conn);
?>