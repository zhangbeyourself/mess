<?php
	$delete=$_GET['id'];
	//echo $delete;
	include'../connect.php';
	$sql="delete from mes_info where id='{$delete}'";
	$r=mysql_query($sql);
	//$row=mysql_fetch_assoc($r);
	if($r){
		echo "<script>alert('删除成功！');window.location.href='index.php';</script>";
	}
	else{echo "<script>alert('删除失败！');window.location.href='index.php';</script>";}
?>