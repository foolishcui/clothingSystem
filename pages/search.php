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
    <link rel="stylesheet" href="../style/search.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
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
                        <li class="active"><a href="#">长袖衬衫</a></li>
                    </ul>
                    <form class="navbar-form">
                        <input type="text" class="form-control" placeholder="请输入关键词，如稳重" name="keyword">
                        <button type="submit" class="btn btn-default" name="submit" value="submit">搜索</button>
                    </form>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>

        <!--banner-->
<!--        <div class="banner" style="background-image: url(http://otzf8g4e3.bkt.clouddn.com/17-11-16/55766896.jpg)">-->
<!--        </div>-->

        <div class="filter">
            <div class="filter-case">
                <div class="dropdown dropdown-group">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        颜色
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">黑色</a></li>
                        <li><a href="#">灰色</a></li>
                        <li><a href="#">蓝色</a></li>
                        <li><a href="#">红色</a></li>
                    </ul>
                </div>

                <div class="dropdown dropdown-group">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        版型
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">黑色</a></li>
                        <li><a href="#">灰色</a></li>
                        <li><a href="#">蓝色</a></li>
                        <li><a href="#">红色</a></li>
                    </ul>
                </div>

                <div class="dropdown dropdown-group">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        风格
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">黑色</a></li>
                        <li><a href="#">灰色</a></li>
                        <li><a href="#">蓝色</a></li>
                        <li><a href="#">红色</a></li>
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
                        <th>版型</th>
                        <th>风格</th>
                    </tr>
                </thead>
                <tbody class="clothes-contents">
                    <tr>
                        <td>1</td>
                        <td><a href="details.php" class="thumbnail">
                                <img src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/35760335.jpg" alt="">
                            </a></td>
                        <td>藏青</td>
                        <td>标准</td>
                        <td>商务</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="" class="thumbnail">
                                <img src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/35760335.jpg" alt="">
                            </a></td>
                        <td>藏青</td>
                        <td>标准</td>
                        <td>商务</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="" class="thumbnail">
                                <img src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/35760335.jpg" alt="">
                            </a></td>
                        <td>藏青</td>
                        <td>标准</td>
                        <td>商务</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="" class="thumbnail">
                                <img src="http://otzf8g4e3.bkt.clouddn.com/17-11-16/35760335.jpg" alt="">
                            </a></td>
                        <td>藏青</td>
                        <td>标准</td>
                        <td>商务</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</body>
</html>
