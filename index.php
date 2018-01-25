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
		<img src="zone.jpg">
	</div>
	<div id="tagg">
		<ul>
			<li><a href="page.php">主页</a></li>
			<li><a href="">日志</a></li>
			<li><a href="">相册</a></li>
			<li><a href="index.php">留言板</a></li>
			<li><a href="">说说</a></li>
		</ul>
	</div>
	<div>
	<form method="POST" action="add.php">
		<p style="font-size: 20px;">标题</p>
		<input type="text" name="title"><br/><br/>
		<p style="font-size: 20px;">内容</p>
		<input type="text" name="content" style="width:400px;
		height:100px;">	<br/><br/>
		<input type="submit" value="发表您的留言">
	</form>
	</div>
</body>
</html>
