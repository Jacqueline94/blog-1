<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BLOG</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
                            <span class="caret"></span>
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
                
                <h1>
                   <?php echo "$_COOKIE[username]";?>
                </h1>
                
                </div>
                <div class="website">http://blog.sina.com.cn/u/**********</div>
                <!--个人首页导航-->
                <div class="navigation">
                    <span><a href="homepage.php">主页</a></span>┊
                    <span><a href="#">关注</a></span>┊
                    <span><a href="message-board.php">留言板</a></span>┊
                    <span><a href="#">相册</a></span>
                </div>
            </div>
        </div>
        </div>
        <!--个人首页内容-->
        <div class="mid">
        <div class="mid">
            <!--相册-->
            <div class="photo_album">
                <div  class="photo_album_head"><sapn class="left">相册专辑</sapn></div>     
                <div class="album">
                    <ul>
                        <li>
                            <div class="smallalbum">
                                <a href="#"><img src="img/photo.jpg"width="90px"height="90px"></a>
                            </div>
                            <div class="smallalbumname"><a href="">默认专辑</a></div>
                        </li>
                        <li>
                            <div class="smallalbum">
                                <a href="#"><img src="img/photo.jpg"width="90px"height="90px"></a>
                            </div>
                            <div class="smallalbumname"><a href="">默认专辑</a></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--评论-->
            <div class="review">
                <div  class="review_head"><sapn class="left">评论</sapn></div>
                <!--评论内容-->
                <?php
                    include("../admin/putcomment.php");
                         foreach ($allcomment as $key) {
                    ?>
                <div class="rev">
                <div class="rev-body">
                    <h2><a href="#"><?php echo"$key[username]";?></a></h2>
                    <p><b><?php echo"$key[comment]";?></b></p>
                </div>
                </div>
                    <?php
                    } 
                    ?>
            </div>
            <!--博客-->
            <div class="blogs">
                <div  class="blogs_head"><sapn class="left">博文</sapn></div>
                <?php  
                     include("../admin/putnews.php");
                     foreach ($news as $v) {    
                ?>
                <div class="bloglist">
                <div class="blogs-body">
                    <h1><a href="#"><?php echo"$v[top]";?></a></h1>
                    <p><b><?php echo"$v[text]"?></b></p>
                </div>
                </div>
                <?php 
                }
                ?>
            </div>
            <!--留言-->
            <div class="message">
                <div  class="message_head"><sapn class="left">留言</sapn></div>
                <div class="message_board">
                <div class="message_body">
                    <a href="#">
                        <h3>张三</h3>
                        <p>在这里有网友、好友给您的留言</p>
                    </a>
                </div>
                </div>
                 <div class="message_board">
                <div class="message_body">
                    <a href="#">
                        <h3>张三</h3>
                        <p>在这里有网友、好友给您的留言</p>
                    </a>
                </div>
                </div>
                 <div class="message_board">
                <div class="message_body">
                    <a href="#">
                        <h3>张三</h3>
                        <p>在这里有网友、好友给您的留言</p>
                    </a>
                </div>
                </div>
                 <div class="message_board">
                <div class="message_body">
                    <a href="#">
                        <h3>张三</h3>
                        <p>在这里有网友、好友给您的留言</p>
                    </a>
                </div>
                </div>
                 <div class="message_board">
                <div class="message_body">
                    <a href="#">
                        <h3>张三</h3>
                        <p>在这里有网友、好友给您的留言</p>
                    </a>
                </div>
                </div>   
            </div>
            <!--日志-->
            <form method="post" action="../admin/comment.php" id="position3">
                <span class="form-contorl btn btn-danger"><font size="3px">说点什么吧:</font></span>
            <div class="form-group">
                <textarea class="form-contorl" name="comment" row="10" style="hight:700px;width:700px;"></textarea>
            </div>
                <input type="submit" class="btn btn-info">
            </form>
    </div>
</body>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>