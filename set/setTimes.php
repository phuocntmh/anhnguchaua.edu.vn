<?php
  	include("../do/mysql.php");

	$json = file_get_contents('php://input');
	$values = (array)json_decode($json, true);
	 
	@$a=mysql_query("DELETE FROM times");
	 @$b=mysql_query("ALTER TABLE times AUTO_INCREMENT = 1");
	foreach($values as $v)
	{
		@$a=mysql_query("INSERT INTO times (times, hide) VALUES ('{$v[0]}', '{$v[1]}')");			
	}
?>