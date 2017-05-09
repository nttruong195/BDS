<?php 

require_once('./user/views/side_bar.php');

?>
<div id="page_content">
        <div id="page_content_inner">
            <h3 class="heading_b uk-margin-bottom">Thêm tài khoản</h3>
            <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
                <div class="md-card">
                    <div class="md-card-content large-padding">
                        <div class="uk-grid uk-grid-divider uk-grid-medium">
                            <div class="uk-width-large-1-2">
                                
                            
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Họ và tên</label>
                                    <input type="text" class="md-input" name="name" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Tên đăng nhập</label>
                                    <input type="text" class="md-input" name="name" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Ngày sinh</label>
                                    <input class="md-input" type="text" id="uk_dp_1" data-uk-datepicker="{format:'DD.MM.YYYY'}">
                                </div>
                                <div class="fileinput-new thumbnail">
                                        <img src="public/assets/img/avatars/user.png" alt="user avatar"/>
                                </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>

                            </div>
                            <div class="uk-width-large-1-2">
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Điện thoại</label>
                                    <input type="text" class="md-input" name="name" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Địa chỉ cư trú</label>
                                    <input type="text" class="md-input" name="name" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Chức vụ</label>
                                    <input type="text" class="md-input" name="name" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Thông tin khác</label>
                                    <input type="text" class="md-input" name="name" value = ""/>
                                </div><br>

                            </div>

                        </div>
                    </div>
                </div>
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