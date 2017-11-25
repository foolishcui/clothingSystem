<?php
//使用 SESSION 判断用的的登录状态
if(empty($_SESSION['id']['username'])){
    header("location:login.php");
}
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
    <div class="container-fluid homepage">

        <!-- Static navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">服装设计知识库</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">首页</a></li>
                    </ul>
                    <form class="navbar-form">
                        <input type="text" class="form-control" placeholder="请输入关键词，如稳重" name="keyword">
                        <button type="submit" class="btn btn-default" name="submit" value="submit">搜索</button>
                    </form>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>

        <div class="container type">
            <div class="row" id="post-list">

                <div class="col-xs－12 col-sm-4">
                    <article class="post tag-foreign-website tag-bootstrap-v3 tag-opensource-project" >
                        <h2 class="post-title">
                            <a href="search.php" onclick="">长袖衬衫</a>
                        </h2>
                        <div class="post-featured-image">
                            <a class="thumbnail loaded" href="search.php" onclick="">
                                <img onload="imgLoaded(this)" src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/35760335.jpg" alt="NodeBB">
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <article class="post tag-foreign-website tag-bootstrap-v3">
                        <h2 class="post-title">
                            <a onclick="" href="http://calhoun.ca/">短袖衬衫</a>
                        </h2>
                        <div class="post-featured-image">
                            <a class="thumbnail loaded" onclick="" href="http://calhoun.ca/">
                                <img onload="imgLoaded(this)" src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/22612504.jpg" alt="Calhoun">
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <article class="post tag-foreign-website tag-bootstrap-v3">
                        <h2 class="post-title">
                            <a href="https://www.justpark.com/">西服</a>
                        </h2>
                        <div class="post-featured-image">
                            <a class="thumbnail loaded" href="">
                                <img src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/75148107.jpg" alt="">
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <article class="post tag-foreign">
                        <h2 class="post-title">
                            <a href="https://photoshoot.io/">夹克</a>
                        </h2>
                        <div class="post-featured-image">
                            <a class="thumbnail loaded"  href="https://photoshoot.io/">
                                <img src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/71900589.jpg" alt="">
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <article class="post tag-foreign">
                        <h2 class="post-title">
                            <a  href="https://photoshoot.io/">西裤</a>
                        </h2>
                        <div class="post-featured-image">
                            <a class="thumbnail loaded"  href="https://photoshoot.io/">
                                <img src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/67086710.jpg" alt="">
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <article class="post tag-foreign">
                        <h2 class="post-title">
                            <a  href="https://photoshoot.io/">休闲裤</a>
                        </h2>
                        <div class="post-featured-image">
                            <a class="thumbnail loaded" href="https://photoshoot.io/">
                                <img src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/70628124.jpg" alt="">
                            </a>
                        </div>
                    </article>
                </div>

            </div>
        </div>

    </div>
</body>
</html>