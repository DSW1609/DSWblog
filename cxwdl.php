<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<!doctype html>
<html>

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
				<a href="lywdl.php">
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
					</div></form>
				</div>
				<div class="xhx2">
				</div>
				<div class="lybody">
					<?
		            require('conn.php');
					//查询代码！
			        $keyword = trim($_GET['keyword']);
					$sel=$_GET['sel'];
					$sql="select * from lyb";
		            if($keyword <>"")
					$sql="where $sel like '% $keyword%'";
					$rs=mysql_query($sql) or die('查询失败');
					if(mysql_num_rows($rs)>0){
					echo "共找到".mysql_num_rows($rs)."条留言";
					//删除代码！
					if($_GET["del"]==1){
		            $selectid=$_POST["selected"];
		            if(count($selectid)>0){
		            $sel=implode(',',$selectid);
		            mysql_query("delete from lyb where ID in($sel)") or die ('执行失败');
		            header("location:cx.php");
		            }
		      	   }
				$rs = mysql_query("select * from lyb",$conn);
				if(isset($_GET['page'])&&(int)$_GET['page']>0)
	            $Page=$_GET['page'];
	            else
	            $Page=1;
	            $PageSize=5;
	            $rs=mysql_query("select count(ID) from lyb",$conn);
	            $row=mysql_fetch_row($rs);
	            $RecordCount=$row[0];
                $PageCount=ceil($RecordCount/$PageSize);
	            $rs=mysql_query("select * from lyb limit ".($Page-1) * $PageSize.",".$PageSize,$conn);
					?>
		        <form method="post" action="?del=1">
				<table>
					<? 
					while($row=mysql_fetch_assoc($rs)){
					?>
					<div class="lynr" style="width: 1200px;height:100px;position: relative;margin-top: 7px;margin-left: 10px;">
						<div class="tx" style="position:absolute;margin-top: 10px;"><img src="image/鱼.png" width="100px;"></div>
						<div class="xhx3" style="position: absolute;margin-top: 100px;margin-bottom: 10px;margin-left: -10px;"></div>
						<div class="lynr1" style="width: 1000px;height: 100px;position:absolute;margin-left: 120px;margin-top: -2px;">
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
				   mysql_free_result($rs);
				   }
				   else echo "没有搜到任何留言";
				   ?>
				</table>
			</form>
				</div>
			</div>
			<div class="yema" style="position: absolute;margin-top: -30px;margin-left: 900px;">
						<?
	                  if($Page==1) //如果是首页，则不现实首页和上一页的超链接；
	                  	echo "<b>首页</b> <b>上一页 </b>";
	                  else echo "<a href='?page=1'>首页</a><a href='?page=".($Page -1)."'>上一页</a>"; //不是首页 则显示超链接；并传递相应的页码值；
	                  for($i=1;$i<=$PageCount;$i++){ //循环设置数字页码链接；
	                  if($i==$Page)
	                  	echo "<b> $i </b>"; //如果是当前页则不现实页码链接；
	                  else 
	                  	echo "<a href='?page=$i'>$i</a>";//显示超链接；
	                  }
	                  if($Page==$PageCount)
	                  	echo "<b>下一页</b> <b>末页</b> ";
	                  else echo "<a href='?page=".($Page+1)."'>下一页</a> <a href='?page=" . $PageCount."'>末页</a> ";
	                  ?></div>
			    <div class="bottom">
				<h1>版权所有©济南职业学院王嘉辉25</h1>
			</div>
		</div>
	</div>
</body>

</html>
</body>
</html>