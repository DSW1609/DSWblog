<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<?php
    session_start();
    header('Content-type:text/html;charset=utf-8');
    if(isset($_SESSION['zh'])){
            session_unset();//free all session variable
            session_destroy();//销毁一个会话中的全部数据
            setcookie("zh",'',time()-3600);//销毁与客户端的卡号
            header('location:bindex.php');
        }else{
            header('location:bindex.php');
        }
?>
</body>
</html>