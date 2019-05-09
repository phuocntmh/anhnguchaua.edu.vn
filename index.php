<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
	<title>TRUNG TÂM ANH NGỮ CHÂU Á - THÁI BÌNH DƯƠNG</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<meta name="keyword" content="trung tam anh ngu a chau, a chau english center">
	<meta name="author" content="ntmhp">
	<meta name="copyright" content="trung tam anh ngu a chau, a chau english center">
	<meta name="description" content="trung tam anh ngu a chau, a chau english center">

	<link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
	<link href="dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="vendor/morrisjs/morris.css" rel="stylesheet">
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jexcel/1.5.0/js/jquery.jexcel.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jexcel/1.5.0/js/excel-formula.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jexcel/1.5.0/css/jquery.jexcel.min.css" type="text/css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jexcel/1.5.0/js/jquery.jcalendar.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jexcel/1.5.0/css/jquery.jcalendar.min.css" type="text/css" />
	

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jexcel/1.5.0/css/jquery.jexcel.min.css" type="text/css" />

	<script src="https://bossanova.uk/components/jexcel/dist/js/jquery.jcalendar.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jexcel/1.5.0/css/jquery.jcalendar.min.css" type="text/css" />
</head>
<body>
	<div class="container" style="width: 100%">
		<?php
			session_start();
			header('Content-Type: text/html; charset=UTF-8');

			if(!isset($_GET["thread"]))
			{
			    $_GET["thread"]='home';
			}
			
			include("lib/content.php");
		?>		
	</div>

	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>

    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
</body>
</html>