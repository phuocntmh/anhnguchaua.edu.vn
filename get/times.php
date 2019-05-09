<?php
    include("../do/mysql.php");

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    $result = $conn->query("SELECT * FROM times");
	$res = array();

	if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {

        	$res[] = array(
                'name' => $row['times'],
                'id' => $row['id']
            );
        }
   	}
	die (json_encode($res));
?>