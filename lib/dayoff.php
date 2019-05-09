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
            url:'get/getDayoff.php',
            colHeaders:  [ 'Ngày nghỉ', 'Thứ', 'Lý do','Ghi chú'],
            colWidths: [ 200, 150, 300, 350],
            columns: [
                { type: 'calendar', options: { format:'DD/MM/YYYY',readonly:0,today:0,time:0,clear:1,mask:1  } },
                { type: 'text', readOnly: true},
                { type: 'text'},
                { type: 'text'}
            ]
        }); 

        $('#json').on('click', function (){
            var d = $('#my').jexcel('getData'); 
            var v = JSON.stringify(d);
            $.post("set/setDayoff.php",v,function(data){ 

            })
            .fail(function() {
                alert( "Đã xảy ra lỗi! Vui lòng thử lại!" );
            })
            .always(function() {
                alert( "Cập nhật thành công!" );
            });
});
</script>