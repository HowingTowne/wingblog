<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 

	include("DBCon.php");
	
	if(!empty($_GET['del'])){
		$d = $_GET['del'];
		$sql = " delete from `infos` where `id` ='$d' ";
		mysql_query($sql);
		echo "<script>alert('删除成功'); location.href = 'index.php'</script>";
	}

?>