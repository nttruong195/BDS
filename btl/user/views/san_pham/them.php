<?php

require_once('./user/views/side_bar.php');

?>
<div id="page_content">
    <div id="page_content_inner">
        <h3 class="heading_b uk-margin-bottom">Thêm sản phẩm</h3>
        <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
            <!-- các input khi validate nếu sai thì thêm class 'md-input-danger' -->
            <form action="" class="uk-form-stacked" id="FormSP">
                <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                    <div class="uk-width-xLarge-2-10 uk-width-large-3-10">
                        <div class="md-card">
                            <div class="md-card-toolbar">
                                <div class="md-card-toolbar-actions">
                                    <i class="md-icon material-icons">&#xE146;</i>
                                </div>
                                <h3 class="md-card-toolbar-heading-text">
                                    Ảnh
                                </h3>
                            </div>
                            <div class="md-card-content">
                                <div class="uk-margin-bottom uk-text-center uk-position-relative">
                                    <button type="button" class="uk-modal-close uk-close uk-close-alt uk-position-absolute"></button>
                                    <img src="assets/img/ecommerce/s6_edge.jpg" alt="" class="img_medium"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-xLarge-8-10  uk-width-large-7-10">
                        <div class="md-card">
                            <div class="md-card-content large-padding">
                                <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                                    <div class="uk-width-large-1-2">
                                        <div class="uk-form-row">
                                            <label for="product_edit_name_control">Số nhà/ lô</label>
                                            <input type="text" class="md-input" id="SoNha" name="product_edit_name_control" value=""/>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="product_edit_manufacturer_control">Dự án</label>
                                            <input type="text" class="md-input" id="DuAn" name="product_edit_manufacturer_control" value=""/>
                                        </div>

                                        <div class="uk-form-row">
                                            <label for="product_edit_memory_control" class="uk-form-label">Loại sản phẩm</label>
                                            <select id="LoaiSP" name="product_edit_memory_control" data-md-selectize>
                                                <option value="32gb">căn hộ</option>
                                                <option value="64gb" selected>biệt thự</option>
                                                <option value="128gb">nhà lên kề</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="uk-width-large-1-2">
                                        <div class="uk-form-row">
                                            <label for="product_edit_sn_control">Giá</label>
                                            <input type="text" class="md-input" id="Gia" name="product_edit_sn_control" value=""/>
                                        </div>
                                        <div class="uk-form-row">
                                            <label class="uk-form-label" for="product_edit_tags_control">Tình trạng</label>
                                            <select id="TinhTrang" name="product_edit_memory_control" data-md-selectize>
                                                <option value="lte" >Đã bán</option>
                                                <option value="quad_hd" >Đang xử lý</option>
                                                <option value="android_5" >Chưa bán</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md-card">
                    <div class="md-card-content">
                        <h3 class="heading_a uk-margin-bottom">Mô tả</h3>
                        <textarea class="ckeditor" name="MoTa" id="MoTa" rows="10" cols="80"></textarea>
                        <input type="submit" name="submit" id = "action" name="action" value="Add">
                        <!-- <div class="md-fab-wrapper" onclick="$('#submit').click()">
                            <a class="md-fab md-fab-primary" href="#">
                                <i class="material-icons">&#xE161;</i>
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="md-fab-wrapper">
                    <button class="md-fab md-fab-primary" type="submit" id="action" >
                        <i class="material-icons">&#xE161;</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="md-fab-wrapper">
    <a class="md-fab md-fab-primary">
        <i class="material-icons">&#xE161;</i>
    </a>
</div>

<!-- google web fonts -->
<script>

$("#FormSP").submit(function(e){
    e.preventDefault();
    SubmitSP();

});
function SubmitSP(){
    // var value = CKEDITOR.instances['MoTa'].getData();
    // var from = $("#NgayCap").val().split("-");
    var date = from[2]+"-"+from[1]+"-"+from[0];
    $.post(
        "http://localhost:8080/bds_project/public/SanPham",
        {SoNha: $('#SoNha').val(),
        DiaChi: $('#DiaChi').val(),
        DuAn: $('#DuAn').val(),
        LoaiSP: $('#LoaiSP').val(),
        Gia: $('#Gia').val(),
        TinhTrang: $('#TinhTrang').val(),
        MoTa: value},
        function(data,status)
        {
            if(status == "success")
                window.location = 'index.php?c=sanpham&a=list';
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
