<?php
	require_once("do/mysql.php"); 
	$username = addslashes( $_POST['username'] );
	$password = md5(addslashes( $_POST['password'] ));

	$sql_query = @mysql_query("SELECT id, username, password, role FROM users WHERE username='{$username}'");

	$member = @mysql_fetch_array( $sql_query );
	if ( @mysql_num_rows( $sql_query ) <= 0 )
	{
		echo"<SCRIPT LANGUAGE='JavaScript'>alert('Tên đăng nhập không tồn tại!');</script>";
	 	echo"<meta http-equiv='refresh' content='0; index.php'>";
		exit;
	}
	
	if ( $password != $member['password'] )
	{
		echo"<SCRIPT LANGUAGE='JavaScript'>alert('Nhập sai tên đăng nhập hoặc mật khẩu!');</script>";
	 	echo"<meta http-equiv='refresh' content='0; index.php'>";
		exit;
	}
	
	$_SESSION['user_id'] = $member['id'];
	$_SESSION['user_name'] = $member['username'];
	$_SESSION['user_role'] = $member['role'];
	
	echo"<SCRIPT LANGUAGE='JavaScript'>alert('Bạn đã đăng nhập thành công!');</script>";
	print "<meta http-equiv='refresh' content='0; index.php'>";
?> 