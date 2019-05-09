<?php
	if (session_destroy())
	{	
		echo"<SCRIPT LANGUAGE='JavaScript'>alert('Bạn đã đăng xuất!');</script>";
	 	echo"<meta http-equiv='refresh' content='0; index.php'>";
	}
	else
		echo "<SCRIPT LANGUAGE='JavaScript'>alert('Đăng xuất bị lỗi. Vui lòng thử lại!');</script>";
		echo"<meta http-equiv='refresh' content='0; index.php'>";
?>