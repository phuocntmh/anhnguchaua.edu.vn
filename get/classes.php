<?php
    include("../do/mysql.php");

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    $result = $conn->query("SELECT * FROM auto_classes");
	$res = array();

	if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {

        	$res[] = array(
                'name' => $row['cl_name'],
                'id' => $row['id']
            );
        }
   	}
	die (json_encode($res));
?>