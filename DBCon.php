<?php

	@mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS)or die("mysql连接失败");
	@mysql_select_db(app_wingblog1)or die("database连接失败");
	//mysql_set_charset('utf-8');
	mysql_query("set names 'utf8'");
	
?>