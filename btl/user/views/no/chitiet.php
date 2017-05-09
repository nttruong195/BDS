<?php 

require_once('./user/views/side_bar.php');

?>
<div id="page_content">
        <div id="page_content_inner">
            <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
                <div class="md-card md-card-single main-print" id="invoice">
                    <div id="invoice_preview"></div>
                    <div class="md-card-toolbar">
                        <h3 class="md-card-toolbar-heading-text large" id="invoice_name">
                            Hợp đồng mã 06
                        </h3>
                    </div>
                    <div class="md-card-content">
                        <h3>Lịch trả góp</h3>
                        <div class="uk-grid uk-margin-large-bottom">
                            <div class="uk-width-1-1">
                                <table class="uk-table">
                                    <thead>
                                    <tr class="uk-text-upper">
                                        <th class="uk-text-center">Đợt</th>
                                        <th class="uk-text-center">Ngày</th>
                                        <th class="uk-text-center">Số tiền</th>
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
                                            <td class="uk-text-center">
                                                <input type="checkbox" name="checkbox_demo" id="checkbox_demo_1" data-md-icheck />
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
                                            <td class="uk-text-center">
                                                <input type="checkbox" name="checkbox_demo" id="checkbox_demo_1" data-md-icheck />
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
                                            <td class="uk-text-center">
                                                <input type="checkbox" name="checkbox_demo" id="checkbox_demo_1" data-md-icheck />
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
    <script src="public/js/admin/page_invoices.min.js"></script>
    <script>
        $(function() {
            altair_helpers.retina_images();
        });
    </script>

</body>
</html>