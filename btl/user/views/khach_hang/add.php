<?php 

require_once('./user/views/side_bar.php');

?>
<div id="page_content">
        <div id="page_content_inner">
            <h3 class="heading_b uk-margin-bottom">Thêm khách hàng</h3>
            <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
             <form id="FormKH" method="POST">
                <div class="md-card">
                    <div class="md-card-content large-padding">
                        <div class="uk-grid uk-grid-divider uk-grid-medium">
                            <div class="uk-width-large-1-2">
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Tên khách hàng</label>
                                    <input type="text" class="md-input" id="TenKhachHang" name="name" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Loại khách hàng</label>
                                    <input type="text" class="md-input" id="LoaiKhachHang" name="name" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Ngành nghề kinh doanh</label>
                                    <input type="text" class="md-input" id="NganhNghe" name="name" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Hộ khẩu thường trú</label>
                                    <input type="text" class="md-input" id="HoKhau" name="name" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Điện thoại</label>
                                    <input type="text" class="md-input" id="DienThoai" name="name" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Email</label>
                                    <input type="text" class="md-input" id="Email" name="name" value = ""/>
                                </div><br>
                            </div>
                            <div class="uk-width-large-1-2">
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Thành phố</label>
                                    <input type="text" class="md-input" id="ThanhPho" name="name" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Chứng minh thư</label>
                                    <input type="text" class="md-input" id="CMTND" name="name" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Tên người liên hệ khi cần</label>
                                    <input type="text" class="md-input" id="LienHe" name="name" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Số điện thoại người liên hệ</label>
                                    <input type="text" class="md-input" id="DienThoaiLienHe" name="name" value = ""/>
                                </div><br>
                            </div>
                            <div class="md-card-content">
                                    <h3 class="heading_a uk-margin-bottom">Thông tin khác</h3>
                                    <textarea class="ckeditor" name="MoTa" id="ThongTinKhac" rows="10" cols="80"></textarea>
                                </div>

                        </div>
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


    <!-- google web fonts -->
    <script>
$("#FormKH").submit(function(e){
    e.preventDefault();
    SubmitKH();
});
function SubmitKH(){
  var value = CKEDITOR.instances['ThongTinKhac'].getData();
  $.post(
    "http://localhost:8080/bds/bds_project/public/KhachHang" ,
    {TenKhachHang: $('#TenKhachHang').val(),
    LoaiKhachHang: $('#LoaiKhachHang').val(),
    NganhNghe: $('#NganhNghe').val(),
    HoKhau: $('#HoKhau').val(),
    DienThoai: $('#DienThoai').val(),
    Email: $('#Email').val(),
    ThanhPho: $('#ThanhPho').val(),
    CMTND: $('#CMTND').val(),
    LienHe: $('#LienHe').val(),
    DienThoaiLienHe: $('#DienThoaiLienHe').val(),
    ThongTinKhac: value,
    },
    function(data,status)
    {
        window.location = 'index.php?c=khachhang&a=list';
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