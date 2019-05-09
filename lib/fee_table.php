<div class="row" style="padding-top: 15px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Tìm học phí</div>
		<div class="panel-body">
			<form class="form-horizontal" action="/" id="searchForm">
				<div class="form-group">
					<label class="col-md-2" style="text-align: center;">Nhập họ tên: </label>
					<div class="col-md-10" style="width: 50%">
						<input class="form-control" type="text" name="txtname" placeholder="Nhập họ tên cần tìm...">	
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						<button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search"></span> Tìm kiếm</button>
					</div>
				</div>
			</form>

			<div id="my"></div>
		</div>
	</div>
</div>

<script>
	$("#searchForm").submit(function(event) {
		event.preventDefault();

		var $form = $( this ),
    	term = $form.find( "input[name='txtname']" ).val(),
    	url = $form.attr( "action" );

    	var posting = $.post( 'lib/fee_result.php', { s: term } );

    	posting.done(function( data ) {
    		//var content = $( data ).find( "#content" );

    		$('#my').jexcel({
            	url:'get/getFee.php',
            	colHeaders:  [ 'Tên học viên', 'Mã lớp', 'Ngày đóng', 'Số tiền', 'Ngày hết hạn', 'Ghi chú'],
            	colWidths: [270,200,100,150,100,170],
            	columns: [
	                { type: 'autocomplete', url: 'get/students.php'},
	                { type: 'autocomplete', url: 'get/classes.php'},
	                { type: 'calendar', options: { format:'DD/MM/YYYY',readonly:0,today:0,time:0,clear:1,mask:1  } },
	                { type: 'text'},
	                { type: 'calendar', options: { format:'DD/MM/YYYY',readonly:0,today:0,time:0,clear:1,mask:1  }, readOnly: true},
	                { type: 'text'}
            	]
        	});

    		//$( "#my" ).empty().append( content );
    		//$("#my").html(term);
  		});
	});
</script>