<?php
	$id=$_REQUEST['id'];
	$title=$_REQUEST['title'];
	$content=$_REQUEST['content'];
	echo $id,$title,$content;
	include '../sql.php';
	$sql="update message set title='{$title}',content='{$content}' where id='{$id}'";
	$r=mysql_query($sql);
	$sqll="select * from message where id='{$id}'";
	$rr=mysql_query($sqll);
	$re=mysql_fetch_assoc($rr);
	//var_dump($re);
	if($re){
		echo "<script>alert('修改成功！');window.location.href='manage.php'</script>";
	}
	else{
		echo "<script>alert('修改失败！');window.location.href='delete.php'</script>";
	}
?>
