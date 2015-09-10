<!DOCTYPE meta PUBLIC "-//W3C//DTD
    HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>微型博客</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel = "stylesheet" type = "text/css" href = "css/base.css"/>
		<link rel = "stylesheet" type = "text/css" href = "css/index.css"/>
	</head>

	<body>
	    <div id = "wrap">

			<a href = "add.php">添加内容</a><hr/>
			<form action = "" method = "get">
				<input type = "text" name = "keys"/>
				<input type = "submit" name= "subs" value = "搜索"/>
			</form>
			<hr/><br/>
			
			<?php
				
				include("DBCon.php");    //引入连接数据库
				
				if(!empty($_GET['keys'])){
					$w = " `title` like '%".$_GET['keys']."%' ";
				}else{
					$w = 1;
				}
				
				$sql = "select * from `infos` where $w order by id desc limit 10";
				$query = mysql_query($sql);     //mysql_query只能执行一次
				
				while($rs = mysql_fetch_array($query)){
				
			?>
		    
			<h2>标题：<a href="view.php?id=<?php  echo $rs['id'] ?>"><?php  echo $rs['title'] ?></a>
			                      | <a href="edit.php?id=<?php  echo $rs['id'] ?>">编辑</a>
			                      | <a href = "del.php?del=<?php  echo $rs['id'] ?>">删除</a>
			                      |</h2>
			<p><?php  echo $rs['dates'] ?></p>
			<p><?php  echo iconv_substr($rs['contents'], 0, 10, "utf-8") ?>...</p>
			<br/><hr/><br/>
			
			<?php 
				}
			?>
		</div>
		
	</body>
</html>