<?php
//1.连接数据库
$link=@mysql_connect("localhost","root","azhang")or die("连接数据库错误".mysql_error());
//2.选择数据库
mysql_select_db("mes");
//3.设置编码
mysql_query("set names utf8");
//4.写入sql语句
$sql="select * from mes_info";
$r=mysql_query($sql);
//echo mysql_affected_rows();
//$s=mysql_fetch_assoc($r);
$rows=array();
while($row=mysql_fetch_assoc($r)){
	$rows[]=$row;
}
//var_dump($rows);
?>

<!DOCTYPE>
<html>
<head>
	<title>记录下我的心事</title>
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
		<li><a href="index.php">留言板</a>  <a href="add.php">发布留言</a>  查看留言</li>
		</ul>
	</div>
	<?php foreach($rows as $k=>$v):?>
	<div >
	<?php
	echo $v['title'];
	?> 	
	</div><br/>
	<div   style="height: 120px;">
			<?php
	echo $v['content'];
	?>
	</div>
	<div>
		<?php
	echo $v['addtime'];
	?>
	</div><br/>
<?php endforeach; ?>
</body>

</html>