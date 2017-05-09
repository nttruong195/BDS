<?php 

require_once('./user/views/side_bar.php');

?>
<div id="page_content">
    <div id="page_content_inner">
        <h3 class="heading_b uk-margin-bottom">Thêm dự án</h3>
        <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
            <div class="md-card">
                <div class="md-card-toolbar">
                    <h3 class="md-card-toolbar-heading-text">
                        Chi tiết
                    </h3>
                </div>
                <form id="FormDA" method="POST">
                    <!-- các input khi validate nếu sai thì thêm class 'md-input-danger' -->
                    <div class="md-card-content large-padding">
                        <div class="uk-grid uk-grid-divider uk-grid-medium">
                            <div class="uk-width-large-1-2">
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Tên dự án</label>
                                    <input type="text" class="md-input" id="TenDuAn" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Địa chỉ</label>
                                    <input type="text" class="md-input" id="DiaChi" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Tông diện tích</label>
                                    <input type="text" class="md-input" id="TongDienTich" value = ""/>
                                </div><br>
                                
                            </div>
                            <div class="uk-width-large-1-2">
                               <div class="uk-grid uk-grid-small">
                                <label for="uk_dp_1">Số lượng sản phẩm</label>
                                <input type="text" class="md-input" id="SoLuongSanPham" value ="" >
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Giấy phép</label>
                                    <input type="text" class="md-input"  id="GiayPhep" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Ngày cấp</label>
                                    <input class="md-input" type="text" id="NgayCap" data-uk-datepicker="{format:'DD-MM-YYYY'}">
                                </div>
                            </div>
                        </div>
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-bottom">Mô tả</h3>
                            <textarea class="ckeditor" name="MoTa" id="MoTa" rows="10" cols="80"></textarea>
                        </div>
                    </div>
                    <div class="md-fab-wrapper">
                        <button class="md-fab md-fab-primary" type="submit" id="action" name="action" value="Add">
                            <i class="material-icons">&#xE161;</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- google web fonts -->
<script>
$("#FormDA").submit(function(e){
    e.preventDefault();
    SubmitDA();
    
});
function SubmitDA(){
    var value = CKEDITOR.instances['MoTa'].getData();
    var from = $("#NgayCap").val().split("-");
    var date = from[2]+"-"+from[1]+"-"+from[0];
    $.post(
        "http://localhost:8080/bds_project/public/DuAn",
        {TenDuAn: $('#TenDuAn').val(),
        DiaChi: $('#DiaChi').val(),
        TongDienTich: $('#TongDienTich').val(),
        SoLuongSanPham: $('#SoLuongSanPham').val(),
        GiayPhep: $('#GiayPhep').val(),
        NgayCap: date,
        MoTa: value},
        function(data,status)
        {
            if(status == "success")
                window.location = 'index.php?c=duan&a=list';
        },
        "json"
        );
    }

   WebFontConfig = {
    google: {
        families: [
        'Source+Code+Pro:400,700:latin',
        'Roboto:400,300,500,700,400italic:latin'
        ]
    }
};
(function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();
</script>
<!-- momentJS date library -->
<script src="public/js/admin/moment.min.js"></script>

<!-- common functions -->
<script src="public/js/admin/common.min.js"></script>
<!-- uikit functions -->
<script src="public/js/admin/uikit_custom.min.js"></script>
<!-- altair common functions/helpers -->
<script src="public/js/admin/altair_admin_common.min.js"></script>
<!-- enable hires images -->
<script src="public/js/admin/page_mailbox.min.js"></script>
<script src="public/js/admin/kendoui.custom.min.js"></script>
<script src="public/js/admin/forms_advanced.min.js"></script>
<script src="public/js/admin/ion.rangeSlider.min.js"></script>

<!--  kendoui functions -->
<script src="public/js/admin/kendoui.js"></script>
<script>
$(function() {
    altair_helpers.retina_images();
});
</script>

</body>
</html>