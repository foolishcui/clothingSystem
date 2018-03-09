<?php
/**
 * Created by PhpStorm.
 * User: Lipcui
 * Date: 14/11/2017
 * Time: 9:02 PM
 */

require_once 'include.php';

//判断是否有 submit 操作
if (isset($_POST['submit'])) {
    //注册时需连接数据库
    include('connectMysql.php');
    //store information into database
    $username = $_POST['username'];
    //encrype password by md5
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $job = $_POST['job'];
    $income = $_POST['income'];
    $interest = $_POST['interest'];

    //Set cookies
    setcookie("username", $username, time()+7*24*3600);
    setcookie("gender", $gender, time()+7*24*3600);
    setcookie("age", $age, time()+7*24*3600);
    setcookie("job", $job, time()+7*24*3600);
    setcookie("income", $income, time()+7*24*3600);
    setcookie("interest", $interest, time()+7*24*3600);

    //redirect page to php
    header("location:./pages/selectSystem.php");
}

//连接数据库并插入数据
//include('connectMysql.php');
//$sql = "insert inti user(id, username, password) values (null, '$username', '$password')";
//$result = mysqli_query($sql, $conn);
//
////判断插入数据是否成功
//if (!$result) {
//    die('Error: '.mysqli_error());
//} else {
//    echo "已成功注册";
//}

?>



