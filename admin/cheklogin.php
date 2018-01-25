<?php
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	if($username==''||$password==''){
		echo "<script>alert('!');window.location.href='login.php'</script>";
		exit;
	}
	include '../sql.php';
	//echo $link;
	$sql="select * from admin where user_name='{$username}' and pass_word='{$password}'";
	$r=mysql_query($sql);
	$re=mysql_num_rows($r);
	//var_dump($re);
	if($re){
		echo "<script>alert('欢迎回来！');window.location.href='manage.php'</script>";
	}
	else{
		echo "<script>alert('用户名或密码错误，请重新输入！');window.location.href='login.php'</script>";
	}
?>