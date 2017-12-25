<?php
require_once '../include.php';
checkLogined();

//连接数据库
include('../connectMysql.php');

//设置COOKIE
//if(isset($_get["search"])) {
//    $cookie = $_GET['search'];
//    setcookie('clothingType', '$cookie');
//}
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
    <link rel="stylesheet" href="../style/search.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-fluid search-page">

        <!--navbar-->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">基于感性工学的服装设计评价系统</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><?php echo $_GET['search']; ?></a></li>
                    </ul>
                    <form class="navbar-form">
                        <input type="text" class="form-control" placeholder="请输入关键词，如稳重" name="keyword">
                        <button type="submit" class="btn btn-default" name="submit" value="submit">搜索</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="filter">
            <div class="filter-case">
                <div class="dropdown dropdown-group">
                    <button id="selectColor" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        全部颜色
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu color-menu" aria-labelledby="dropdownMenu1" onchange="goPick()">
                        <li><a href="#">蓝</a></li>
                        <li><a href="#">青</a></li>
                        <li><a href="#">黑</a></li>
                        <li><a href="#">灰</a></li>
                        <li><a href="#">紫</a></li>
                        <li><a href="#">粉</a></li>
                        <li><a href="#">卡其</a></li>
                        <li><a href="#">全部</a></li>
                    </ul>
                </div>

                <div class="dropdown dropdown-group">
                    <button id="selectFabric" class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        全部面料
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu fabric-menu" aria-labelledby="dropdownMenu1" oninput="goPick(this)">
                        <li><a href="#">棉</a></li>
                        <li><a href="#">羊毛</a></li>
                        <li><a href="#">锦纶</a></li>
                        <li><a href="#">氨纶</a></li>
                        <li><a href="#">聚酯纤维</a></li>
                        <li><a href="#">再生纤维</a></li>
                        <li><a href="#">全部</a></li>
                    </ul>
                </div>

                <div class="dropdown dropdown-group">
                    <button id="selectStyle" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        全部风格
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu style-menu" aria-labelledby="dropdownMenu1" oninput="goPick()">
                        <li><a href="#">商务</a></li>
                        <li><a href="#">都市</a></li>
                        <li><a href="#">休闲</a></li>
                        <li><a href="#">时尚</a></li>
                        <li><a href="#">青春</a></li>
                        <li><a href="#">全部</a></li>
                    </ul>
                </div>
            </div>

            <div class="filter-search" align="right">
                <div class="navbar-collapse">
                </div>
            </div>
        </div>

        <div class="clothes-table table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>服装图片</th>
                        <th>颜色</th>
                        <th>面料</th>
                        <th>风格</th>
                    </tr>
                </thead>
                <tbody class='clothes-contents' id='clothes-contents'>
                    <!--展示该分类下的所有服装-->
                    <?php
                        if ($_GET['search'] == '夹克' || $_GET['search'] == '西服') {
                            $type = "jacket_jinlilai";
                            $sql = "SELECT * FROM jacket_jinlilai";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>{$row['id']}</td>" .
                                         "<td><a href='details.php?id={$row['id']}&table=$type' class='thumbnail'><img src='{$row['image1']}' alt=''></a></td>" .
                                         "<td>{$row['color']}</td>" .
                                         "<td>{$row['fabric']}</td>" .
                                         "<td>{$row['style']}</td>" .
                                         "</tr>";
                                }
                            } else {
                                echo "抱歉，没有帮您找到符合要求的男装。";
                            }
                        } else if ($_GET['search'] == '长袖衬衫') {
                            $type = "long_sleeved_blouse";
                            $sql = "SELECT * FROM long_sleeved_blouse";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>{$row['id']}</td>" .
                                        "<td><a href='details.php?id={$row['id']}&table=$type' class='thumbnail'><img src='{$row['image1']}' alt=''></a></td>" .
                                        "<td>{$row['color']}</td>" .
                                        "<td>{$row['fabric']}</td>" .
                                        "<td>{$row['style']}</td>" .
                                        "</tr>";
                                }
                            } else {
                                echo "抱歉，没有帮您找到符合要求的男装。";
                            }
                        } else if ($_GET['search'] == '短袖衬衫') {
                            $type = "short_sleeved_blouse";
                            $sql = "SELECT * FROM short_sleeved_blouse";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>{$row['id']}</td>" .
                                        "<td><a href='details.php?id={$row['id']}&table=$type' class='thumbnail'><img src='{$row['image1']}' alt=''></a></td>" .
                                        "<td>{$row['color']}</td>" .
                                        "<td>{$row['fabric']}</td>" .
                                        "<td>{$row['style']}</td>" .
                                        "</tr>";
                                }
                            } else {
                                echo "抱歉，没有帮您找到符合要求的男装。";
                            }
                        } else if ($_GET['search'] == '西裤') {
                            $type = "western_style_pants";
                            $sql = "SELECT * FROM western_style_pants";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>{$row['id']}</td>" .
                                        "<td><a href='details.php?id={$row['id']}&table=$type' class='thumbnail'><img src='{$row['image1']}' alt=''></a></td>" .
                                        "<td>{$row['color']}</td>" .
                                        "<td>{$row['fabric']}</td>" .
                                        "<td>{$row['style']}</td>" .
                                        "</tr>";
                                }
                            } else {
                                echo "抱歉，没有帮您找到符合要求的男装。";
                            }
                        } else if ($_GET['search'] == '休闲裤') {
                            $type = "casual_pants";
                            $sql = "SELECT * FROM casual_pants";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>{$row['id']}</td>" .
                                        "<td><a href='details.php?id={$row['id']}&table=$typesearch' class='thumbnail'><img src='{$row['image1']}' alt=''></a></td>" .
                                        "<td>{$row['color']}</td>" .
                                        "<td>{$row['fabric']}</td>" .
                                        "<td>{$row['style']}</td>" .
                                        "</tr>";
                                }
                            } else {
                                echo "抱歉，没有帮您找到符合要求的男装。";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function () {

            //设置三个参数的全局变量
            var colorValue = 'all';
            var fabricValue = 'all';
            var styleValue = 'all';

            //调用ajax
            function goPick(colorValue, fabricValue, styleValue) {
                if (colorValue != '' || fabricValue != '' || styleValue != '') {
                    $.ajax({
                        url: "../ajax/goPick.php",
                        method: "POST",
                        data: {
                            colorValue: colorValue,
                            fabricValue: fabricValue,
                            styleValue: styleValue
                        },
                        success: function (data) {
                            $('tbody').html(data);
                        },
                        error: function () {
                            alert("请刷新页面后重试");
                        }
                    });
                }
            }

            //使用jQuery修改下拉框选择的值
            $('.color-menu li').click(function() {
                document.getElementById("selectColor").innerHTML = $(this).text() + ' <span class="caret"></span>';
                if ($(this).text() == "全部") {
                    colorValue = 'all';
                    console.log(colorValue);
                } else {
                    colorValue = $(this).text();
                }
                console.log(colorValue, fabricValue, styleValue);
                goPick(colorValue, fabricValue, styleValue);
            });
            $('.fabric-menu li').click(function() {
                document.getElementById("selectFabric").innerHTML = $(this).text() +' <span class="caret"></span>';
                if ($(this).text() == "全部") {
                    fabricValue = 'all';
                } else {
                    fabricValue = $(this).text();
                }
                console.log(colorValue, fabricValue, styleValue);
                goPick(colorValue, fabricValue, styleValue);
            });
            $('.style-menu li').click(function() {
                document.getElementById("selectStyle").innerHTML = $(this).text() + ' <span class="caret"></span>';
                if ($(this).text() == "全部") {
                    styleValue = 'all';
                } else {
                    styleValue = $(this).text();
                }
                console.log(colorValue, fabricValue, styleValue);
                goPick(colorValue, fabricValue, styleValue);
            });
        });
    </script>

</html>
