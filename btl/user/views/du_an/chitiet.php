<?php 

require_once('./user/views/side_bar.php');

?>
<div id="page_content">
        <div id="page_content_inner">
            <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
                <div class="md-card md-card-single main-print" id="invoice">
                    <div class="md-card-toolbar">
                        <h3 class="md-card-toolbar-heading-text">
                            Chi tiết
                        </h3>
                    </div>
                    <div class="md-card-content large-padding">
                        <div class="uk-grid uk-grid-divider uk-grid-medium">
                            <div class="uk-width-large-1-3">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Mã dự án</span>
                                    </div>
                                    <div class="uk-width-large-2-3">
                                        <span class="uk-text-large uk-text-middle"><?php  echo $da->MaDuAn; ?></span>
                                    </div>
                                </div>
                                <hr class="uk-grid-divider">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Tên dự án</span>
                                    </div>
                                    <div class="uk-width-large-2-3">
                                        <span class="uk-text-large uk-text-middle"><?php  echo $da->TenDuAn; ?></span>
                                    </div>
                                </div>
                                <hr class="uk-grid-divider">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Địa chỉ</span>
                                    </div>
                                    <div class="uk-width-large-2-3">
                                        <?php  echo $da->DiaChi; ?>
                                    </div>
                                </div>
                                <hr class="uk-grid-divider">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Tổng diện tích</span>
                                    </div>
                                    <div class="uk-width-large-2-3">
                                        <?php  echo $da->TongDienTich; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large-1-3">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Giấy phép</span>
                                     </div>
                                    <div class="uk-width-large-2-3">
                                          <?php  echo $da->GiayPhep; ?>
                                     </div>
                                 </div>
                                <hr class="uk-grid-divider">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Số lượng sản phẩm</span>
                                     </div>
                                    <div class="uk-width-large-2-3">
                                          <?php  echo $da->SoLuongSanPham; ?>
                                     </div>
                                </div>
                                <hr class="uk-grid-divider">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Số lượng còn lại</span>
                                     </div>
                                    <div class="uk-width-large-2-3">
                                          <?php  echo $da->SLSPChuaBan; ?>
                                     </div>
                                </div>
                                <hr class="uk-grid-divider">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Ngày cấp</span>
                                     </div>
                                    <div class="uk-width-large-2-3">
                                          <?php  echo $da->NgayCap; ?>
                                     </div>
                                 </div>
                            </div>
                            <div class="uk-width-large-1-3">
                               <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Mô tả</span>
                                     </div>
                                    <div class="uk-width-large-2-3">
                                          <?php  echo $da->MoTa; ?>
                                     </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="index.php?c=duan&a=edit&id=<?php echo $da->MaDuAn;?>">
            <i class="material-icons">&#xE150;</i>
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
    <script>
        $(function() {
            altair_helpers.retina_images();
        });
    </script>

</body>
</html>