<?php
	$txtname = addslashes($_POST['txtname']);

	echo $txtname;
	include("../do/mysql.php");
    
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }

    $result1 = $conn->query("SELECT * FROM students WHERE name LIKE '{$txtname}'");
    if ($result1->num_rows > 0) 
    {
        while($row1 = $result1->fetch_assoc()) 
        {
        	$id_student = $row1['id'];
        }
   	}

    $result = $conn->query("SELECT * FROM fee WHERE id_student = '{$id_student}'");
	$res = array();

	if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
        	$res[] = array($row['id_student'],$row['id_class'],$row['days'],$row['fees'],$row['expried'],$row['note']);
        }
   	}
	die (json_encode($res));
?>