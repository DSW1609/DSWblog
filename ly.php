<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link href="style/bstyle.css" rel="stylesheet" type="text/css" />
	<title>The Blog Designed By DSW!</title>
</head>

<body>
	<?
	session_start();
	?>
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
					<h1>留言列表</h1>
					<form method="get" action="cx.php">
						<div style="position: absolute;margin-left: 400px;margin-top: -62px;border: 1px;">搜索留言 <input name="keyword" type="text">
							<select name="sel">
								<option value="title">文章标题</option>
								<option value="content">文章内容</option>
							</select>
							<input type="submit" value="🔍">
						</div>
					</form>
					<div style="position: absolute;margin-left: 1000px;margin-top: -82px;">
						<a href="addform.php">
							<h2 style="display: inline-block;color:rgba(255,111,97,1.00);font-size:30px;">
								<img src="image/jia.gif" width="50px">
							</h2>
						</a>
					</div>
				</div>
				<div class="xhx2">
				</div>
				<div class="lybody">
					<?
					require('conn.php');
					if ($_GET["del"] == 1) {
						$selectid = $_POST["selected"];
						if (count($selectid) > 0) {
							$sel = implode(',', $selectid);
							mysql_query("delete from lyb where ID in($sel)") or die('执行失败');
							header("location:ly.php");
						}
					}
					$result = mysql_query("select * from lyb", $conn);
					if (isset($_GET['page']) && (int) $_GET['page'] > 0)
						$Page = $_GET['page'];
					else
						$Page = 1;
					$PageSize = 5;
					$result = mysql_query("select count(ID) from lyb", $conn);
					$row = mysql_fetch_row($result);
					$RecordCount = $row[0];
					$PageCount = ceil($RecordCount / $PageSize);
					$result = mysql_query("select * from lyb limit " . ($Page - 1) * $PageSize . "," . $PageSize, $conn);
					?>
					<form method="post" action="?del=1">
						<table>
							<div style="position: absolute;margin-top: -55px;margin-left: 1120px"><input type="submit" class="sc" value="删除">
							</div>
							<?
							while ($row = mysql_fetch_assoc($result)) {
							?>
								<!--留言内容代码-->
								<div class="lynr" style="width: 1200px;height:100px;position: relative;margin-top: 10px;margin-left: 10px;">
									<div class="tx" style="position:absolute;margin-top: 10px;"><img src="image/鱼.png" width="100px;"></div>
									<div class="xhx3" style="position: absolute;margin-top: 105px;margin-bottom: 10px;margin-left: -10px;"></div>
									<div class="lynr1" style="width: 1000px;height: 100px;position:absolute;margin-left: 120px;margin-top: -2px;">
										<div class="ck" style="position: absolute; margin-top:10px;margin-left: 1010px;}">
											<input type="checkbox" name="selected[]" value="<?= $row['ID'] ?>">
										</div>
										<div class="gx" style="position: absolute;margin-top:50px;margin-left: 990px;">
											<form method="POST" action="editform.php?id=<?= $row['ID'] ?>">
												<input type="submit" name="gengxin" value="更新">
											</form>
										</div>
										<div class="title">标题：
											<? echo $row["title"] ?>
										</div>
										<div class="content">内容：
											<? echo $row["content"] ?>
										</div>
										<div class="author">作者：
											<? echo $row["author"] ?>
										</div>
										<div class="Email">邮箱：
											<? echo $row["Email"] ?>
										</div>
										<div class="IP">IP：
											<? echo $row["IP"] ?>
										</div>
										<div class="addtime">时间：
											<? echo $row["addtime"] ?>
										</div>
									</div>
								</div>
							<?
							}
							mysql_free_result($result);
							?>
						</table>
					</form>
				</div>
			</div>
			<div class="yema" style="position: absolute;margin-top: -30px;margin-left: 900px;">
				<?
				if ($Page == 1) //如果是首页，则不现实首页和上一页的超链接；
					echo "<b> 首页 </b> <b> 上一页 </b>";
				else echo "<a href='?page=1'> 首页 </a><a href='?page=" . ($Page - 1) . "'> 上一页 </a>"; //不是首页 则显示超链接；并传递相应的页码值；
				for ($i = 1; $i <= $PageCount; $i++) { //循环设置数字页码链接；
					if ($i == $Page)
						echo "<b> $i </b>"; //如果是当前页则不现实页码链接；
					else
						echo "<a href='?page=$i'> $i </a>"; //显示超链接；
				}
				if ($Page == $PageCount)
					echo "<b> 下一页 </b> <b>末页</b> ";
				else echo "<a href='?page=" . ($Page + 1) . "'> 下一页 </a> <a href='?page=" . $PageCount . "'> 末页 </a> ";
				?></div>
			<div class="bottom">
				<h1>版权所有©济南职业学院王嘉辉25</h1>
			</div>
		</div>
	</div>
</body>

</html>