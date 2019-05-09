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
            url:'get/getTimes.php',
            colHeaders:  [ 'Giờ học', 'Trạng thái'],
            colWidths: [ 500, 500],
            columns: [
                { type: 'text'},
                { type: 'dropdown', source: [{'id':'0', 'name':'Sử dụng'}, {'id':'1', 'name':'Không sử dụng'}]}
            ]
        }); 

        $('#json').on('click', function (){
            var d = $('#my').jexcel('getData'); 
            var v = JSON.stringify(d);
            $.post("set/setTimes.php",v,function(data){ 

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
        $('#my').jexcel('orderBy', 0);
    }
</script>