<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
<?
require("conn.php");
$id=$_GET["id"];
$sql="select * from lyb where ID = $id";
$result = mysql_query($sql,$conn);
$row = mysql_fetch_assoc($result);
?>
<head>
	<meta charset="utf-8">
	<link href="style/bstyle.css" rel="stylesheet" type="text/css"/>
	<title>The Blog Designed By DSW!</title>
</head>

<body>
	<div class="all" style="position: relative">
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
				<a href="ly.php">
					<li>留言</li>
				</a>
				<a href="">
					<li>发现</li>
				</a>
			</div>
			<div class="lylb">
				<div class="lynav">
					<div onclick="location.href='ly.php'" style="cursor:pointer;"><h1>🔙返回</a></h1></div>
					<form method="post" action = "edit.php?id=<?= $row["ID"] ?>">     
   <table>
	   <div class="lynr" style="width: 1200px;height:100px;position: relative;margin-top: 10px;margin-left: 10px;">
								<div class="tx" style="position:absolute;margin-top: 10px;margin-left: 500px;"><img src="image/鱼.png" width="100px;"></div>
								<div class="lynr2">
									<div class="title" style="margin-left: 10px;"><a>标题：</a><input type="text" name ="title" style="width: 204px;height: 22px;" value="<?= $row["title"] ?>">
									</div>
									<div class="author" style="position: absolute;margin-top: -20px;margin-left: 10px;"><a>作者：</a><input style="width: 204px;height: 22px;" type="text" name ="author" value="<?= $row["author"] ?>">
									</div>
									<div class="Email" style="position: absolute;margin-top: 22px;margin-left: 10px;"><a>邮箱：</a><input style="width: 204px;height: 22px;" type="text" name ="Email" value="<?= $row["Email"] ?>">
									</div>
									<div style="position: absolute;margin-top: 80px;margin-left: 10px;"><a>留言</a></div>
									<div style="position: absolute;margin-top: 105px;margin-left: 10px;"><a>内容：</a></div>
									<div class="content" style="margin-left: 70px; margin-top: 78px;"><textarea name="content"  cols="22" rows = "4"><?= $row["content"] ?></textarea>
									</div>
								</div>
	                        </div>
       
						<div class="tj"><input type="submit" style="position:absolute;margin-left: 530px;margin-top: 250px;" value="提交"></div>
   </table>
</form>
				</div>
				<div class="xhx2">
				</div>
												<div class="bk"></div>
			</div>
		</div>
	</div>
</body>
</html>