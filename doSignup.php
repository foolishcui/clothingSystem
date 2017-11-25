<?php
/**
 * Created by PhpStorm.
 * User: Lipcui
 * Date: 14/11/2017
 * Time: 9:02 PM
 */

require_once 'include.php';

//判断是否有SUBMIT操作
if (!isset($_POST['submit'])) {
    exit("错误执行");
}

$username = $_POST['username'];
//md5加密密码
$password = md5($_POST['password']);

//连接数据库并插入数据
include('connectMysql.php');
$sql = "insert inti user(id, username, password) values (null, '$username', '$password')";
$result = mysqli_query($sql, $conn);

//判断插入数据是否成功
if (!$result) {
    die('Error: '.mysqli_error());
} else {
    echo "已成功注册";
}

?>