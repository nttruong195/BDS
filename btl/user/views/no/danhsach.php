<?php 

require_once('./user/views/side_bar.php');

?>
<div id="page_content">
        <div id="page_content_inner">
            <h3 class="heading_b uk-margin-bottom">Danh sách nợ</h3>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-1-1">
                            <div class="uk-overflow-container">
                                <table class="uk-table">
                                    <thead>
                                        <tr>
                                            <th>Số thứ tự</th>
                                            <th>Mã hợp đồng</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>a</td>
                                            <td class="uk-text-large uk-text-nowrap"><a href="">a</a></td>
                                            <td class="uk-text-nowrap">
                                                <a href="index.php?c=no&a=details">
                                                    <i class="material-icons md-24">&#xE8F4;</i>
                                                </a>
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
    <script>
        $(function() {
            altair_helpers.retina_images();
        });
    </script>

</body>
</html>