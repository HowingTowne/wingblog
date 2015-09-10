<!DOCTYPE meta PUBLIC "-//W3C//DTD
    HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>微型博客</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel = "stylesheet" type = "text/css" href = "css/base.css"/>
		<link rel = "stylesheet" type = "text/css" href = "css/add.css"/>
	</head>
	<body>
	
		<?php
			include("DBCon.php");
			
			if(!empty($_GET['id'])){
				$sql = "select * from `infos` where `id`=' ".$_GET['id']." ' ";
				$query = mysql_query($sql);
				$rs = mysql_fetch_array($query);
			}
			if(!empty($_POST['sub'])){
				$title = $_POST['title'];
				$con = $_POST['con'];
				$hid = $_POST['hid'];
				$sql = "update `infos` set `title` = '$title' , `contents` = '$con' where `id` = '$hid' limit 1 ";
				mysql_query($sql);
				echo "<script>alert('编辑成功！'); location.href = 'index.php' </script>";
			}
		?>

		<form action ="edit.php" method = "post" id = "form">
			<input type = "hidden" name = "hid" value = "<?php  echo $rs['id'] ?>"/>
			<a href = "index.php">返回主页</a><hr/><br/>
			<span>标题</span>
				<input type = "text" name = "title" id = "title" value = "<?php  echo $rs['title']  ?>"/>
			<span>内容</span>
				<textarea rows = "5" cols = "30" name = "con" id = "content"><?php  echo $rs['contents'] ?></textarea>
			<input type = "submit" name = "sub" value = "发表" id ="submit"/>
			<br/><hr/>
		</form>
		
	</body>
</html>