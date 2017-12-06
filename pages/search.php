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
                    <a class="navbar-brand" href="index.php">服装设计知识库</a>
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
                        <li><a href="#" id="khaki">卡其</a></li>
                        <li><a href="#" id="borland">宝蓝</a></li>
                        <li><a href="#" id="darkBlue">藏青</a></li>
                        <li><a href="#" id="black">黑色</a></li>
                        <li><a href="#" id="blue grey">蓝灰</a></li>
                        <li><a href="#" id="purplishBlue">藏蓝</a></li>
                        <li><a href="#" id="otherColor">全部</a></li>
                    </ul>
                </div>

                <div class="dropdown dropdown-group">
                    <button id="selectFabric" class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        全部面料
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu fabric-menu" aria-labelledby="dropdownMenu1" oninput="goPick(this)">
                        <li><a href="#" id="polyester">聚酯纤维</a></li>
                        <li><a href="#" id="woolasd">羊毛</a></li>
                        <li><a href="#" id="cotton">棉</a></li>
                        <li><a href="#" id="chinlon">锦纶</a></li>
                        <li><a href="#" id="spandex">氨纶</a></li>
                        <li><a href="#" id="otherFabric">全部</a></li>
                    </ul>
                </div>

                <div class="dropdown dropdown-group">
                    <button id="selectStyle" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        全部风格
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu style-menu" aria-labelledby="dropdownMenu1" oninput="goPick()">
                        <li><a href="#" id="business">商务</a></li>
                        <li><a href="#" id="city">都市</a></li>
                        <li><a href="#" id="relaxation">休闲</a></li>
                        <li><a href="#" id="fashion">时尚</a></li>
                        <li><a href="#" id="otherStyle">全部</a></li>
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
                        if ($_GET['search'] == '夹克') {
                            $type = $_GET['search'];
                            $sql = "SELECT * FROM jacket_jinlilai";
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
                                echo "抱歉，没有帮您找到符合要求的男装。";
                            }
                            mysqli_close($conn);
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
