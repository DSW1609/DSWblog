<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
<?
	  require("conn.php"); 
	  $title = $_POST["title"];
	  $author = $_POST["author"];
	  $Email = $_POST["Email"];
	  $content = $_POST["content"];
	  $IP = $_SERVER["REMOTE_ADDR"];
	  $id = $_GET["id"];
	  $sql = "update lyb set 
	  title='$title',author='$author',Email='$Email',content='$content' where ID = $id";
      mysql_query($sql) or die('更新失败');
	  header("location:ly.php");
?>
</body>
</html>