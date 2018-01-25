<?php
	$action=$_REQUEST['action'];
echo $action;
	include '../sql.php';
	$id=$_REQUEST['id'];
echo  $id;
	$sql="delete from message where id=$id";
	if($action=='delete'){
		$sql="delete from message where id='{$id}'";
		mysql_query($sql);
		echo "<script>alert('删除成功！');window.location.href='manage.php'</script>";
		exit;
	}
	else if($action=='update'){
		//echo "<script>alert('进入修改页面！');window.location.href='delete.php'</script>";
		$sqll="select * from message where id='{$id}'";
		$r=mysql_query($sqll);
		$re=mysql_fetch_assoc($r);
		$row=array();
		$row[]=$re;
	}

?>
<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>躲雨的空间</title>
	<style type="text/css">
		#tagg{
		width:120px;
		height:1200px;
		background:#DCDCDC;
		margin:1px left;
		float:left;
		margin-left:150px;
		
		}
		#tag{
		width:800px;
		height:1200px;
		background:#DCDCDC;
		margin:1px left;
		float:left;
		margin-left:12px;
		
		}
		#ta1{
		width:800px;
		height:100px;
		background:#99FF99;
		margin:10px left;
		float:left;
		margin-left:0px;
		
		}
	</style>
</head>
<body>
	<div>
		<img src="../zone.jpg">
	</div>
	<div id="tagg">
		<ul>
			<li><a href="manage.php">主页</a></li>
			<li><a href="">日志</a></li>
			<li><a href="">相册</a></li>
			<li><a href="../index.php">留言板</a></li>
			<li><a href="">说说</a></li>
		</ul>
	</div>
	<?php foreach($row as $k=>$v) {;?>
	<div>	
	<form method="POST" action="update.php">
		<input type="hidden" name="id" value="<?php echo $v['id'];?>">
		<p style="font-size: 20px;">标题</p>
		<input type="text" name="title" value="<?php echo $v['title'];?>"><br/><br/>
		<p style="font-size: 20px;">内容</p>
		<input type="text" name="content" style="width:400px;
		height:100px;" value="<?php echo $v['content'];?>">	<br/><br/>
		<input type="submit" value="修改您的留言">
	</form>	
	</div>
	<?php };?>
</body>
</html>
