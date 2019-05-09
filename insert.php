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
	  $sql = "insert into lyb(title,author,Email,content,IP) values ('$title','$author','$Email','$content','$IP')";
      mysql_query($sql);
	  header("location:ly.php");
?>
</body>
</html>