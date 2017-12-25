<?php
require_once '../include.php';
checkLogined();

//连接数据库
include('../connectMysql.php');
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
                <a class="navbar-brand" href="index.php">基于感性工学的服装设计评价系统</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><?php $clothingType = $_COOKIE['clothingType']; echo $clothingType; ?></a></li>
                </ul>
                <form class="navbar-form">
                    <input type="text" class="form-control" placeholder="请输入关键词，如稳重" name="keyword">
                    <button type="submit" class="btn btn-default" name="submit" value="submit">搜索</button>
                </form>
            </div>
        </div>
    </nav>

    <!--展示该衣服的6张细节图-->
    <?php
        $clotheId = $_GET['id'];
        $table = $_GET['table'];
        $sql = "SELECT * FROM $table WHERE id = '{$clotheId}'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //查询衣服图片
                echo "<div class='pictures'><div class='row'><div class='col-md-4 col-sm-4'><a href='#' class='thumbnail'><img src='{$row['image1']}' alt=''></a></div>".
                     "<div class='col-md-4 col-sm-4'><a href='#' class='thumbnail'><img src='{$row['image2']}' alt=''></a></div>".
                     "<div class='col-md-4 col-sm-4'><a href='#' class='thumbnail'><img src='{$row['image3']}' alt=''></a></div></div>".
                     "<div class='row'><div class='col-md-4 col-sm-4'><a href='#' class='thumbnail'><img src='{$row['image4']}' alt=''></a></div>".
                     "<div class='col-md-4 col-sm-4'><a href='#' class='thumbnail'><img src='{$row['image5']}' alt=''></a></div>".
                     "<div class='col-md-4 col-sm-4'><a href='#' class='thumbnail'><img src='{$row['image6']}' alt=''></a></div></div></div>";
                //查询衣服的具体参数
                if ($table == 'western_style_pants' || $table == 'casual_pants') {
                    echo "<div class='clothes-attribute-table'><div class='contents'><div class='list'><div class='first'><span class='name'>裤长：</span><span class='attribute'>{$row['pant_length']}</span><br></div>".
                        "<div class='second'><span class='name'>腰型：</span><span class='attribute'>{$row['waist_type']}</span><br></div></div>".
                        "<div class='list'><div class='first'><span class='name'>款式：</span><span class='attribute'>{$row['design']}</span><br></div>".
                        "<div class='second'><span class='name'>裤脚：</span><span class='attribute'>{$row['pant_bottom']}</span><br></div></div>".
                        "<div class='list'><div class='first'><span class='name'>裤型：</span><span class='attribute'>{$row['model']}</span><br></div>".
                        "<div class='second'><span class='name'>弹力：</span><span class='attribute'>{$row['elastic_force']}</span><br></div></div>".
                        "<div class='list'><div class='first'><span class='name'>工艺：</span><span class='attribute'>{$row['craft']}</span><br></div>".
                        "<div class='second'><span class='name'>图案：</span><span class='attribute'>{$row['pattern']}</span><br></div></div></div></div>";
                } else {
                    echo "<div class='clothes-attribute-table'><div class='contents'><div class='list'><div class='first'><span class='name'>袖长：</span><span class='attribute'>{$row['sleeve_length']}</span><br></div>".
                        "<div class='second'><span class='name'>领型：</span><span class='attribute'>{$row['collar_type']}</span><br></div></div>".
                        "<div class='list'><div class='first'><span class='name'>款式：</span><span class='attribute'>{$row['design']}</span><br></div>".
                        "<div class='second'><span class='name'>袖型：</span><span class='attribute'>{$row['sleeve_style']}</span><br></div></div>".
                        "<div class='list'><div class='first'><span class='name'>版型：</span><span class='attribute'>{$row['model']}</span><br></div>".
                        "<div class='second'><span class='name'>下摆：</span><span class='attribute'>{$row['lower_hem']}</span><br></div></div>".
                        "<div class='list'><div class='first'><span class='name'>工艺：</span><span class='attribute'>{$row['craft']}</span><br></div>".
                        "<div class='second'><span class='name'>图案：</span><span class='attribute'>{$row['pattern']}</span><br></div></div></div></div>";
                }
                //感性评价
