<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BLOG</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/showPic.js"></script>
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
                    <span><a href="message-board.php">留言板</a></span>┊
                    <span><a href="album.php">相册</a></span>
                </div>
            </div>
        </div>
        </div>
        <!--相册-->
        <ul>
        	<li>
        		<a href="image/login.jpg" class="btn btn-info" onclick="showPic(this); return false;">图片库</a>
        	</li>
        	<?php
        	include("putphoto.php");
        	foreach ($photos as $key) {
        	?>
        	<li>
        	    <a class="btn btn-info" href="<?php echo"$key[iamge]";?>" onclick="showPic(this); return false;"><?php echo"$key[username]";?>上传了照片</a>
        	</li>
        	<?php
               } 
        	?>
            <li>
            	<form action="photo.php" method="post" enctype="multipart/form-data">
                    <input class="btn btn-success"type="file" name="myfile">
                    <input class="btn btn-danger" style="position:relative;left:300px;top:-35px" type="submit" name="submit" value="up">
                </form>
            </li>
        </ul>
        <div style="position:relative;left:375px;top:-100px">
		<div>
		<img id="lalala" style="hight:500px;width:500px;" src="image/login.jpg">
		</div>
		</div>
</body>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>