<?php
    include("../do/mysql.php");

	$json = file_get_contents('php://input');
	$values = (array)json_decode($json, true);
	 
	@$a=mysql_query("DELETE FROM auto_classes");
	$role = 3;

	foreach($values as $v)
	{
		//dien so tuan
		$lv_name=$v[0];
		$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
		$result = $conn->query("SELECT * FROM levels WHERE id={$lv_name}");
		if ($result->num_rows > 0) 
    	{
        	while($row = $result->fetch_assoc()) 
        	{
        		$weeks = $row['weeks'];
        	}
        }
		//lay ngay bat dau
		$newformat = $v[4];	
        $songay = $v[5]	* 7;
        $chuoi = ' + '.$songay.' days';
        $songaygiuaky = (int) $songay/2;
		//ngay ket thuc
		$checkout = date('Y-m-d', strtotime($newformat.$chuoi));
		//ngay thi giua ky
		if (getWeekday($newformat) == 5 || getWeekday($newformat) == 6)
			$mid = date('Y-m-d', strtotime($newformat.' + '.$songaygiuaky.' days'));
		else $mid = date('Y-m-d', strtotime($newformat.' + '.$songaygiuaky.' days'));
		//xu ly ngay nghi doi voi ngay ket thuc
		$cl_name=$v[1];
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

        		if (strtotime($dayoff) == strtotime($mid))
        		{
        			if (getWeekday($checkout) == 5 || getWeekday($checkout) == 6)
        			{
        				$mid = date('Y-m-d', strtotime($mid. ' + 3 days'));
        				$checkout = date('Y-m-d', strtotime($checkout. ' + 2 days'));
        			}
        			else
        			{
        				$mid = date('Y-m-d', strtotime($mid. ' + 2 days'));
        				$checkout = date('Y-m-d', strtotime($checkout. ' + 2 days'));	
        			} 
        		}
        	}
        }
        //xu ly ngay nghi doi voi ngay thi giua ky
        if ($result1->num_rows > 0) 
    	{
        	while($row1 = $result1->fetch_assoc()) 
        	{
        		$dayoff = $row1['days'];

        	}
        }
		//chen vao db
        @$b=mysql_query("ALTER TABLE auto_classes AUTO_INCREMENT = 1");
		@$a=mysql_query("INSERT INTO auto_classes (`id`, `lv_name`, `cl_name`, `times`, `days`, `startday`, `weeks`, `midterm`, `endday`, `tutors`, `recieveday`) VALUES (NULL, '{$v[0]}', '{$v[1]}', '{$v[2]}', '{$v[3]}', '{$v[4]}', '{$weeks}', '{$mid}', '{$checkout}', '{$v[8]}', '{$v[9]}')");			
	}
	
	function getWeekday($date) 
	{
    	return date('w', strtotime($date));
	}
	//echo json_encode($checkout);
?>