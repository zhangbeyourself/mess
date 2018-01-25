<?php
	include 'sql.php';
	//echo $link;
	$sql="select * from message";
	$r=mysql_query($sql); 
	$rows=array();
	while($row=mysql_fetch_assoc($r)){
		$rows[]=$row;
	}
	//var_dump($rows);
?>
<!DOCTYPE html>
<html>
<head>
	<title>躲雨的空间</title>
	<style type="text/css">
		#tagg{
		width:120px;height:1200px;background:#DCDCDC;margin:1px left;float:left;margin-left:150px;
		}
		#tag{
		width:800px;height:1200px;background:#DCDCDC;margin:1px left;float:left;margin-left:12px;
		}
		#ta1{width:800px;height:100px;background:#99FF99;margin:10px left;float:left;margin-left:0px;
		}
	</style>
</head>
<body>
	<div>
		<img src="zone.jpg">
	</div>
	<div id="tagg">
		<ul>
			<li><a href="head.php">主页</a></li>
			<li><a href="">日志</a></li>
			<li><a href="">相册</a></li>
			<li><a href="index.php">留言板</a></li>
			<li><a href="">说说</a></li>
		</ul>
	</div>
	<div id="tag">
		<div id="ta1">
		<p style="color: red;">留言() <p style="margin-left:600px;"><a href="">上一页</a>&nbsp;&nbsp;<a href="">下一页</a></p></p> 
		</div>
		<?php foreach($rows as $k=>$v) {;?>
		<div>
			<b><?php echo $v['title'];?></b>
			<p><?php echo $v['content'];?></p>
			<p style="margin-left:600px"><?php echo $v['addtime'];?></p><br/>
		</div>
		<?php };?>
	</div>


</body>
</html>