<?php
  	include("../do/mysql.php");

	$json = file_get_contents('php://input');
	$values = (array)json_decode($json, true);
	 
	@$a=mysql_query("DELETE FROM schedule");
	 @$b=mysql_query("ALTER TABLE schedule AUTO_INCREMENT = 1");
	foreach($values as $v)
	{
		@$a=mysql_query("INSERT INTO schedule (days, hide) VALUES ('{$v[0]}', '{$v[1]}')");			
	}
?>