<?php
require_once '../include.php';
//checkLogined();

$type1 = 'four_suit';
$type2 = 'six_suit';
$type3 = 'eight_suit';
$type4 = 'shirt';
$type5 = 'jack1_jack2';
$type6 = 'trousers_casualpants';
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
    <link rel="stylesheet" href="../style/index.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div class="container homepage">

    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="selectSystem.php">基于感性工学的服装设计虚拟展演系统</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">首页</a></li>
                </ul>
<!--                <form class="navbar-form">-->
<!--                    <input type="text" class="form-control" placeholder="请输入关键词，如稳重" name="keyword">-->
<!--                    <button type="submit" class="btn btn-default" name="submit" value="submit">搜索</button>-->
<!--                </form>-->
            </div>
        </div>
    </nav>

    <div class="container type">
        <div class="row" id="post-list">

            <div class="col-xs－12 col-sm-4">
                <article class="post tag-foreign-website tag-bootstrap-v3 tag-opensource-project" >
                    <h2 class="post-title">
                        <a href="" onclick="">四开衫西服</a>
                    </h2>
                    <div class="post-featured-image">
                        <a class="thumbnail loaded" href="<?php echo "evaluationDetails.php?search=".$type1 ?>">
                            <input type="image" value="四开衫西服" name="four" src="http://otzf8g4e3.bkt.clouddn.com/18-3-9/22758853.jpg">
                        </a>
                    </div>
                </article>
            </div>

            <div class="col-xs-12 col-sm-4">
                <article class="post tag-foreign-website tag-bootstrap-v3">
                    <h2 class="post-title">
                        <a onclick="" href="">六开衫西服</a>
                    </h2>
                    <div class="post-featured-image">
                        <a class="thumbnail loaded" onclick="" href="<?php echo "evaluationDetails.php?search=".$type2 ?>">
                            <input type="image" value="六开衫西服" name="six" src="http://otzf8g4e3.bkt.clouddn.com/18-3-9/33928144.jpg">
                        </a>
                    </div>
                </article>
            </div>

            <div class="col-xs-12 col-sm-4">
                <article class="post tag-foreign-website tag-bootstrap-v3">
                    <h2 class="post-title">
                        <a href="">八开衫西服</a>
                    </h2>
                    <div class="post-featured-image">
                        <a class="thumbnail loaded" href="<?php echo "evaluationDetails.php?search=".$type3 ?>">
                            <input type="image" value="八开衫西服" name="eight" src="http://otzf8g4e3.bkt.clouddn.com/18-3-9/22424487.jpg" alt="">
                        </a>
                    </div>
                </article>
            </div>

            <div class="col-xs-12 col-sm-4">
                <article class="post tag-foreign">
                    <h2 class="post-title">
                        <a href="">衬衫</a>
                    </h2>
                    <div class="post-featured-image">
                        <a class="thumbnail loaded"  href="<?php echo "evaluationDetails.php?search=".$type4 ?>">
                            <input type="image" value="衬衫" name="shirt" src="http://otzf8g4e3.bkt.clouddn.com/18-3-9/74954639.jpg" alt="">
                        </a>
                    </div>
                </article>
            </div>

            <div class="col-xs-12 col-sm-4">
                <article class="post tag-foreign">
                    <h2 class="post-title">
                        <a  href="">夹克</a>
                    </h2>
                    <div class="post-featured-image">
                        <a class="thumbnail loaded"  href="<?php echo "evaluationDetails.php?search=".$type5 ?>">
                            <input type="image" value="夹克" name="西裤" src="http://otzf8g4e3.bkt.clouddn.com/18-3-9/32475812.jpg" alt="">
                        </a>
                    </div>
                </article>
            </div>

            <div class="col-xs-12 col-sm-4">
                <article class="post tag-foreign">
                    <h2 class="post-title">
                        <a  href="">西裤&休闲裤</a>
                    </h2>
                    <div class="post-featured-image">
                        <a class="thumbnail loaded" href="<?php echo "evaluationDetails.php?search=".$type6 ?>">
                            <input type="image" value="西裤&休闲裤" name="trousers" src="http://otzf8g4e3.bkt.clouddn.com/18-3-9/84045594.jpg" alt="">
                        </a>
                    </div>
                </article>
            </div>

        </div>
    </div>

<!--    <div class="container-fluid videos">-->
<!--        <div class="row">-->
<!--            <div class="col-xs－12 col-sm-4">-->
<!--                <article class="video">-->
<!--                    <video width="270px" autoplay loop="loop" onclick="window.location.href='videoDetails.php'">-->
<!--                        <source src="../videos/1.mp4" type="video/mp4" />-->
<!--                    </video>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div class="col-xs－12 col-sm-4">-->
<!--                <article class="video">-->
<!--                    <video width="270px" autoplay loop="loop">-->
<!--                        <source src="../videos/2.mp4" type="video/mp4" />-->
<!--                    </video>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div class="col-xs－12 col-sm-4">-->
<!--                <article class="video">-->
<!--                    <video width="270px" autoplay loop="loop">-->
<!--                        <source src="../videos/3.mp4" type="video/mp4" />-->
<!--                    </video>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div class="col-xs－12 col-sm-4">-->
<!--                <article class="video">-->
<!--                    <video width="270px" autoplay loop="loop">-->
<!--                        <source src="../videos/4.mp4" type="video/mp4" />-->
<!--                    </video>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div class="col-xs－12 col-sm-4">-->
<!--                <article class="video">-->
<!--                    <video width="270px" autoplay loop="loop">-->
<!--                        <source src="../videos/5.mp4" type="video/mp4" />-->
<!--                    </video>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div class="col-xs－12 col-sm-4">-->
<!--                <article class="video">-->
<!--                    <video width="270px" autoplay loop="loop">-->
<!--                        <source src="../videos/6.mp4" type="video/mp4" />-->
<!--                    </video>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div class="col-xs－12 col-sm-4">-->
<!--                <article class="video">-->
<!--                    <video width="270px" autoplay loop="loop">-->
<!--                        <source src="../videos/7.mp4" type="video/mp4" />-->
<!--                    </video>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div class="col-xs－12 col-sm-4">-->
<!--                <article class="video">-->
<!--                    <video width="270px" autoplay loop="loop">-->
<!--                        <source src="../videos/8.mp4" type="video/mp4" />-->
<!--                    </video>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div class="col-xs－12 col-sm-4">-->
<!--                <article class="video">-->
<!--                    <video width="270px" autoplay loop="loop">-->
<!--                        <source src="../videos/9.mp4" type="video/mp4" />-->
<!--                    </video>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div class="col-xs－12 col-sm-4">-->
<!--                <article class="video">-->
<!--                    <video width="270px" autoplay loop="loop">-->
<!--                        <source src="../videos/10.mp4" type="video/mp4" />-->
<!--                    </video>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div class="col-xs－12 col-sm-4">-->
<!--                <article class="video">-->
<!--                    <video width="270px" autoplay loop="loop">-->
<!--                        <source src="../videos/11.mp4" type="video/mp4" />-->
<!--                    </video>-->
<!--                </article>-->
<!--            </div>-->
<!--            <div class="col-xs－12 col-sm-4">-->
<!--                <article class="video">-->
<!--                    <video width="270px" autoplay loop="loop">-->
<!--                        <source src="../videos/12.mp4" type="video/mp4" />-->
<!--                    </video>-->
<!--                </article>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

</div>
</body>

</html>