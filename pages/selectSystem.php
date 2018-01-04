<?php
require_once '../include.php';
checkLogined();
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>选择系统</title>
    <meta name="description" content="服装设计知识库">
    <link href="../style/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/selectSystem.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div class="container-fluid homepage">

    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">基于感性工学的服装设计虚拟展演与评价系统</a>
            </div>
<!--            <div id="navbar" class="navbar-collapse collapse">-->
<!--                <ul class="nav navbar-nav">-->
<!--                    <li class="active"><a href="#">首页</a></li>-->
<!--                </ul>-->
<!--                <form class="navbar-form">-->
<!--                    <input type="text" class="form-control" placeholder="请输入关键词，如稳重" name="keyword">-->
<!--                    <button type="submit" class="btn btn-default" name="submit" value="submit">搜索</button>-->
<!--                </form>-->
<!--            </div>-->
        </div>
    </nav>
    <div class="type">
        <div class="systemArea">
            <div class="system">
                <article class="post tag-foreign-website tag-bootstrap-v3 tag-opensource-project">
                    <h2 class="post-title">
                        <a href="" onclick="">服装设计知识库</a>
                    </h2>
                    <div class="post-featured-image">
                        <a class="thumbnail loaded" href="index.php">
                            <input type="image" src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/35760335.jpg">
                        </a>
                    </div>
                </article>
            </div>
            <div class="system">
                <article class="post tag-foreign-website tag-bootstrap-v3">
                    <h2 class="post-title">
                        <a onclick="" href="">服装设计虚拟展演与评价</a>
                    </h2>
                    <div class="post-featured-image">
                        <a class="thumbnail loaded" onclick="" href="videoIndex.php">
                            <input type="image" src="http://otzf8g4e3.bkt.clouddn.com/18-1-2/51106961.jpg">
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
</body>

</html>