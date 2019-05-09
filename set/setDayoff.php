 <?php
  	include("../do/mysql.php");

	$json = file_get_contents('php://input');
	$values = (array)json_decode($json, true);
	 
	@$a=mysql_query("DELETE FROM dayoff");
	 @$b=mysql_query("ALTER TABLE dayoff AUTO_INCREMENT = 1");
	foreach($values as $v)
	{
		switch (getWeekday($v[0]))
		{
			case 0: { $weekdays="CN"; break; }
			case 1: { $weekdays="T2"; break; }
			case 2: { $weekdays="T3"; break; }
			case 3: { $weekdays="T4"; break; }
			case 4: { $weekdays="T5"; break; }
			case 5: { $weekdays="T6"; break; }
			case 6: { $weekdays="T7"; break; }
		}
		@$a=mysql_query("INSERT INTO dayoff (days, weekdays, reason, note) VALUES ('{$v[0]}', '{$weekdays}', '{$v[2]}', '{$v[3]}')");			
	}

	function getWeekday($date) 
	{
    	return date('w', strtotime($date));
	}
?>