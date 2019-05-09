<?php
	include("do/mysql.php");

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	$result = $conn->query("SELECT * FROM auto_classes");
?>

<div class="row" style="padding-top: 15px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Tìm danh sách học viên của lớp</div>
		<div class="panel-body">
			<form class="form-horizontal" action="?thread=classes-search-result" method="POST">
				<div class="form-group">
					<label class="col-md-2" style="text-align: center;">Chọn lớp cần xem: </label>
					<div class="col-md-10" style="width: 50%">
						<select class="form-control" name="malop">
							<option></option>
							<?php
								while ($row = $result->fetch_assoc())
								{
							?>
									<option value="<?php echo $row['id']; ?>"><?php echo $row['cl_name']; ?></option>
							<?php
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						<button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search"></span> Tìm kiếm</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>