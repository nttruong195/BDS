<?php 

require_once('./user/views/side_bar.php');

?>

<div id="page_content">
    <div id="page_content_inner">
        <form id="FormTK" method="POST" class="uk-form-stacked" >
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-7-10">
                    <div class="md-card">
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
                                <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname"><?php echo $tk->TenTaiKhoan; ?></span></h2>
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
                                            Thông tin nhân viên
                                        </h3>

                                        <div class="uk-grid">
                                            <div class="uk-width-1-1">
                                                <div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2" data-uk-grid-margin>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon"></span>
                                                            <label>Họ và tên</label>
                                                            <input type="text" class="md-input" id="HoTen" name="user_edit_name" value=<?php echo $tk->HoTen;?> />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon"></span>
                                                            <label>Số điện thoại</label>
                                                            <input type="text" class="md-input" id="SDT" name="user_edit_phone" value=<?php echo $tk->SoDienThoai; ?> />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon"></span>
                                                            <label>Tên đăng nhập</label>
                                                            <input type="text" class="md-input" id="TenTaiKhoan" name="user_edit_id" value=<?php echo $tk->TenTaiKhoan; ?> />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon"></span>
                                                            <label>Ngày sinh</label>
                                                            <input type="text" class="md-input" id="NgaySinh" data-uk-datepicker="{format:'DD-MM-YYYY'}" name="user_edit_birthday" value=<?php echo $dt; ?> />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon"></span>
                                                            <label>Địa chỉ cư trú</label>
                                                            <input type="text" class="md-input" id="DiaChi" name="user_edit_address" value=<?php echo $tk->DiaChi; ?> />
                                                        </div>
                                                    </div>

                                                </div>
                                                <br/>
                                                <div>
                                                    <div class="uk-input-group">
                                                        <span class="uk-input-group-addon"></span>
                                                        <label>Thông tin khác</label>
                                                        <textarea class="ckeditor" name="MoTa" id="MoTa" rows="10" cols="80"><?php echo $tk->ThongTinKhac;?></textarea>
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

$("#FormTK").submit(function(e){
    e.preventDefault();
    SubmitTK();
});
function SubmitTK(){
  var value = CKEDITOR.instances['MoTa'].getData();
  var id = <?php echo $tk->MaTaiKhoan;?>;
  var from = $("#NgaySinh").val().split("-");
  var date = from[2]+"-"+from[1]+"-"+from[0];
  $.post(
    "http://localhost:8080/bds_project/public/TaiKhoan/"+id ,
    {HoTen: $('#HoTen').val(),
    MatKhau: "<?php echo $tk->MatKhau;?>",
    ChucVu: "<?php echo $tk->ChucVu;?>",
    SoDienThoai: $('#SDT').val(),
    Anh: 'a',
    TenTaiKhoan: $('#TenTaiKhoan').val(),
    NgaySinh: date,
    DiaChi: $('#DiaChi').val(),
    ThongTinKhac: value, 
    _method:"PUT"},
    function(data,status)
    {
        window.location = 'index.php?c=taikhoan&a=list';
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
