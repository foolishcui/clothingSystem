<?php
require_once '../include.php';
include('../connectMysql.php');
//checkLogined();
setcookie('clothingType', $_GET['search']);
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

<div class="container-fluid details-page">
    <!--navbar-->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="videoIndex.php">基于感性工学的服装设计虚拟展演系统</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">服装详情</a></li>
                </ul>
<!--                <form class="navbar-form">-->
<!--                    <input type="text" class="form-control" placeholder="请输入关键词，如稳重" name="keyword">-->
<!--                    <button type="submit" class="btn btn-default" name="submit" value="submit">搜索</button>-->
<!--                </form>-->
            </div>
        </div>
    </nav>

    <!--Show all clothes about this type-->
    <div class="container type">
        <div class="row">
            <!--PHP Mysql query to get all clothes-->
            <div class="pictures" style="width: 1000px;">
                <?php
                    $clotheType = $_GET['search'];
                    if ($clotheType == 'four_suit' || $clotheType == 'eight_suit' || $clotheType == 'six_suit' || $clotheType == 'shirt') {
                        $sql = "SELECT * FROM evaluation_clothes WHERE imageType = '{$clotheType}'";
                        $result = $conn->query($sql);
                        echo "<div class='row'>";
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                //查询衣服图片
                                $imageAddress = $row['imageAddress'];
                                echo "<div class='col-md-2 col-sm-6'><a href='evaluationRating.php?imageAddress=$imageAddress' class='thumbnail'><img src='{$row['imageAddress']}' alt=''></a></div>";
                            }
                        }
                        echo "</div>";
                    } else if ($clotheType == 'jack1_jack2') {
                        echo "<div class='row'>";
                        echo "<h4>款式一</h4>";
                        $sql = "SELECT * FROM evaluation_clothes WHERE imageType = 'jack1'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                //查询衣服图片
                                $imageAddress = $row['imageAddress'];
                                echo "<div class='col-md-2 col-sm-6'><a href='evaluationRating.php?imageAddress=$imageAddress' class='thumbnail'><img src='{$row['imageAddress']}' alt=''></a></div>";
                            }
                        }
                        echo "</div>";
                        echo "<div class='row'>";
                        $sql = "SELECT * FROM evaluation_clothes WHERE imageType = 'jack2'";
                        echo "<h4>款式二</h4>";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                //查询衣服图片
                                $imageAddress = $row['imageAddress'];
                                echo "<div class='col-md-2 col-sm-6'><a href='evaluationRating.php?imageAddress=$imageAddress' class='thumbnail'><img src='{$row['imageAddress']}' alt=''></a></div>";
                            }
                        }
                        echo "</div>";
                    } else if ($clotheType == 'trousers_casualpants') {
                        echo "<div class='row'>";
                        echo "<h4>西裤</h4>";
                        $sql = "SELECT * FROM evaluation_clothes WHERE imageType = 'trousers'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                //查询衣服图片
                                $imageAddress = $row['imageAddress'];
                                echo "<div class='col-md-2 col-sm-6'><a href='evaluationRating.php?imageAddress=$imageAddress' class='thumbnail'><img src='{$row['imageAddress']}' alt=''></a></div>";
                            }
                        }
                        echo "</div>";
                        $sql = "SELECT * FROM evaluation_clothes WHERE imageType = 'casual_pants'";
                        echo "<div class='row'>";
                        echo "<h4>休闲裤</h4>";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                //查询衣服图片
                                $imageAddress = $row['imageAddress'];
                                echo "<div class='col-md-2 col-sm-6'><a href='evaluationRating.php?imageAddress=$imageAddress' class='thumbnail'><img src='{$row['imageAddress']}' alt=''></a></div>";
                            }
                        }
                        echo "</div>";
                    }
                ?>
            </div>

        </div>
    </div>
</div>
</body>
</html>