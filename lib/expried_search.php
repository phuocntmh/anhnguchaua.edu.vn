<?php
	$startday = addslashes($_POST['startday']);
	$endday = addslashes($_POST['endday']);

	include("do/mysql.php");

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	$result = $conn->query("SELECT name,birthday,phone,cl_name,fees,expried,@ngaydonghp:=f.days FROM fee f, students s, auto_classes a WHERE f.id_student=s.id and s.now_class=a.id and expried between '{$startday}' and '{$endday}'");
?>

<div class="row" style="padding-top: 15px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Tìm học phí hết hạn</div>
		<div class="panel-body">
			<form class="form-horizontal" action="?thread=expried-search" method="POST">
				<div class="form-group">
					<label class="col-md-2" style="text-align: center;">Nhập ngày bắt đầu: </label>
					<div class="col-md-10" style="width: 50%">
						<input class="form-control" type="date" data-date-inline-picker="true" name="startday" placeholder="Nhập ngày bắt đầu..." required>	
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2" style="text-align: center;">Nhập ngày kết thúc: </label>
					<div class="col-md-10" style="width: 50%">
						<input class="form-control" type="date" data-date-inline-picker="true" name="endday" placeholder="Nhập ngày kết thúc..." required>	
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
			<div style="text-align: center;font-weight: bold;color: blue;">Danh sách học viên hết hạn học phí từ ngày <?php echo date("d/m/Y", strtotime($startday)); ?> và <?php echo date("d/m/Y", strtotime($endday)); ?></div>
			<div>
			<div>
                <button class="btn btn-success" onclick="exportTableToCSV('members.csv')">Xuất Excel</button>
            </div>
				<?php
					if ($result->num_rows > 0)
					{
				?>
						<table class="table table-bordered" style="margin-top: 10px;">
							<thead>
								<tr>
									<th style="text-align: center;">STT</th>
									<th style="text-align: center;">Họ và tên</th>
									<th style="text-align: center;">Ngày sinh</th>
									<th style="text-align: center;">SĐT</th>
									<th style="text-align: center;">Lớp hiện tại</th>
									<th style="text-align: center;">Ngày đóng HP</th>
									<th style="text-align: center;">Số tiền</th>
									<th style="text-align: center;">Ngày hết hạn</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$i=1;
									while ($row = $result->fetch_assoc())
									{
								?>
										<tr>
											<td style="text-align: center;"><?php echo $i++; ?></td>
											<td><?php echo $row['name']; ?></td>
											<td style="text-align: center;"><?php echo date("d/m/Y", strtotime($row['birthday'])); ?></td>
											<td style="text-align: center;"><?php echo $row['phone']; ?></td>
											<td style="text-align: center;"><?php echo $row['cl_name']; ?></td>
											<td style="text-align: center;"><?php echo date("d/m/Y", strtotime($row['@ngaydonghp:=f.days'])); ?></td>
											<td style="text-align: center;"><?php echo number_format($row['fees']); ?></td>
											<td style="text-align: center;"><?php echo date("d/m/Y", strtotime($row['expried'])); ?></td>
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
						echo "Không có kết quả nào được tìm thấy! Vui lòng thử lại với mốc thời gian khác!";
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