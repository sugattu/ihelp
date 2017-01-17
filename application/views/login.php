<?php
/**
 * 登录页
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/16 0016
 * Time: 17:37
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>欢迎使用ihelp</title>
    <link rel="stylesheet" href="./static/css/style.css">
</head>
<body>
<div class="wrapper wrapper-enter">
    <div class="part-main">
        <div class="enter-header">登录</div>
        <form action="" method="post">
            <ul class="enter-item">
                <li class="enter-list">
                    <span class="enter-label">手机号</span>
                    <div class="enter-info"><input type="text" class="enter-input" placeholder="请输入手机号码"></div>
                </li>
                <li class="enter-list">
                    <span class="enter-label">密码</span>
                    <div class="enter-info"><input type="password" class="enter-input" placeholder="请输入登录密码"></div>
                </li>
            </ul>
            <div class="enter-determine"><button type="button" class="enter-btn">登录</button></div>
        </form>
        <div class="enter-link">
            <a href="#" class="link-login">快速登录</a>
            <a href="#" class="link-register">立即注册</a>
            <a href="#" class="link-password">忘记密码</a>
        </div>
        <div class="enter-copyright">版权信息</div>
    </div>
</div>
</body>
</html>