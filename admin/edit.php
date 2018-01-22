<?php
	$id=$_GET['id'];
	include"../connect.php";
	//echo $id;
	$sql="select * from mes_info where id='{$id}'";
	$r=mysql_query($sql);
	$row=mysql_fetch_assoc($r);
	//var_dump($row);

?>
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>记录下我的心事</title>
	<style>
		p{
			font-style:italic;
			color:blue;
		}
	</style>
</head>
<body>
	<div class="style">
	<form action="update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['id'];?>">
		<p> 主题</p> <br/>
		<input type="text" name="main" value="<?php echo $row['title'];?>" style="width:300px;height: 20px;"><br/><br/><br/><br/ >
		<p>内容</p><br/>
		<input type="text" name="content" value="<?php echo $row['content'];?>" style="width:300px;height: 200px;"><br/><br/>
		<input type="submit" name="anniu" value="完成修改">
	</form>
	</div>
</body>
</html>