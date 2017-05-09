<?php 

require_once('./user/views/side_bar.php');

?>
<div id="page_content">
        <div id="page_content_inner">
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-1-1">
                            <ul class="uk-tab" data-uk-tab="{connect:'#tabs_1'}">
                                <li class="uk-active"><a href="#">Dự án</a></li>
                                <li><a href="#">Nhân viên</a></li>
                                <li><a href="#">Hợp đồng</a></li>
                            </ul>
                            <ul id="tabs_1" class="uk-switcher uk-margin">
                                <li>
                                    <?php require_once 'duan.php'; ?>
                                </li>
                                <li><?php require_once 'nhanvien.php'; ?></li>
                                <li><?php require_once 'hopdong.php'; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-primary">
            <i class="material-icons">add</i>
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
    <script src="public/js/admin/kendoui.custom.min.js"></script>
    <script src="public/js/admin/kendoui.js"></script>
    <script src="public/js/admin/forms_advanced.min.js"></script>

    <!-- page specific plugins -->
    <!-- d3 -->
    <script src="public/js/admin/d3.min.js"></script>
    <!-- metrics graphics (charts) -->
    <script src="public/js/admin/metricsgraphics.min.js"></script>
    <!-- c3.js (charts) -->
    <script src="public/js/admin/c3.min.js"></script>

    <!--  charts functions -->
    <script src="public/js/admin/plugins_charts.min.js"></script>
    <!-- <script src="public/js/admin/chart.js"></script> -->

    <script src="public/js/admin/jquery.peity.min.js"></script>
    <script src="public/js/admin/handlebars.min.js"></script>
    <script src="public/js/admin/loader.js"></script>
    <script src="public/js/admin/dashboard.min.js"></script>
    <script>
        $(function() {
            altair_helpers.retina_images();
        });
    </script>
    
    <!--Load the AJAX API-->
    <?php require_once 'duan_data.php'; ?>
    <?php require_once 'nhanvien_data.php'; ?>
    <?php require_once 'hopdong_data.php'; ?>
</body>
</html>