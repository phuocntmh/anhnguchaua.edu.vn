<?php
	$malop = addslashes($_POST['malop']);

	include("do/mysql.php");

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	$result = $conn->query("SELECT * FROM auto_classes");
	$result1 = $conn->query("SELECT * FROM students WHERE now_class={$malop}");
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

	<div class="panel panel-primary">
		<div class="panel-body">
			<div style="text-align: center; font-weight: bold; color: green; margin-bottom: 10px;">
				Danh sách học viên lớp:
				<?php
					$result2 = $conn->query("SELECT * FROM auto_classes WHERE id={$malop}");
					while ($row2 = $result2->fetch_assoc())
					{
						echo $row2['cl_name'];
					}
				?>
			</div>
			<div>
                <button class="btn btn-success" onclick="exportTableToCSV('members.csv')">Xuất Excel</button>
            </div>
			<div>
				<?php
					if ($result1->num_rows > 0)
					{
				?>
						<table class="table table-bordered" style="margin-top: 10px;">
						
								<tr>
									<th style="text-align: center;">STT</th>
									<th style="text-align: center;">Họ và tên</th>
									<th style="text-align: center;">Ngày sinh</th>
									<th style="text-align: center;">SĐT</th>
									<th style="text-align: center;">Địa chỉ</th>
									<th style="text-align: center;">Ngày nhập học</th>
									<th style="text-align: center;">Ngày nghỉ</th>
									<th style="text-align: center;">Ngày học lại</th>
									<th style="text-align: center;">Ghi chú</th>
								</tr>
							
								<?php
									$i=1;
									while ($row1 = $result1->fetch_assoc())
									{
								?>
										<tr>
											<td style="text-align: center;"><?php echo $i++;; ?></td>
											<td><?php echo $row1['name']; ?></td>
											<td style="text-align: center;"><?php echo date("d/m/Y", strtotime($row1['birthday'])); ?></td>
											<td style="text-align: center;"><?php echo $row1['phone']; ?></td>
											<td style="text-align: center;"><?php echo $row1['address']; ?></td>
											<td style="text-align: center;"><?php echo date("d/m/Y", strtotime($row1['start_day'])); ?></td>
											<td style="text-align: center;"><?php echo date("d/m/Y", strtotime($row1['end_day'])); ?></td>
											<td style="text-align: center;"><?php echo date("d/m/Y", strtotime($row1['re_day'])); ?></td>
											<td style="text-align: center;"><?php echo $row1['note']; ?></td>
										</tr>
								<?php
									}
								?>
							
						</table>
				<?php
					}
					else
					{
						echo "Không tìm thấy kết quả nào!";
					}
				?>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" charset="UTF-8">
	function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
}

	function exportTableToCSV(filename) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerHTML);
        
        csv.push(row.join(","));        
    }

    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}
</script>