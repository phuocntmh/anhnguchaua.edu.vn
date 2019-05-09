<?php
    include("../do/mysql.php");
    
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }

    $result = $conn->query("SELECT * FROM manual_classes");
    $res = array();

    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            $s=$row['startday'];
            $res[] = array($row['lv_name'],$row['cl_name'],$row['times'],$row['days'],$row['startday'],$row['weeks'],$row['midterm'],$row['endday'],$row['tutors'],$row['recieveday']);
        }
    }
    die (json_encode($res));
?>