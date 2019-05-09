<?php
  	include("../do/mysql.php");

	$json = file_get_contents('php://input');
	$values = (array)json_decode($json, true);
	 
	@$a=mysql_query("DELETE FROM employee");
	@$b=mysql_query("ALTER TABLE employee AUTO_INCREMENT = 1");
	$role = 3;
	foreach($values as $v)
	{
		@$a=mysql_query("INSERT INTO employee (`id`, `username`, `address`, `birthday`, `email`, `name`, `phone`, `start_day`, `end_day`, `role`) VALUES (NULL, '{$v[0]}', '{$v[4]}', '{$v[5]}', '{$v[3]}', '{$v[1]}', '{$v[2]}', '{$v[6]}', '{$v[7]}', '{$role}')");			
	}
?>