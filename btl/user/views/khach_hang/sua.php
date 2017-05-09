<?php 

require_once('./user/views/side_bar.php');

?>

<div id="page_content">
    <div id="page_content_inner">
        <form action="" method="post" class="uk-form-stacked" id="FormKH">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
                    <div class="md-card">
                     <div class="md-card-content large-padding">
                        <div class="uk-grid uk-grid-divider uk-grid-medium">
                        <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="assets/img/blank.png" alt="user avatar"/>
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div class="user_avatar_controls">
                                    <span class="btn-file">
                                        <span class="fileinput-new"><i class="material-icons">&#xE2C6;</i></span>
                                        <span class="fileinput-exists"><i class="material-icons">&#xE86A;</i></span>
                                        <input type="file" name="user_edit_avatar_control" id="user_edit_avatar_control">
                                    </span>
                                    <a href="#" class="btn-file fileinput-exists" data-dismiss="fileinput"><i class="material-icons">&#xE5CD;</i></a>
                                </div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname"><?php  echo $kh->TenKhachHang; ?></span></h2>
                            </div>
                            <button type="submit" class="md-fab md-fab-small md-fab-success" id="user_edit_submit">
                                <i class="material-icons">&#xE161;</i>
                            </button>
                        </div>
                        <div class="user_content">
                            <ul id="user_edit_tabs" class="uk-tab" data-uk-tab="{connect:'#user_edit_tabs_content'}">
                            </ul>
                            <ul id="user_edit_tabs_content" class="uk-switcher uk-margin">
                                <li>
                                    <div class="uk-margin-top">
                                        <h3 class="full_width_in_card heading_c">
                                            Sửa thông tin khách hàng
                                        </h3>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-1">
                                                <div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2" data-uk-grid-margin>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon"></span>
                                                            <label>Tên khách hàng</label>
                                                            <input type="text" class="md-input" id="TenKhachHang" name="user_edit_name" value=<?php  echo $kh->TenKhachHang; ?> />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon"></span>
                                                            <label>Loại khách hàng</label>
                                                            <input type="text" class="md-input" id="LoaiKhachHang" name="user_edit_class" value=<?php  echo $kh->LoaiKhachHang; ?> />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon"></span>
                                                            <label>Ngành nghề kinh doanh</label>
                                                            <input type="text" class="md-input" id="NganhNghe" name="user_edit_a" value=<?php  echo $kh->NganhNghe; ?> />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon"></span>
                                                            <label>Hộ khẩu thường trú</label>
                                                            <input type="text" class="md-input" id="HoKhau" name="user_edit_b" value=<?php  echo $kh->HoKhau; ?> />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon"></span>
                                                            <label>Số điện thoại</label>
                                                            <input type="text" class="md-input" id="DienThoai" name="user_edit_phone" value=<?php  echo $kh->DienThoai; ?> />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon"></span>
                                                            <label>Email</label>
                                                            <input type="text" class="md-input" id="Email" name="user_edit_c" value=<?php  echo $kh->Email; ?> />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon"></span>
                                                            <label>Thành phố</label>
                                                            <input type="text" class="md-input" id="ThanhPho" name="user_edit_d" value=<?php  echo $kh->ThanhPho; ?> />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon"></span>
                                                            <label>Chứng minh thư</label>
                                                            <input type="text" class="md-input" id="CMTND" name="user_edit_e" value=<?php  echo $kh->CMTND; ?> />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon"></span>
                                                            <label>Tên người liên lạc khi cần</label>
                                                            <input type="text" class="md-input" id="LienHe" name="user_edit_f" value=<?php  echo $kh->LienHe; ?> />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon"></span>
                                                            <label>Số điện thoại người liên hệ</label>
                                                            <input type="text" class="md-input" id="DienThoaiLienHe" name="user_edit_g" value=<?php  echo $kh->DienThoaiLienHe; ?> />
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div>
                                                    <div class="md-card-content">
                                                        <h3 class="heading_a uk-margin-bottom">Thông tin khác</h3>
                                                        <textarea class="ckeditor" name="MoTa" id="ThongTinKhac" rows="10" cols="80"><?php echo $kh->ThongTinKhac;?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
  var id = <?php echo $kh->MaKhachHang;?>;
  $.post(
    "http://localhost:8080/bds/bds_project/public/KhachHang/"+id ,
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
    _method:"PUT"},
    function(data,status)
    {
        window.location = 'index.php?c=khachhang&a=list';
    },
    "json"
    );
        // window.location = 'index.php?c=loaisp&a=list';
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
<script src="public/bower_components/moment/min/moment.min.js"></script>

<!-- common functions -->
<script src="public/assets/js/common.min.js"></script>
<!-- uikit functions -->
<script src="public/assets/js/uikit_custom.min.js"></script>
<!-- altair common functions/helpers -->
<script src="public/assets/js/altair_admin_common.min.js"></script>

<!-- page specific plugins -->
<!-- magnific popup -->
<script src="public/bower_components/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

<!--  user profile functions -->
<script src="public/assets/js/pages/page_user_profile.min.js"></script>

<!-- enable hires images -->
<script>
    $(function() {
        altair_helpers.retina_images();
    });
</script>
