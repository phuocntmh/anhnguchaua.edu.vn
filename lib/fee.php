<div class="row" style="padding-top: 20px;">
    <div style="margin-bottom: 10px; margin-left: 20px;">
        <button class="btn btn-primary" onclick="$('#my').jexcel('insertRow'); event.preventDefault(); return false;"><span class="glyphicon glyphicon-plus"></span></button>
        <button class="btn btn-info" onclick="$('#my').jexcel('undo');"><span class="glyphicon glyphicon-chevron-left"></span></button>
        <button class="btn btn-warning" onclick="$('#my').jexcel('redo');"><span class="glyphicon glyphicon-chevron-right"></span></button>
        <button id="json" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span></button>
        <button type="button" class="btn btn-info" onclick="$('#my').jexcel('download');"><i class="fa fa-file-excel-o fa-fw"></i></button>
    </div>
    <div id="my"></div>
</div>

<script>
        $('#my').jexcel({
            url:'get/getFee.php',
            colHeaders:  [ 'Tên học viên', 'Mã lớp', 'Ngày đóng', 'Số tiền', 'Ngày hết hạn', 'Ghi chú'],
            colWidths: [300,200,100,150,100,170],
            columns: [
                { type: 'autocomplete', url: 'get/students.php'},
                { type: 'autocomplete', url: 'get/classes.php'},
                { type: 'calendar', options: { format:'DD/MM/YYYY',readonly:0,today:0,time:0,clear:1,mask:1  } },
                { type: 'text'},
                { type: 'calendar', options: { format:'DD/MM/YYYY',readonly:0,today:0,time:0,clear:1,mask:1  }, readOnly: true},
                { type: 'text'}
            ]
        }); 

        $('#json').on('click', function (){
            var d = $('#my').jexcel('getData'); 
            var v = JSON.stringify(d);
            $.post("set/setFee.php",v,function(data){ 
            
            })
            .fail(function() {
                alert( "Đã xảy ra lỗi! Vui lòng thử lại!" );
            })
            .always(function() {
                alert( "Cập nhật thành công!" );
            });
});
</script>
<script src="http://cdn.bossanova.uk/js/excel-formula.min.js"></script>