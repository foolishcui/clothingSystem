<?php
/**
 * Created by PhpStorm.
 * User: Lipcui
 * Date: 14/11/2017
 * Time: 4:42 PM
 */

header("content-type:text/html;charset=utf-8");
date_default_timezone_set("PRC");
//开启 SESSION 存储数据
session_start();
define("ROOT",dirname(__FILE__));
//包含一些通用的路径
set_include_path(".".PATH_SEPARATOR.ROOT."/lib".PATH_SEPARATOR.ROOT."/core".PATH_SEPARATOR.ROOT."/configs".PATH_SEPARATOR.get_include_path());