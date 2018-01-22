<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>记录下我的心事</title>
	<style>
		
		a{
			font-style:italic;
			color:blue;
			font-size:30px;
		}
	</style>
</head>
<body>
	<div class="style">
		<ul>
		<li><a href="add.php">留言板</a>  发布留言  查看留言</li>
		</ul>
	</div>
		<div class="style">
	<form action="insert.php" method="post">
		<p> 主题</p> <br/>
		<input type="text" name="main" style="width:300px;height: 20px;"><br/><br/><br/><br/>
		<p>内容</p><br/>
		<input type="text" name="tet" style="width:300px;height: 200px;"><br/><br/>
		<input type="submit" name="anniu" value="完成">
	</form>
	</div>
	
</body>