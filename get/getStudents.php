<?php
    include("../do/mysql.php");
    
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }

    $result = $conn->query("SELECT * FROM students s LEFT JOIN fee f ON s.id=f.id_student");
	$res = array();

	if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
        	$res[] = array($row['name'],$row['birthday'],$row['phone'],$row['address'],$row['now_class'],$row['start_day'],$row['end_day'],$row['re_day'],$row['days'],$row['fees'],$row['expried'],$row['note']);
        }
   	}
	die (json_encode($res));
?>