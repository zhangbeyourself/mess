<?php
	include 'sql.php';
	$page=isset($_GET['page'])? $_GET['page'] : 1;
	$size=6;
	$x=($page-1)*$size;
	$sql="select * from message";
	$r=mysql_query($sql);
	$ro=mysql_num_rows($r);
	//var_dump($row);
	$pagemax=ceil($ro/$size);
	$lsql="select * from message order by id desc limit $x,$size";
	$re=mysql_query($lsql);
	$rows=array();
	while ($row=mysql_fetch_assoc($re)) {
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
			<li><a href="page.php">主页</a></li>
			<li><a href="">日志</a></li>
			<li><a href="">相册</a></li>
			<li><a href="index.php">留言板</a></li>
			<li><a href="">说说</a></li><li>
				<a href="admin/login.php">登录管理</a></li>
		</ul>
	</div>
	<div id="tag">
		<div id="ta1">
		<p style="color: red;">留言(<?php echo $ro;?>)</p><p style="margin-left:600px;">
			<a href="page.php?page=1">首页&nbsp;</a>
			<a href="page.php?page=<?php echo $page<=1?'1':$page-1;?>">上一页</a>&nbsp;
			<a href="page.php?page=<?php echo $page<$pagemax?$page+1:$pagemax;?>">下一页</a>
			<a href="page.php?page=<?php echo  $pagemax ;?>">尾页</a></p> 
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