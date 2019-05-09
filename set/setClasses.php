<?php
  	include("../do/mysql.php");

	$json = file_get_contents('php://input');
	$values = (array)json_decode($json, true);
	 
	@$a=mysql_query("DELETE FROM classes");
	 @$b=mysql_query("ALTER TABLE classes AUTO_INCREMENT = 1");
	foreach($values as $v)
	{
		@$a=mysql_query("INSERT INTO classes (name,lv_name,hide) VALUES ('{$v[0]}', '{$v[1]}', '{$v[2]}')");			
	}
?>