<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BLOG</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="whole">
        <!--工具栏-->
        <div class="head">
        <div class="mid">
            <img src="img/log.png" class="log">
            <!--搜索框-->
            <div class="search">
                <input class="form-control" type="text" placeholder="查找热门博客">
                <button class="btn_btn-GO"></button>
            </div>
            <!--头部导航-->        
            <div class="head_nav">
                <ul class="nav nav-pills">
                    <!--username-->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">     
                            test<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">博客</a></li>
                            <li><a href="#">相册</a></li>
                            <li><a href="#">退出</a></li>
                        </ul>
                    </li>
                    <li class="nav_one"><a href="#">个人中心</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">       
                            发博文<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">写日志</a></li>
                            <li><a href="#">写微博</a></li>
                            <li><a href="#">发照片</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            消息<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">评论</a></li>
                            <li><a href="#">留言</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>    
        </div>
        <!--个人首页-->
        <div class="top">
        <div class="mid">
            <div class="information">
                <div class="name">
                    <!--username-->
                    <h1><?php echo"$_COOKIE[username]"; ?></h1>
                </div>
                <div class="website">http://blog.sina.com.cn/u/**********</div>
                <!--个人首页导航-->
                <div class="navigation">
                    <span><a href="homepage.php">主页</a></span>┊
                    <span><a href="#">关注</a></span>┊
                    <span><a href="messageboard.php">留言板</a></span>┊
                    <span><a href="#">相册</a></span>
                </div>
            </div>
        </div>
        </div>
        <!--博客列表-->
        <div class="mid">
        <div class="mid">
        	<div class="blogs">
                <div  class="blogs_head"><sapn class="left">好友留言</sapn></div>
                <?php
                    include("../admin/putmessage.php");
                    foreach ($allcomment as $key) {
                ?>
                <div class="bloglist">
                <div class="blogs-body">
                    <h1><a href="#"><?php echo"$key[sendername]";?></a></h1>
                    <p><b><?php echo"$key[message]";?></b></p>
                </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <ul class="pagination pagination-lg">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul> 
        </div>
        
        </div>
        <!--写博文-->
        <div class="bottom">
        <div class="mid">
            <div class="sayword">说点什么吧^_^</div>
        <form action="../admin/message.php" method="post">
            <sqan class="text-info">你想留言给哪位好友：</span>
                <input type="text" name="username">
            <textarea class="form-control" rows="3" name="message"></textarea>
            <div class="btn-group dropup">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    所有人可见<span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">所有人可见</a></li>
                    <li><a href="#">仅自己可见</a></li>
                </ul>
                <input type="submit" class="btn btn-primary" value="发表">
                </div>
             </form>
        </div>
        </div>
    </div>
</body>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>