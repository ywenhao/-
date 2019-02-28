<?php
// session 存值并匹配用户输入值
    if (isset($_REQUEST['authcode'])) {
        session_start();
        if (strtolower($_REQUEST['authcode'])==$_SESSION['authcode']) {//strtolower转化为小写的函数
            echo"验证码正确！";
            # code...
        }
        else{
            echo"验证码错误！";
        }
        exit();
    }
?>