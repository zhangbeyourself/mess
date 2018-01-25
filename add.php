<?php
	ini_set('date.timezone','Asia/Shanghai');//Asia/Chongqing ，Asia/Shanghai ，Asia/Urumqi 设置时区，和北京时间差半个小时
	$title=$_REQUEST['title'];
	$content=$_REQUEST['content'];
	$addtime=date('Y-m-d H:i:s');
	if($title==''|| $content==''){
		echo "<script>alert('标题和内容不能为空！');window.location.href='head.php';</script>";
		exit;
	}
	//echo $addtime;
	$link=@mysql_connect("localhost","root","azhang");
	//echo $link;
	mysql_query("use message");
	mysql_query("set names utf8");
	$sql="insert into message (title,content,addtime) values ('{$title}','{$content}','{$addtime}')";
	$r=mysql_query($sql);
	if($r){
		echo "<script>alert('留言成功！即将返回首页！');window.location.href='page.php';</script>";
	}
	else{
		echo "<script>alert('留言失败！');window.location.href='index.php';</script>";
		exit;
	}
?>