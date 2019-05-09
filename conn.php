<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>连接数据库</title>
</head>

<body>
	<?
  $conn = mysql_connect("localhost","root","123456");
  mysql_query("set name 'utf-8'");
  mysql_select_db("book",$conn);
?>
</body>

</html>