<!DOCTYPE meta PUBLIC "-//W3C//DTD
    HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>微型博客</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel = "stylesheet" type = "text/css" href = "css/base.css"/>
		<link rel = "stylesheet" type = "text/css" href = "css/view.css"/>
	</head>
	<body>
	
		<?php
			include("DBCon.php");
			
			if(!empty($_GET['id'])){
				$sql = "select * from `infos` where `id`=' ".$_GET['id']." ' ";
				$query = mysql_query($sql);
				$rs = mysql_fetch_array($query);
				$sqlup = "update `infos` set `hits` = `hits`+1 where `id`=' ".$_GET['id']." ' ";
				mysql_query($sqlup);
			}
			
		?>
        <div id = "main">
        <a href = "index.php">返回</a><hr/>
	        <h1><?php echo  $rs['title'] ?></h1>
			<h2><?php  echo $rs['dates'] ?></h2>
			<h3>点击量：<?php  echo $rs['hits'] ?></h3>
			<hr/><br/>
			<p>
			<?php  echo $rs['contents']?>
			</p><br/><hr/>
        </div>
		
		
	</body>
</html>