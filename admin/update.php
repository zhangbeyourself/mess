<?php
	$id=$_POST['id'];
	//echo $id;
	$title=$_POST['main'];
	echo $title;
	$content=$_POST['content'];
	$addtime=date("Y-m-d H:i:s");
	echo $addtime;
	include"../connect.php";
	$sql="update mes_info set title='{$title}',content='{$content}',addtime='{$addtime}' where id='{$id}'";
	$r=mysql_query($sql);
	if($r){
		echo "<script>alert('修改成功！');
		window.location.href='index.php'</script>";
	}
	else{
				echo "<script>alert('修改失败请重新操作！');
		window.location.href='index.php'</script>";
	}
?>