//                echo "<div class='evaluation'>感性评价：<code class='comment'>舒适</code> ".
//                     "<code class='comment'>{$row['style']}</code></div>";
            }
        }
    ?>

    <!--添加感性评价调查功能-->
    <div class="container-fluid questions">
        <h3>产品评价</h3>
        <hr>
        <h5>整体风格</h5>
        <div class="selection">
            <ul><li class="obj">儒雅的 - 硬朗的</li>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 非常儒雅(-3)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 很儒雅(-2)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 比较儒雅(-1)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 一般(0)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 比较硬朗(1)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 很硬朗(2)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 非常硬朗(3)
            </label>
            </ul>
        </div>
        <div class="selection">
            <ul><li class="obj">古典的 - 现代的</li>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 非常古典(-3)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 很古典(-2)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 比较古典(-1)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 一般(0)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 比较现代(1)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 很现代(2)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 非常现代(3)
            </label>
            </ul>
        </div>
        <div class="selection">
            <ul><li class="obj">百搭的 - 小众的</li>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 非常百搭(-3)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 很百搭(-2)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 比较百搭(-1)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 一般(0)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 比较小众(1)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 很小众(2)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 非常小众(3)
            </label>
            </ul>
        </div>
        <div class="selection">
            <ul><li class="obj">时尚的 - 低调的</li>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 非常时尚(-3)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 很时尚(-2)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 比较时尚(-1)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 一般(0)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 比较低调(1)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 很低调(2)
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 非常低调(3)
            </label>
            </ul>
        </div>

        <hr>
        <h5>外观款式</h5>
        <div class="selection">
            <ul><li class="obj">休闲的 - 正式的</li>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 非常休闲(-3)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 很休闲(-2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 比较休闲(-1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 一般(0)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 比较正式(1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 很正式(2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 非常正式(3)
                </label>
            </ul>
        </div>
        <div class="selection">
            <ul><li class="obj">华贵的 - 朴素的</li>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 非常华贵(-3)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 很华贵(-2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 比较华贵(-1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 一般(0)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 比较朴素(1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 很朴素(2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 非常朴素(3)
                </label>
            </ul>
        </div>
        <div class="selection">
            <ul><li class="obj">简约的 - 繁复的</li>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 非常简约(-3)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 很简约(-2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 比较简约(-1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 一般(0)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 比较繁复(1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 很繁复(2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 非常繁复(3)
                </label>
            </ul>
        </div>
        <div class="selection">
            <ul><li class="obj">文艺的 - 雅痞的</li>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 非常文艺(-3)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 很文艺(-2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 比较文艺(-1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 一般(0)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 比较雅痞(1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 很雅痞(2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 非常雅痞(3)
                </label>
            </ul>
        </div>

        <hr>
        <h5>颜色面料</h5>
        <div class="selection">
            <ul><li class="obj">凉爽的 - 温暖的</li>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 非常凉爽(-3)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 很凉爽(-2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 比较凉爽(-1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 一般(0)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 比较温暖(1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 很温暖(2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 非常温暖(3)
                </label>
            </ul>
        </div>
        <div class="selection">
            <ul><li class="obj">亮丽的 - 淡雅的</li>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 非常亮丽(-3)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 很亮丽(-2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 比较亮丽(-1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 一般(0)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 比较淡雅(1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 很淡雅(2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 非常淡雅(3)
                </label>
            </ul>
        </div>
        <div class="selection">
            <ul><li class="obj">柔软的 - 挺括的</li>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 非常柔软(-3)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 很柔软(-2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 比较柔软(-1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 一般(0)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 比较挺括(1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 很挺括(2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 非常挺括(3)
                </label>
            </ul>
        </div>
        <div class="selection">
            <ul><li class="obj">细腻的 - 粗犷的</li>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 非常细腻(-3)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 很细腻(-2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 比较细腻(-1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 一般(0)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 比较粗犷(1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 很粗犷(2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 非常粗犷(3)
                </label>
            </ul>
        </div>

        <hr>
        <h5>压力感受</h5>
        <div class="selection">
            <ul><li class="obj">轻薄的 — 厚重的</li>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 非常轻薄(-3)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 很轻薄(-2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 比较轻薄(-1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 一般(0)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 比较厚重(1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 很厚重(2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 非常厚重(3)
                </label>
            </ul>
        </div>
        <div class="selection">
            <ul><li class="obj">紧身的 — 宽松的</li>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 非常紧身(-3)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 很紧身(-2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 比较紧身(-1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 一般(0)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 比较宽松(1)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 很宽松(2)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 非常宽松(3)
                </label>
            </ul>
        </div>

        <hr>
        <button class="btn btn-sm btn-primary btn-block" type="submit" name="submit" value="submit">提交评价</button>
    </div>
</div>
</body>
</html>

<!--        <div class="row">-->
<!--            <div class="col-md-4 col-sm-4">-->
<!--                <a href="#" class="thumbnail">-->
<!--                    <img src="../assets/jacket_jinlilai/1/img1.png" alt="...">-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-md-4 col-sm-4">-->
<!--                <a href="#" class="thumbnail">-->
<!--                    <img src="../assets/jacket_jinlilai/1/img2.png" alt="...">-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-md-4 col-sm-4">-->
<!--                <a href="#" class="thumbnail">-->
<!--                    <img src="../assets/jacket_jinlilai/1/img3.png" alt="...">-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-4 col-sm-4">-->
<!--                <a href="#" class="thumbnail">-->
<!--                    <img src="../assets/jacket_jinlilai/1/img4.png" alt="...">-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-md-4 col-sm-4">-->
<!--                <a href="#" class="thumbnail">-->
<!--                    <img src="../assets/jacket_jinlilai/1/img5.png" alt="...">-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-md-4 col-sm-4">-->
<!--                <a href="#" class="thumbnail">-->
<!--                    <img src="../assets/jacket_jinlilai/1/img6.png" alt="...">-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->

<!--clothes-attribute-->
<!--    <div class="clothes-attribute-table">-->
<!--        <div class="contents">-->
<!--            <div class="list">-->
<!--                <div class="first">-->
<!--                    <span class="name">袖长：</span>-->
<!--                    <span class="attribute">--><?php //echo $row['sleeve_length']; ?><!--</span><br>-->
<!--                </div>-->
<!--                <div class="second">-->
<!--                    <span class="name">领型：</span>-->
<!--                    <span class="attribute">--><?php //echo $row['collar_type']; ?><!--</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="list">-->
<!--                <div class="first">-->
<!--                    <span class="name">款式：</span>-->
<!--                    <span class="attribute">--><?php //echo $row['design']; ?><!--</span><br>-->
<!--                </div>-->
<!--                <div class="second">-->
<!--                    <span class="name">袖型：</span>-->
<!--                    <span class="attribute">--><?php //echo $row['sleeve_style']; ?><!--</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="list">-->
<!--                <div class="first">-->
<!--                    <span class="name">版型：</span>-->
<!--                    <span class="attribute">--><?php //echo $row['model']; ?><!--</span><br>-->
<!--                </div>-->
<!--                <div class="second">-->
<!--                    <span class="name">下摆：</span>-->
<!--                    <span class="attribute">--><?php //echo $row['lower_hem']; ?><!--</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="list">-->
<!--                <div class="first">-->
<!--                    <span class="name">工艺：</span>-->
<!--                    <span class="attribute">--><?php //echo $row['craft']; ?><!--</span><br>-->
<!--                </div>-->
<!--                <div class="second">-->
<!--                    <span class="name">图案：</span>-->
<!--                    <span class="attribute">--><?php //echo $row['pattern']; ?><!--</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->