<?php
	//include="../connect.php";
	$link=@mysql_connect("localhost","root","azhang");
	mysql_query("use mes");
	mysql_query("set names utf8");	
	$sql="select * from mes_info";
	$r=mysql_query($sql);
	$row=array();
	while($s=mysql_fetch_assoc($r)){
		$row[]=$s;
	}
	//var_dump($row);
?>

<!DOCTYPE html>
<html>
<head>
		<title>管理员页面</title>
	<style>
		
		a{
			font-style:italic;
			color:blue;
			font-size:15px;
		}
	</style>
</head>
<body>
	<div class="style">
		<ul>
		<li><a href="../page.php">留言板</a>  <a href="../add.php">发布留言</a></li>
		</ul>
	</div>
	<table border="1">
		<p>管理</p>
	<div>
		<tr>
			<td>序号&nbsp;&nbsp;&nbsp;</td>
			<td>标题&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>留言时间&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>操作&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

		</tr>
		<?php foreach($row as $k=>$v){?>
		<tr>
			<td><?php echo $v['id'];?></td>
			<td><?php echo $v['title'];?></td>
			<td><?php echo $v['addtime'];?></td>
			<td><a href="edit.php?id=<?php echo $v['id'];?>">修改</a>
				<a href="delet.php?id=<?php echo $v['id']; ?>" onclick="return confirm('确定要删除吗?');">删除</a>	
			</td>

		</tr>
		<?php }?>
	</div>
	</table>
	
</body>
</html>