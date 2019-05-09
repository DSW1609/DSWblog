<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
<?    
	  require("conn.php"); 
	  $NAME = $_POST["ZCNAME"];
	  $PASSWORD = $_POST["ZCPASSWORD"];
	  $PHONE = $_POST["ZCPHONE"];
	  $sql = "insert into user(NAME,PASSWORD,PHONE) values ('$NAME','$PASSWORD','$PHONE')";
      mysql_query($sql);
	  header("location:bindex.php");
?>
</body>
</html>