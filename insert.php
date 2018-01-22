<?php
	$main=$_POST['main'];
	$tet=$_POST['tet'];
	$addtime=date("Y-m-d H:i:s");//字符串a
	//echo $main."<br/>";
	//echo $tet."<br/>";
	//echo $addtime;
	if($main==''||$tet=='')
	{
		//echo "内容为空！";
		echo "<script>alert('标题不能为空');window.location.href='add.php';
		</script>";
		exit;//注意alert里面的引号要为单引号！
	}
	
	//1连接数据库
	$link=@mysql_connect("localhost","root","azhang")or die("连接数据库错误".mysql_error());
	//echo $link.'<br>';
	//2选择数据库
	mysql_select_db("mes",$link); 
	//3设置编码
	mysql_query("set names utf8");
	$sql="insert into mes_info (title,content,addtime) values ('{$main}','{$tet}','{$addtime}')";
	//$sql="select * from mes_info";
	$res=mysql_query($sql);
	if(!$res){
		echo "<script>alert('标题不能为空');window.location.href='add.php';
		</script>";
		exit;//注意alert里面的引号要为单引号！
	}
	else{
		echo "<script>alert('你的心情已经记录，以后要来看哦！');window.location.href='page.php';
		</script>";//注意alert里面的引号要为单引号！
	}
	mysql_close($link);
?>
