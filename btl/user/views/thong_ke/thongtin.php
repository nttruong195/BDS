<?php

require_once('./user/views/side_bar.php');

?>




    <div id="page_content">

          <div id="page_content_inner">

              <div class="md-card">
                  <div class="md-card-content">
                      <div class="uk-grid" data-uk-grid-margin>
                          <div class="uk-width-large-1-2">
                              <form class="uk-form-stacked">
                                  <label for="kUI_datepicker_a" class="uk-form-label">Chọn khoảng thời gian </label>
                                  <input class="md-input" type="text" value="10-06-2015" id="uk_dp_1" data-uk-datepicker="{format:'DD.MM.YYYY'}">
                                  <!-- <input id="kUI_datepicker_a" value="10-06-2015" /> -->
                              </form>

                              <form class="uk-form-stacked">
                                  <!-- <label for="kUI_datepicker_a" class="uk-form-label"> </label> -->
                                  <input class="md-input" type="text" value="10-06-2015" id="uk_dp_2" data-uk-datepicker="{format:'DD.MM.YYYY'}">
                                  <!-- <input id="kUI_datepicker_a" value="10-06-2015" /> -->
                              </form>
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



        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Báo cáo chung</h3>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-3" id="BCTK_DuAn">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Dự án "Lĩnh Nam (Nhà Hiệp)"</h4>
                            <div id="c3_chart_donut" class="c3chart"></div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-2-3" id="BCTK_NhanVien">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Doanh thu từ hợp đồng của từng nhân viên</h4>
                            <div id="c3_chart_bar_stacked" class="c3chart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Spline Chart</h4>
                            <div id="c3_chart_spline" class="c3chart"></div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2" id="BCTK_HopDong">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Tổng doanh thu của các dự án</h4>
                            <div id="c3_chart_area_stacked" class="c3chart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Scatter Plot</h4>
                            <div id="c3_chart_scatter" class="c3chart"></div>
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

        // Báo cáo thống kê dự án
        $(function () {
           $('#BCTK_DuAn').click(function () {
               window.location="index.php?c=thongke&a=thongke_duan";
           });
       });
         // Báo cáo thống kê dự án
       $(function () {
          $('#BCTK_NhanVien').click(function () {
              window.location="index.php?c=thongke&a=thongke_nhanvien";
          });
      });
        // Báo cáo thống kê dự án
      $(function () {
         $('#BCTK_HopDong').click(function () {
             window.location="index.php?c=thongke&a=thongke_hopdong";
         });
     });
    </script>

    <!-- momentJS date library -->
    <script src="public/js/admin/moment.min.js"></script>

    <!-- common functions -->
    <script src="public/js/admin/common.min.js"></script>
    <!-- uikit functions -->
    <script src="public/js/admin/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="public/js/admin/altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
    <!-- d3 -->
    <script src="public/js/admin/d3.min.js"></script>
    <!-- metrics graphics (charts) -->
    <script src="public/js/admin/metricsgraphics.min.js"></script>
    <!-- c3.js (charts) -->
    <script src="public/js/admin/c3.min.js"></script>

    <!--  charts functions -->
    <script src="public/js/admin/plugins_charts.min.js"></script>

    <!-- enable hires images -->

    <!--  JS  PHẦN NHẬP NGÀY THÁNG-->
    <!-- page specific plugins -->
    <!-- kendo UI -->
    <script src="public/js/admin/kendoui.custom.min.js"></script>

    <!--  kendoui functions -->
    <script src="public/js/admin/pages/kendoui.min.js"></script>

    <!-- enable hires images -->

    <script>
        $(function() {
            altair_helpers.retina_images();
        });
    </script>

</body>
</html>
