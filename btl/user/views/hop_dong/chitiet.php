<?php 

require_once('./user/views/side_bar.php');

?>
<div id="page_content">
        <div id="page_content_inner">
            <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
                <div class="md-card md-card-single main-print" id="invoice">
                    <div id="invoice_preview"></div>
                    <div class="md-card-toolbar">
                        <div class="md-card-toolbar-actions hidden-print">
                            <i class="md-icon material-icons" id="invoice_print">&#xE8ad;</i>
                        </div>
                        <h3 class="md-card-toolbar-heading-text large" id="invoice_name">
                            Hợp đồng mã <?php  echo $hd->MaHopDong; ?>
                        </h3>
                    </div>
                    <div class="md-card-content">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-small-1-2">
                                <div class="uk-margin-bottom">
                                    <span class="uk-text-muted uk-text-small uk-text-italic">
                                    Ngày ký: 
                                    </span><strong><?php  echo $hd->NgayKy; ?></strong>
                                    <br/>
                                    <span class="uk-text-muted uk-text-small uk-text-italic">
                                    Ngày bàn giao: 
                                    </span> <strong><?php  echo $hd->NgayBanGiao; ?></strong>
                                    <br>
                                    <span class="uk-text-muted uk-text-small uk-text-italic">
                                    Khách hàng:
                                    </span><strong><?php  echo $hd->KhachHang; ?></strong>
                                    <br>
                                    <span class="uk-text-muted uk-text-small uk-text-italic">
                                    Nhân viên bán hàng:
                                    </span><strong>Nguyễn Thanh Trường</strong>
                                    <br>
                                    <span class="uk-text-muted uk-text-small uk-text-italic">
                                    Sản phẩm:
                                    </span><strong>nhà chung cư</strong>
                                    <br>
                                    <span class="uk-text-muted uk-text-small uk-text-italic">
                                    Ghi chú:
                                    </span><strong>Trả tiền đúng hạn</strong>
                                    <br>
                                </div>
                            </div>
                            <div class="uk-width-small-1-2">
                                <div class="uk-margin-bottom">
                                    <span class="uk-text-muted uk-text-small uk-text-italic">
                                    Kiểu thanh toán:
                                    </span><strong>trả góp</strong>
                                    <br>
                                    <span class="uk-text-muted uk-text-small uk-text-italic">
                                    Lãi suất:
                                    </span><strong>5%</strong>
                                    <br>
                                    <span class="uk-text-muted uk-text-small uk-text-italic">
                                    Đặt cọc:
                                    </span><strong>100.000.000</strong>
                                    <br>
                                    <span class="uk-text-muted uk-text-small uk-text-italic">
                                    Giá trị:
                                    </span><strong>2.000.000.000</strong>
                                    <br>
                                    <span class="uk-text-muted uk-text-small uk-text-italic">
                                    Ưu đãi:
                                    </span><strong>tặng SH</strong>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <h3>Lịch trả góp</h3>
                        <div class="uk-grid uk-margin-large-bottom">
                            <div class="uk-width-1-1">
                                <table class="uk-table">
                                    <thead>
                                    <tr class="uk-text-upper">
                                        <th class="uk-text-center">Đợt</th>
                                        <th class="uk-text-center">Ngày</th>
                                        <th class="uk-text-center">Thanh toán</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="uk-table-middle">
                                            <td class="uk-text-center">
                                                Đợt 1
                                            </td>
                                            <td class="uk-text-center">
                                                23/04/2017
                                            </td>
                                            <td class="uk-text-center">
                                                1.000.000.000
                                            </td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-text-center">
                                                Đợt 2
                                            </td>
                                            <td class="uk-text-center">
                                                23/06/2017
                                            </td>
                                            <td class="uk-text-center">
                                                500.000.000
                                            </td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-text-center">
                                                Đợt 3
                                            </td>
                                            <td class="uk-text-center">
                                                23/09/2017
                                            </td>
                                            <td class="uk-text-center">
                                                400.000.000
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="md-fab-wrapper">
        <!-- Quyền quản lý thì hiện cái này -->
        <a class="md-fab md-fab-primary md-fab-actions" href="#"><i class="material-icons">menu</i></a>
        <div class="md-fab-wrapper-small">
            <a class="md-fab md-fab-small md-fab-accent" href="index.php?c=hopdong&a=edit"><i class="material-icons">&#xE150;</i></a>
            <a class="md-fab md-fab-small md-fab-danger" data-uk-tooltip="{pos:'left'}" title="Duyệt/Hủy duyệt" href="#"><i class="material-icons">check</i></a>
        </div>
        <!-- Quyền NHBV hiện cái này -->
        <!-- <a class="md-fab md-fab-primary md-fab-accent" href="#"><i class="material-icons">&#xE150;</i></a> -->
    </div>

    <!-- <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" data-uk-modal="{target:'#modal_them'}">
            <i class="material-icons">&#xE150;</i>
        </a>
    </div> -->

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
    <script src="public/js/admin/page_invoices.min.js"></script>
    <script>
        $(function() {
            altair_helpers.retina_images();
        });
    </script>

</body>
</html>