<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>零境考勤管理系统</title>
    <link href="/ljCheck/Public/css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body style="background-color:#1c77ac; background-image:url(/ljCheck/Public/images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">
<div id="mainBody">
    <div id="cloud1" class="cloud"></div>
    <div id="cloud2" class="cloud"></div>
</div>


<div class="logintop">
    <span>欢迎登录零境考勤管理系统</span>
    <ul>
        <!--<li><a href="#">回首页</a></li>-->
        <li><a href="javascript:;" class="help">帮助</a></li>
        <li><a href="javascript:;" class="about">关于</a></li>
    </ul>
</div>

<div class="loginbody">

    <span class="systemlogo"></span>

    <div class="loginbox">

        <ul>
            <li><input id="login_name"  type="text" class="loginuser" /></li>
            <li><input id="login_password" type="text" class="loginpwd" /></li>
            <li><input id="login_btn" type="button" class="loginbtn" value="登录"/>
                <!--<label><input name="" type="checkbox" value="" checked="checked"/>记住密码</label>-->
                <!--<label><a href="#">忘记密码？</a></label>-->
            </li>
        </ul>

    </div>

</div>

<div class="loginbm">版权所有 2009-2016 上海零境网络科技有限公司</div>
<script src="/ljCheck/Public/js/jquery.min.js" type="text/javascript"></script>
<script src="/ljCheck/Public/js/cloud.js" type="text/javascript"></script>
<script src="/ljCheck/Public/plugins/layer/layer.js" type="text/javascript"></script>
<script src="/ljCheck/Public/js/login.js" type="text/javascript"></script>
</body>
</html>