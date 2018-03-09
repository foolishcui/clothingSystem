<?php
require_once '../include.php';
//checkLogined();

//Connect to Mysql
include('../connectMysql.php');

//get rating results

?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商务男装</title>
    <meta name="description" content="服装设计知识库">
    <link href="../style/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/details.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid results-table">
        <!--Display user info-->
        <table class="table table-bordered table-userinfo">
            <thead>
                <tr>
                    <th>商务男装感性评价</th>
                    <th colspan="6">用户信息</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th rowspan="2" style="text-align: center;"><?php $imageLink = $_GET['imageLink']; echo "<img src='{$imageLink}' style='width: 120px;'>"; ?></th>
                    <th>用户姓名</th>
                    <th>年龄</th>
                    <th>性别</th>
                    <th>职业</th>
                    <th>月收入</th>
                    <th>爱好</th>
                </tr>
                <tr>
                    <th><?php $username = $_COOKIE['username']; if($username){echo $username;}else{echo "未设置";} ?></th>
                    <th><?php $gender = $_COOKIE['gender']; if($gender){echo $gender;}else{echo "未设置";} ?></th>
                    <th><?php $age = $_COOKIE['age']; if($age){echo $age;}else{echo "未设置";} ?></th>
                    <th><?php $job = $_COOKIE['job']; if($job){echo $job;}else{echo "未设置";} ?></th>
                    <th><?php $income = $_COOKIE['income']; if($income){echo $income;}else{echo "未设置";} ?></th>
                    <th><?php $interest = $_COOKIE['interest']; if($interest){echo $interest;}else{echo "未设置";} ?></th>
                </tr>
            </tbody>
        </table>
        <!--Display clothe rating-->
        <table class="table table-bordered table-rating">
            <thead>
                <tr>
                    <th>评价维度</th>
                    <th>评级因子</th>
                    <th>得分</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th rowspan="3">整体风格</th>
                    <th>儒雅的 - 硬朗的</th>
                    <th><?php if(isset($_GET['elegant'])){echo $_GET['elegant'];}else{echo "未评价";}  ?></th>
                </tr>
                <tr>
                    <th>古典的 - 现代的</th>
                    <th><?php if($_GET['classical']!=" "){echo $_GET['classical'];}else{echo " ";} ?></th>
                </tr>
                <tr>
                    <th>时尚的 - 低调的</th>
                    <th><?php if($_GET['fashion']!=" "){echo $_GET['fashion'];}else{echo " ";} ?></th>
                </tr>
                <tr>
                    <th rowspan="3">外观款式</th>
                    <th>休闲的 - 正式的</th>
                    <th><?php if($_GET['casual']!=" "){echo $_GET['casual'];}else{echo " ";} ?></th>
                </tr>
                <tr>
                    <th>华贵的 - 朴素的</th>
                    <th><?php if($_GET['sumptuous']!=" "){echo $_GET['sumptuous'];}else{echo " ";} ?></th>
                </tr>
                <tr>
                    <th>简约的 - 繁复的</th>
                    <th><?php if($_GET['simple']!=" "){echo $_GET['simple'];}else{echo " ";} ?></th>
                </tr>
                <tr>
                    <th rowspan="3">颜色面料</th>
                    <th>凉爽的 - 温暖的</th>
                    <th><?php if($_GET['cold']!=" "){echo $_GET['cold'];}else{echo " ";} ?></th>
                </tr>
                <tr>
                    <th>亮丽的 - 淡雅的</th>
                    <th><?php if($_GET['bright']!=" "){echo $_GET['bright'];}else{echo " ";} ?></th>
                </tr>
                <tr>
                    <th>柔软的 - 挺括的</th>
                    <th><?php if($_GET['soft']!=" "){echo $_GET['soft'];}else{echo " ";} ?></th>
                </tr>
                <tr>
                    <th rowspan="2">压力感受</th>
                    <th>轻薄的 — 厚重的</th>
                    <th><?php if($_GET['light']!=" "){echo $_GET['light'];}else{echo "";} ?></th>
                </tr>
                <tr>
                    <th>紧身的 — 宽松的</th>
                    <th><?php if($_GET['tight']!=" "){echo $_GET['tight'];}else{echo "";} ?></th>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
