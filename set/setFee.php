<?php
  	include("../do/mysql.php");

	$json = file_get_contents('php://input');
	$values = (array)json_decode($json, true);
	 
	@$a=mysql_query("DELETE FROM fee");
	@$b=mysql_query("ALTER TABLE fee AUTO_INCREMENT = 1");
	foreach($values as $v)
	{
		//lay ngay dong tien
		$newformat = $v[2];	
		//ngay het han
		$checkout = date('Y-m-d', strtotime($newformat. ' + 7 days'));
		//xu ly ngay nghi doi voi ngay het han
		$cl_name=$v[1];
        $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
		$result1 = $conn->query("SELECT * FROM dayoff WHERE apply={$cl_name}");
		if ($result1->num_rows > 0) 
    	{
        	while($row1 = $result1->fetch_assoc()) 
        	{
        		$dayoff = $row1['days'];
        		if (strtotime($dayoff) == strtotime($checkout))
        		{
        			if (getWeekday($checkout) == 5 || getWeekday($checkout) == 6)
        				$checkout = date('Y-m-d', strtotime($checkout. ' + 3 days'));
        			else $checkout = date('Y-m-d', strtotime($checkout. ' + 2 days'));
        		}
        	}
        }
		//chen vao db
		@$a=mysql_query("INSERT INTO fee (`id`, `id_student`, `id_class`, `days`, `fees`, `expried`, `note`) VALUES (NULL, '{$v[0]}', '{$v[1]}', '{$v[2]}', {$v[3]}, '{$checkout}', '$v[5]')");			
	}
	
	function getWeekday($date) 
	{
    	return date('w', strtotime($date));
	}
	//echo json_encode($checkout);
?>