<?php
//通过COOKIE获取信息，如已登录直接跳转到首页
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
                <a class="navbar-brand" href="index.php">服装设计知识库</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">长袖衬衫</a></li>
                </ul>
                <form class="navbar-form">
                    <input type="text" class="form-control" placeholder="请输入关键词，如稳重" name="keyword">
                    <button type="submit" class="btn btn-default" name="submit" value="submit">搜索</button>
                </form>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <!--pictures-->
    <div class="pictures">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <a href="#" class="thumbnail">
                    <img src="../assets/jacket_jinlilai/1/img1.png" alt="...">
                </a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="#" class="thumbnail">
                    <img src="../assets/jacket_jinlilai/1/img2.png" alt="...">
                </a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="#" class="thumbnail">
                    <img src="../assets/jacket_jinlilai/1/img3.png" alt="...">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <a href="#" class="thumbnail">
                    <img src="../assets/jacket_jinlilai/1/img4.png" alt="...">
                </a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="#" class="thumbnail">
                    <img src="../assets/jacket_jinlilai/1/img5.png" alt="...">
                </a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="#" class="thumbnail">
                    <img src="../assets/jacket_jinlilai/1/img6.png" alt="...">
                </a>
            </div>
        </div>
    </div>

    <!--clothes-attribute-->
    <div class="clothes-attribute-table">
        <div class="contents">
            <div class="list">
                <div class="first">
                    <span class="name">袖长：</span>
                    <span class="attribute">长袖</span><br>
                </div>
                <div class="second">
                    <span class="name">领型：</span>
                    <span class="attribute">立领</span>
                </div>
            </div>
            <div class="list">
                <div class="first">
                    <span class="name">款式：</span>
                    <span class="attribute">纯色</span><br>
                </div>
                <div class="second">
                    <span class="name">袖型：</span>
                    <span class="attribute">收口袖</span>
                </div>
            </div>
            <div class="list">
                <div class="first">
                    <span class="name">版型：</span>
                    <span class="attribute">修身</span><br>
                </div>
                <div class="second">
                    <span class="name">下摆：</span>
                    <span class="attribute">圆下摆</span>
                </div>
            </div>
            <div class="list">
                <div class="first">
                    <span class="name">工艺：</span>
                    <span class="attribute">水洗</span><br>
                </div>
                <div class="second">
                    <span class="name">图案：</span>
                    <span class="attribute">碎花</span>
                </div>
            </div>
        </div>
    </div>

    <!--sensory evaluation-->
    <div class="evaluation">
        <p class="name">感性评价：</p>
        <code class="comment">舒适</code>
        <code class="comment">商务感</code>
    </div>

</div>
</body>
</html>
