<?php
	$size=3;//每页显示的内容条数
	$page=isset($_GET['page'])? $_GET['page'] :1;//判定有没有设置页数，用三元运算符，如果设置那么显示设置页数，没有设置就显示page=1
	$off=($page-1)*$size;//第一页的值为0，第二页的值为3， 就是每一页的第一条内容
	$link=@mysql_connect("localhost","root","azhang");//连接数据库
	mysql_select_db("mes",$link);//选择数据库
	//$sql_one="select * from mes_info order by id desc limit $off+3,$size";
    $sql="select * from mes_info";//写sql语句
    $r=mysql_query($sql); //发送sql语句，得到一个返回的资源
    //$row=mysql_fetch_assoc($r);
    //var_dump($row);
	$max=mysql_num_rows($r);//函数使用上面得到的资源后得到表中的条数
	$page_max=ceil($max/$size);//计算最大页数，比如13/3=5，向上取整
	//var_dump($page_max);//遍历下
	$sql_one="select * from mes_info order by id desc limit $off,$size";//sql语句分页  一次显示$size条从第$off条开始，以id升序来排列
	$result=mysql_query($sql_one);//发送sql语句
	$rows=array();//建一个空数组
	while($row=mysql_fetch_assoc($result)){
		$rows[]=$row;//取刚才的3个数组 放到空数组里面，每次取3个
	}
	//var_dump($rows);
?>

<!DOCTYPE html>
<html>
<head>
	<title>分页展示</title>
</head>
<body>
	<ul>
	<li><a href="page.php">查看留言板</a>  <a href="add.php">发布留言</a>  <a href="admin/login.php">登录管理</a></li>
	</ul><br/><br/>
	<ul>
		<!-- 用foreach来循环显示rows数组里的键值-->
		<?php foreach($rows as $k=>$v) {?>
	<li><?php echo $v['title']; ?></li>
	<li><?php echo $v['content']; ?></li>
	<li><?php echo $v['addtime']; ?></li><br/>
		<?php }?>
	</ul>
	<!-- 用四个连接来动态的显示不同的页数，同样的使用三元运算符来计算其中的php只是echo出一个数值-->
	<a href="page.php?page=1">首页</a>
	<a href="page.php?page=<?php echo $page>=2 ? $page-1 : 1;?> ">上一页</a>
	<a href="page.php?page=<?php echo $page<=$page_max-1 ? $page+1 : $page_max;?>">下一页</a>
	<a href="page.php?page=<?php echo $page_max ;?>">末页</a>
</body>
</html>