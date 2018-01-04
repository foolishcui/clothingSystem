<?php
/**
 * Created by PhpStorm.
 * User: Lipcui
 * Date: 14/11/2017
 * Time: 4:40 PM
 */

require_once 'include.php';

//检测是否有submit操作
if(isset($_POST["submit"])){
    //连接数据库
    include('connectMysql.php');
    //获取用户名密码
    $username = $_POST['username'];
    //md5加密密码
    $password = md5($_POST['password']);

    //判断用户名密码是否为空
    if ($username && $password) {
        //判断用户名密码输入是否正确
        $sql = "SELECT * FROM user WHERE username = '{$username}' and password = '{$password}'";
        $result = $conn->query($sql);
        $rows = $result->fetch_assoc();
        if ($rows) {
            //设置COOKIE,密码不要放在COOKIE中
            setcookie("uid", $rows['id'], time()+7*24*3600);
            setcookie("username", $rows['username'], time()+7*24*3600);

//            设置SESSION
//            $_SESSION['userinfo'] = [
//                'uid' => $rows['id'],
//                'username' => $rows['username']
//            ];

            $_SESSION['uid'] = $rows['id'];
            $_SESSION['username'] = $rows['username'];
            header("location:./pages/selectSystem.php");

//            if (!empty($_SESSION['id']) || !empty($_SESSION['id']['username'])) {}
//            检查COOKIE是否保存成功,要到下一页才可以查看
        } else {
            echo "<script>
            alert('用户名或密码错误');
            window.location.href='pages/login.php';
            </script>";
        }
    }
} else {
    exit("错误执行");
}
?>