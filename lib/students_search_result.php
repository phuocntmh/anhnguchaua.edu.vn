<?php
	$hoten = utf8_encode(addslashes($_POST['hoten']));

	include("do/mysql.php");

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	mysql_set_charset($conn,"utf8");
	$result = $conn->query("SELECT DISTINCT * FROM students s, auto_classes a WHERE s.now_class=a.id and s.name LIKE '%{$hoten}' OR s.name LIKE '{$hoten}%' OR  s.name LIKE '%{$hoten}%' ");
	//$result = $conn->query("SELECT * FROM students s, auto_classes a WHERE s.now_class=a.id and s.name LIKE '%".$hoten."%' COLLATE utf8_bin");
	//$result = $conn->query("SELECT * FROM students s, auto_classes a WHERE s.now_class=a.id and s.name LIKE CONCAT('%', CONVERT('{$hoten}', BINARY), '%') OR s.name LIKE CONCAT('%', CONVERT('{$hoten}', BINARY), '%') OR s.name LIKE CONCAT('%', CONVERT('{$hoten}', BINARY), '%')");
?>

<div class="row" style="padding-top: 15px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Tìm học viên</div>
		<div class="panel-body">
			<form class="form-horizontal" action="?thread=students-search-result" method="POST">
				<div class="form-group">
					<label class="col-md-2" style="text-align: center;">Nhập họ và tên: </label>
					<div class="col-md-10" style="width: 50%">
						<input class="form-control" name="hoten" placeholder="Nhập họ và tên học viên..." required>	
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

	<div class="panel panel-primary">
		<div class="panel-body">
			<?php
				if ($result->num_rows > 0)
				{
			?>
					<table class="table table-bordered" style="margin-top: 10px;">
						<thead>
							<tr>
								<th>STT</th>
								<th>Họ và tên</th>
								<th>Ngày sinh</th>
								<th>SĐT</th>
								<th>Địa chỉ</th>
								<th>Lớp hiện tại</th>
								<th>Ngày nhập học</th>
								<th>Ngày nghỉ</th>
								<th>Ngày học lại</th>
								<th>Ghi chú</th>
							</tr>
						</thead>	
						<tbody>
							<?php
								$i=1;
								while ($row = $result->fetch_assoc())
								{
							?>
									<tr>
										<td><?php echo $i++;; ?></td>
										<td><?php echo $row['name']; ?></td>
										<td style="text-align: center;"><?php echo date("d/m/Y", strtotime($row['birthday'])); ?></td>
										<td style="text-align: center;"><?php echo $row['phone']; ?></td>
										<td style="text-align: center;"><?php echo $row['address']; ?></td>
										<td style="text-align: center;"><?php echo $row['cl_name']; ?></td>
										<td style="text-align: center;"><?php echo date("d/m/Y", strtotime($row['start_day'])); ?></td>
										<td style="text-align: center;"><?php echo date("d/m/Y", strtotime($row['end_day'])); ?></td>
										<td style="text-align: center;"><?php echo date("d/m/Y", strtotime($row['re_day'])); ?></td>
										<td style="text-align: center;"><?php echo $row['note']; ?></td>
									</tr>
							<?php
								}
							?>
						</tbody>
					</table>
			<?php
				}
				else
				{
					echo "Không tìm thấy học viên nào";
				}
			?>
		</div>
	</div>
</div>