<?php
/**
 * Created by PhpStorm.
 * User: Lipcui
 * Date: 14/11/2017
 * Time: 3:13 PM
 */

require_once 'include.php';
include('connectMysql.php');

// Query in Database
$sql = "SELECT * FROM jacket_jinlilai";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo '<h2>以下是帮您找到的所有男装</h2>';
    echo '<table border="1"><tr><td>ID</td><td>图片1</td><td>图片2</td><td>图片3</td><td>图片4</td><td>图片5</td><td>图片6</td><td>袖长</td><t1d>领型</t1d><td>款式</td><td>袖型</td><td>版型</td><td>下摆设计</td><td>口袋样式</td><td>衣门襟</td><td>衣长</td><td>工艺</td><td>图案</td><td>面料</td><td>颜色</td><td>厚薄</td><td>基础风格</td><td>链接</td></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td> {$row['id']} </td>" .
            "<td> <img src='{$row['image1']}' alt=''> </td>" .
            "<td> <img src='{$row['image2']}' alt=''> </td>" .
            "<td> <img src='{$row['image3']}' alt=''> </td>" .
            "<td> <img src='{$row['image4']}' alt=''> </td>" .
            "<td> <img src='{$row['image5']}' alt=''> </td>" .
            "<td> <img src='{$row['image6']}' alt=''> </td>" .
            "<td> {$row['sleeve_length']} </td>" .
            "<td> {$row['collar_type']} </td>" .
            "<td> {$row['design']} </td>" .
            "<td> {$row['sleeve_style']} </td>" .
            "<td> {$row['model']} </td>" .
            "<td> {$row['lower_hem']} </td>" .
            "<td> {$row['pocket_style']} </td>" .
            "<td> {$row['clothes_placket']} </td>" .
            "<td> {$row['clothes_length']} </td>" .
            "<td> {$row['craft']} </td>" .
            "<td> {$row['pattern']} </td>" .
            "<td> {$row['fabric']} </td>" .
            "<td> {$row['color']} </td>" .
            "<td> {$row['thickness']} </td>" .
            "<td> {$row['style']} </td>" .
            "<td> {$row['link']} </td>" .
            "</tr>";
    }
} else {
    echo "抱歉，没有帮您找到符合要求的男装。";
}

?>