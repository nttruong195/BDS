<?php 

require_once('./user/views/side_bar.php');

?>
<div id="page_content">
        <div id="page_content_inner">
            <h3 class="heading_b uk-margin-bottom">Thêm hợp đồng</h3>
            <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
                <div class="md-card">
                    <div class="md-card-toolbar">
                        <h3 class="md-card-toolbar-heading-text">
                            Chi tiết
                        </h3>
                        <a class="md-btn md-btn-primary uk-float-right" style="margin-top: 5px;" href="#">Duyệt</a>
                        <!-- Nếu hợp đồng đã duyệt thì hiển thị nút dưới -->
                        <!-- <a class="md-btn md-btn-danger uk-float-right" style="margin-top: 5px;" href="#">Hủy duyệt</a> -->
                    </div>

					<!-- các input khi validate nếu sai thì thêm class 'md-input-danger' -->

                    <div class="md-card-content large-padding">
                        <div class="uk-grid uk-grid-divider uk-grid-medium">
                            <div class="uk-width-large-1-2">
                                <div class="uk-width-large-2-2">
                                    <label for="uk_dp_1">Khách hàng</label>
                                    <select id="select_demo_1" data-md-selectize>
                                        <option value="a">1</option>
                                    </select>
                                </div><br>
                                <div class="uk-width-large-2-2">
                                    <label for="uk_dp_1">NVBH</label>
                                    <select id="select_demo_1" data-md-selectize>
                                        <option value="a">2</option>
                                    </select>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Ngày ký</label>
                                    <input class="md-input" type="text" id="uk_dp_1" data-uk-datepicker="{format:'DD.MM.YYYY'}">
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Ngày bàn giao</label>
                                    <input class="md-input" type="text" id="uk_dp_1" data-uk-datepicker="{format:'DD.MM.YYYY'}">
                                </div>
                            </div>
                            <div class="uk-width-large-1-2">
                                <div class="uk-width-large-2-2">
                                    <label for="uk_dp_1">Sản phẩm</label>
                                    <select id="select_demo_1" data-md-selectize>
                                        <option value="a">Item A</option>
                                    </select>
                                </div><br>
                                <div class="uk-width-large-2-2">
                                    <label for="uk_dp_1">Kiểu thanh toán</label>
                                    <select id="select_demo_1" data-md-selectize>
                                        <option value="a">1 lần</option>
                                        <option value="b">Trả góp</option>
                                    </select>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Lãi suất</label>
                                    <input type="number" class="md-input" name="name" value = ""/>
                                </div><br>
                                <div class="uk-grid uk-grid-small">
                                    <label for="uk_dp_1">Đặt cọc</label>
                                    <input type="number" class="md-input" name="name" value = ""/>
                                </div><br>
                            </div>
                        </div>
                    </div>
                    <div class="md-card-content">
	                    <h3 class="heading_a uk-margin-bottom">Ghi chú</h3>
	                    <textarea class="ckeditor" name="desc" id="desc" rows="10" cols="80"></textarea>
	                    <input type="submit" name="submit" id = "submit" hidden>
	                    <div class="md-fab-wrapper" onclick="$('#submit').click()">
	                        <a class="md-fab md-fab-primary" href="#">
	                            <i class="material-icons">&#xE161;</i>
	                        </a>
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