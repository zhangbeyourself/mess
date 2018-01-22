<?php
	//1.接收数据
	$username=$_POST['name'];
	$password=$_POST['pw'];
	//echo $username ."<br/>". $password;
	//2.验证用户名和密码是否为空
	if($username==""||$password==""){
		echo"<script>alert('用户名和密码为空!');window.location.href='login.php';</script>";
		exit;
	}
	//3.验证用户名和密码是否正确
	$link =@ mysql_connect("localhost","root","azhang")or die("连接数据库错误".mysql_error());
	//echo $link;
	mysql_query("use mes");
	mysql_query("set names utf8");
	$sql="select * from admin where user_name='{$username}' and pass_word='{$password}'";
	$r=mysql_query($sql);
	$rows=mysql_num_rows($r);
	if(!$rows){
		echo"<script>alert('用户名或密码错误!');window.location.href='login.php';</script>";
		exit;
	}
	else{
		echo"<script>alert('欢迎回来!');window.location.href='index.php';</script>";
	}
	//var_dump($r);
	//$row=mysql_fetch_assoc($r);
	//var_dump($row);
?>


