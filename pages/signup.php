<?php
//通过COOKIE获取信息，如已登录直接跳转到首页
if(!empty($_COOKIE['adminId'])&&$_COOKIE['adminId']!=""){
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
</head>

<body>
<div class="container-fluid">

    <!--Login Box-->
    <div class="loginBox">
        <form class="form-signin" action="../doSignup.php" method="post">
            <h2 class="form-signin-heading">基于感性工学的服装设计虚拟展演与评价系统</h2>
            <label for="inputAccount" class="sr-only">姓名</label>
            <input type="text" name="username" id="inputAccount" class="form-control" placeholder="姓名" required autofocus style="margin-bottom: 10px;">
            <label class="radio-inline">
                <input type="radio" name="male" id="inputMale" value="male"> 男
            </label>
            <label class="radio-inline">
                <input type="radio" name="female" id="inputFemale" value="female"> 女
            </label>
            <label for="inputAge" class="sr-only">年龄</label>
            <input type="text" name="age" id="inputAge" class="form-control" placeholder="年龄" required>
            <label for="inputJob" class="sr-only">职业</label>
            <input type="text" name="job" id="inputJob" class="form-control" placeholder="职业" required>
            <label for="inputPassword" class="sr-only">密码</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="密码" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">注册</button>
            <div class="form-signup"><a href="login.php">已有账号，前去登陆</a></div>
        </form>
    </div>
</div>
</body>

<!--Import jQuery-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</html>
