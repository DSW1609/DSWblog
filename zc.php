<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link href="style/bstyle.css" rel="stylesheet" type="text/css"/>
	<title>The Blog Designed By DSW!</title>
</head>

<body>
	<?
	require('conn.php');
	$result = mysql_query("Select * from lyb",$conn);
	?>
	<?
	//开启session
	session_start();
	if(isset($_POST["dl"])){
		$zh = $_POST["zh"];
		$mm = $_POST["mm"]; 
		$_SESSION['zh']=$zh;
	}
	if(isset($_SESSION['zh']))
		$dl='ly.php';
	else 
		$dl='lywdl.php';
	?>
	<div class="all">
		<div class="body">
			<div class="header">
				<P>THE BLOG DESIGNED BY DSW</P>
			</div>
			<div class="nav">
				<a href="bindex.php">
					<li>首页</li>
				</a>
				<a href="">
					<li>日志</li>
				</a>
				<a href="">
					<li>相册</li>
				</a>
				<a href="<?echo $dl?>">
					<li>留言</li>
				</a>
				<a href="">
					<li>发现</li>
				</a>
			</div>
			<div class="zc">
				<div class="zcfh" onclick="location.href='bindex.php'"><h1>🔙返回</a></h1></div>
				<h1 style="margin-top: 10px;font-size: 50px;">欢迎注册</h1>
				<div class="border">
				<form method="post" action = "zcinsert.php"> 
				<input placeholder="用户名" type="text" name="ZCNAME" style="width:500px;height: 60px;margin: 20px;border-radius: 10px;border: rgba(255,255,255,1.00);font-size:30px;"><br/>
				<input placeholder="密码" type="password" name="ZCPASSWORD" style="width:500px;height: 60px;margin: 20px;border-radius: 10px;border: rgba(255,255,255,1.00);font-size:30px;"><br/>
				<select style="width:120px;height: 60px;margin: 20px;border-radius:10px;border: rgba(255,255,255,1.00);font-size:30px;"  >  
                 <option value="1">+86</option>
                 <option value="2">+87</option>
                 <option value="3">+88</option>
                 </select>
				<input placeholder="手机号码" type="text" name="ZCPHONE" maxlength="11" style="width:330px;height: 60px;margin:20px;border-radius: 10px;border: rgba(255,255,255,1.00);font-size:30px;"><br/>
				<input type="submit" name="zc" value="立即注册" style="width:500px;height: 60px;margin: 20px; border-radius:10px;border: rgba(255,255,255,1.00);background:rgba(253,176,151,1.00);font-size:30px;letter-spacing: 10px; cursor: pointer"><br/>
				</form>
				<input type="radio" checked="true" style="margin-left: -180px;">我已阅读并同意相关服务条款和隐私政策
				</div>
				<div class="zcbottom">
				<h1>版权所有©济南职业学院王嘉辉25</h1>
			</div>
	    </div>
     </div>
	</div>
</body>
</html>