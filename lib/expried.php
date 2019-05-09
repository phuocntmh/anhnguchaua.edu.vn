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
</div>