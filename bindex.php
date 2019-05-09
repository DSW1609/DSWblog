<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link href="style/bstyle.css" rel="stylesheet" type="text/css"/>
	<title>The Blog Designed By DSW!</title>
</head>
<body>
<script language="javascript">
      function dl(){
      	alert("请先登录");
      }
      </script>
	<?
	require('conn.php');
	session_start();
	$NAME=($_POST["zh"]);
	$PASSWORD=($_POST["mm"]);
	$check_query=mysql_query("select * from user where NAME='$NAME' and PASSWORD ='$PASSWORD' limit 1");
	if($result=mysql_fetch_array($check_query)){
	$zh=($_POST["zh"]);
	$_SESSION['zh']=$zh;
	$dl='ly.php';
	}else {
	$dl='lywdl.php';
	}
	?>
	<div class="all">
		<div class="body">
			<div class="header">
				<? if(isset($_SESSION['zh'])){?>
				<div class="txdl"><a href="<?echo $_SESSION['zh']?>.php"><img src="image/wuwu.gif" width="50px;"></a></div>
				<div class="grzy">我的主页</div>
				<?
                 }else{ ?>
				<div class="txwdl"><a onClick="dl()"><img src="image/鱼.png" width="50px;"></a></div>
				<div class="qdl">请登录</div>
				<?}?>
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
			<div class="login">
				<form method="post" action="" style="position: absolute;margin-top:20px;margin-left: 20px;line-height: 38px;">
					<? if(isset($_SESSION['zh'])){?>
					<div style="position: absolute;width: 100px;height: 100px;margin-top: -20px;margin-left: -15px;">
						<img src="image/wuwu.gif" width="130px;">
					</div>
					<div class="gz"><a>🔟关注：<a style="color: red;">999</a></a></div>
					<div class="xx"><a>🆕消息：<a style="color: red;">999</a></a></div>
					<div class="fs"><a>🆙粉丝：<a style="color: red;">999</a></a></div>
					<div class="zhbj">
				<div class="zh"><?echo $_SESSION['zh']?>😃🔥</div>
				</div>
					<div class="tc" style="position: absolute;margin-left: 210px;font-size: 25px;width: 100px;margin-top: 115px;"><a href="zhuxiao.php">退出</a></div>
			    <?
                 }else{ ?>
			            <table width="98%">
						<tr><input  placeholder="🆔用户名" style="width: 250px;height: 30px;font-size: 20px;margin-left: 5px;margin-bottom: 10px;" type="text" name="zh"/>
						</tr></br>
						<tr><input  placeholder="🔢密码" style="width: 250px;height: 30px;font-size: 20px;margin-left: 5px;margin-bottom: 5px;" type="password" name="mm"/>
					    </tr></br>
						<tr><td align="center"><input type="submit" name="dl" style="width: 252px;height: 35px;font-size: 20px; margin-left: 3px;background-color:rgba(250,152,141,1.00);cursor: pointer;border: rgba(250,152,141,1.00) solid" value="登录"></td></tr>
						<div class="ljzc">还没有账号？<a href="zc.php">立即注册!</a></div>
					</table>
		     <?}?>
				</form>
			</div>
			<div class="new">
				<h1 style="text-align: center">最新日志</h1>
				<div class="hx3"></div>
				<div style="position: relative;text-align: left;margin-left: 8px;">
				<h2 style="margin-top: 8px;">今天天气真好</h2>
				<h2>今天下雪真好</h2>
				<h2>今天放假真好</h2>
				<h2>今天回家真好</h2>
				<h2>今天学PHP真好</h2>
				<h2>今天学JAVA真好</h2>
				<h2>今天学LINUX真好</h2>
				<h2>今天学ANDROID真好</h2>
				</div>
			</div>
			<div class="bottom">
				<h1>版权所有©济南职业学院王嘉辉25</h1>
			</div>
			<div class="newrizhi">
				<h1 style="text-align:left;margin-left: 350px;">最新日志</h1>
				<div class="xhx"></div>
				<h1>PHP array() 函数</h1>
				<h2>创建名为 $cars 的数值数组，赋三个元素给它，并打印包含数组值的文本：<br>$cars=array("Volvo","BMW","Toyota");  
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";  </h2>
				<div class="xhx"></div>
				<h1>PHP pos() 函数</h1>
				<h2>输出数组中的当前元素的值：<br>$people = array("Peter", "Joe", "Glenn", "Cleveland");  
echo pos($people) . "<br>"; </h2>
				<div class="xhx"></div>
				<h1>PHP date_diff() 函数</h1>
				<h2>计算两个日期间的差值：<br>$date1=date_create("2013-03-15");  
$date2=date_create("2013-12-12");  
$diff=date_diff($date1,$date2);</h2>
	    </div>
     </div>
	</div>
</body>
</html>