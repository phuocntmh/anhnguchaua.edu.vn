<?php
  	include("../do/mysql.php");

	$json = file_get_contents('php://input');
	$values = (array)json_decode($json, true);
	 
	@$c=mysql_query("DELETE FROM students");
	@$d=mysql_query("DELETE FROM fee");
	@$e=mysql_query("ALTER TABLE students AUTO_INCREMENT = 1");
	@$f=mysql_query("ALTER TABLE fee AUTO_INCREMENT = 1");
	$role = 3;
	$i=1;
	foreach($values as $v)
	{
		@$a=mysql_query("INSERT INTO students (name,birthday,phone,address,now_class,start_day,end_day,re_day,note) VALUES ('{$v[0]}', '{$v[1]}', '{$v[2]}', '{$v[3]}','{$v[4]}','{$v[5]}','{$v[6]}','{$v[7]}','{$v[11]}')");

		//lay ngay dong tien
		$newformat = $v[8];
        $songay = 24 * 7;
        $chuoi = ' + '.$songay.' days';
		//ngay het han
		$checkout = date('Y-m-d', strtotime($newformat.$chuoi));
		//xu ly ngay nghi doi voi ngay het han
        $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
		$result1 = $conn->query("SELECT * FROM dayoff");
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

		@$b=mysql_query("INSERT INTO fee (id, id_student, id_class, days, fees, expried) VALUES (NULL, '{$i}', '{$v[4]}', '{$v[8]}', '{$v[9]}', '{$checkout}')");
		$i++;
	}

	function getWeekday($date) 
	{
    	return date('w', strtotime($date));
	}
?>