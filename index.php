<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Your Blog</title>
	<link href="home/css/bootstrap.css" type="text/css" rel="stylesheet" />
  <script language="javascript">
     function CheckPost(){
      if(myform.email.value=="")
      {
        alert("请填写邮箱");
        return false;
      }
      if(myform.password.value=="")
      {
        alert("请输入您的邮箱密码");
        return false;
      }
     }
  </script>
</head>
<body>
  <div style="position:absolute; width:100%; height:100%; z-index:-1">    
  <img src="home/image/login.jpg" height="100%" width="100%"/>    
  </div>    
	<h1 class="text-center">
    <font color="#6C3365">Welcome To Your World</font>
  </h1>
	<form role="form" class="position" action="admin/checklog.php" method="post" name="myform" onsubmit="return CheckPost()">
  <div class="form-group">
    <label>邮箱：</label>
    <input type="email" class="form-control" name="email" placeholder="请输入您的邮箱地址">
  </div>
  <div class="form-group">
    <label>密码</label>
    <input type="password" class="form-control" name="password" placeholder="请输入您的邮箱密码">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> 记住密码
    </label>
  </div>
  <button type="submit" class="btn btn-success">Login</button>
</form>	
<form action="home/register.html" class="position2">
  <button type="submit" class="btn btn-info" >register</button>
</form>
</body>
</html>
