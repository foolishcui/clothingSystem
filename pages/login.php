<?php
//使用 cookie 判断用的的登录状态
if(!empty($_SESSION['id']['username'])){
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登陆</title>
    <!--Import bootstrap css CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!--Import original style-->
    <link rel="stylesheet" href="../style/login.css">
    <!--Import jQuery-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">

        <!--Login Box-->
        <div class="loginBox">
            <!-- 调用doLogin.php文件，验证，存取COOKIE和SESSION -->
            <form class="form-signin" action="../doLogin.php" method="post">
                <h2 class="form-signin-heading">基于感性工学的服装设计评价系统</h2>
<!--                <p class="form-signin-tips">账号：admin 密码：admin</p>-->
                <label for="inputAccount" class="sr-only">账号: admin</label>
                <input type="text" name="username" id="inputAccount" class="form-control" placeholder="账号: admin" required autofocus>
                <label for="inputPassword" class="sr-only">密码: admin</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="密码: admin" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit" style="background-color: #000;">登录</button>
                <div class="form-signup"><a href="signup.php">没有账号，前去注册</a></div>
            </form>
        </div>

    </div>
</body>

</html>