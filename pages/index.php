<?php
require_once '../include.php';
checkLogined();

$type1 = '长袖衬衫';
$type2 = '短袖衬衫';
$type3 = '西服';
$type4 = '夹克';
$type5 = '西裤';
$type6 = '休闲裤';
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
                </div>
            </div>
        </nav>

        <div class="container type">
            <div class="row" id="post-list">

                <div class="col-xs－12 col-sm-4">
                    <article class="post tag-foreign-website tag-bootstrap-v3 tag-opensource-project" >
                        <h2 class="post-title">
                            <a href="" onclick="">长袖衬衫</a>
                        </h2>
                        <div class="post-featured-image">
                            <a class="thumbnail loaded" href="<?php echo "search.php?search=".$type1 ?>">
                                <input type="image" value="长袖衬衫" src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/35760335.jpg">
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <article class="post tag-foreign-website tag-bootstrap-v3">
                        <h2 class="post-title">
                            <a onclick="" href="">短袖衬衫</a>
                        </h2>
                        <div class="post-featured-image">
                            <a class="thumbnail loaded" onclick="" href="<?php echo "search.php?search=".$type2 ?>">
                                <input type="image" value="短袖衬衫" name="短袖衬衫" src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/22612504.jpg">
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <article class="post tag-foreign-website tag-bootstrap-v3">
                        <h2 class="post-title">
                            <a href="">西服</a>
                        </h2>
                        <div class="post-featured-image">
                            <a class="thumbnail loaded" href="<?php echo "search.php?search=".$type3 ?>">
                                <input type="image" value="西服" name="西服" src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/75148107.jpg" alt="">
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <article class="post tag-foreign">
                        <h2 class="post-title">
                            <a href="">夹克</a>
                        </h2>
                        <div class="post-featured-image">
                            <a class="thumbnail loaded"  href="<?php echo "search.php?search=".$type4 ?>">
                                <input type="image" value="夹克" name="夹克" src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/71900589.jpg" alt="">
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <article class="post tag-foreign">
                        <h2 class="post-title">
                            <a  href="">西裤</a>
                        </h2>
                        <div class="post-featured-image">
                            <a class="thumbnail loaded"  href="<?php echo "search.php?search=".$type5 ?>">
                                <input type="image" value="西裤" name="西裤" src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/67086710.jpg" alt="">
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <article class="post tag-foreign">
                        <h2 class="post-title">
                            <a  href="">休闲裤</a>
                        </h2>
                        <div class="post-featured-image">
                            <a class="thumbnail loaded" href="<?php echo "search.php?search=".$type6 ?>">
                                <input type="image" value="休闲裤" name="休闲裤" src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/70628124.jpg" alt="">
                            </a>
                        </div>
                    </article>
                </div>

            </div>
        </div>

    </div>
</body>

</html>