<div class="row" style="padding-top: 20px;">
    <div style="margin-bottom: 10px; margin-left: 20px;">
        <button class="btn btn-primary" onclick="$('#my').jexcel('insertRow',[],0); event.preventDefault(); return false;"><span class="glyphicon glyphicon-plus"></span></button>
        <button class="btn btn-info" onclick="$('#my').jexcel('undo');"><span class="glyphicon glyphicon-chevron-left"></span></button>
        <button class="btn btn-warning" onclick="$('#my').jexcel('redo');"><span class="glyphicon glyphicon-chevron-right"></span></button>
        <button id="json" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span></button>
        <button type="button" class="btn btn-info" onclick="$('#my').jexcel('download');"><i class="fa fa-file-excel-o fa-fw"></i></button>
    </div>
    <div id="my"></div>
</div>

<script>
        $('#my').jexcel({
            url:'get/getStudents.php',
            colHeaders:  [ 'Họ và tên', 'Ngày sinh', 'Điện thoại', 'Địa chỉ', 'Lớp hiện tại', 'Ngày nhập học', 'Ngày nghỉ học', 'Ngày học lại', 'Ngày tính HP','Số tiền','Ngày hết hạn','Ghi chú'],
            colWidths: [220, 100, 120, 200, 180, 100, 100, 100, 100, 100, 100, 200],
            columns: [
                { type: 'text'},
                { type: 'calendar', options: { format:'DD/MM/YYYY',readonly:0,today:0,time:0,clear:1,mask:1  }},
                { type: 'text'},
                { type: 'text'},
                { type: 'dropdown', url: 'get/classes.php'},
                { type: 'calendar', options: { format:'DD/MM/YYYY',readonly:0,today:0,time:0,clear:1,mask:1  }},
                { type: 'calendar', options: { format:'DD/MM/YYYY',readonly:0,today:0,time:0,clear:1,mask:1  }},
                { type: 'calendar', options: { format:'DD/MM/YYYY',readonly:0,today:0,time:0,clear:1,mask:1  }},
                { type: 'calendar', options: { format:'DD/MM/YYYY',readonly:0,today:0,time:0,clear:1,mask:1  }},
                { type: 'text'},
                { type: 'calendar', options: { format:'DD/MM/YYYY',readonly:0,today:0,time:0,clear:1,mask:1  }},
                { type: 'text'}
            ]
        }); 

        $('#json').on('click', function (){
            var d = $('#my').jexcel('getData'); 
            var v = JSON.stringify(d);
            $.post("set/setStudents.php",v,function(data){ 

            })
            .fail(function() {
                alert( "Đã xảy ra lỗi! Vui lòng thử lại!" );
            })
            .always(function() {
                alert( "Cập nhật thành công!" );
            });
});
</script>

<script>
    window.onload = function(){
        $('#my').jexcel('orderBy', 4);
    }
</script>