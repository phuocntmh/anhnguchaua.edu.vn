<?php
    include("../do/mysql.php");
    
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }

    $result = $conn->query("SELECT * FROM schedule");
	$res = array();

	if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
        	$res[] = array($row['days'],$row['hide']);
        }
   	}
	die (json_encode($res));
?>