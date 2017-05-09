<?php 

require_once('./user/views/side_bar.php');

?>
<div id="page_content">
        <div id="page_content_inner">
            <h3 class="heading_b uk-margin-bottom">Danh sách khách hàng</h3>
             <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-1-1">
                            <div class="uk-overflow-container">
                                <table class="uk-table">
                                    <thead>
                                        <tr>
                                            <th>Mã khách hàng</th>
                                            <th>Tên khách hàng</th>
                                            <th>Loại khách hàng</th>
                                            <th>Số điện thoại</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  foreach ($khachhang as $kh) { ?>
                                        <tr>
                                            <td class="uk-text-large uk-text-nowrap"><?php echo $kh->MaKhachHang; ?></a></td>
                                            <td class="uk-text-nowrap"><a href="index.php?c=khachhang&a=details&id=<?php echo $kh->MaKhachHang; ?>"><?php echo $kh->TenKhachHang; ?></td>
                                            <td><?php echo $kh->LoaiKhachHang; ?></td>
                                            <td class="uk-text-nowrap"><?php echo $kh->DienThoai; ?></td>
                                            <td class="uk-text-nowrap">
                                                
                                                <a href="index.php?c=khachhang&a=details&id=<?php echo $kh->MaKhachHang;?>"><i class="material-icons md-24">&#xE8F4;</i></a>
                                                <a href="index.php?c=khachhang&a=edit&id=<?php echo $kh->MaKhachHang;?>"><i class="material-icons md-24">&#xE150;</i></a>
                                                <a onclick="deleteDA(<?php echo $kh->MaKhachHang; ?>)">
                                                    <i class="material-icons md-24">&#xE872;</i>
                                                </a>
                                            </td>
                                        </tr>
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <ul class="uk-pagination uk-margin-medium-top uk-margin-medium-bottom">
                                <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                                <li class="uk-active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><span>&hellip;</span></li>
                                <li><a href="#">20</a></li>
                                <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="md-fab-wrapper">
        <a href="index.php?c=khachhang&a=add" class="md-fab md-fab-accent" >
            <i class="material-icons">&#xE145;</i>
        </a>
    </div>

    <!-- google web fonts -->
    <script>

function deleteDA($id){
        if(confirm('Bạn có chắc muốn xóa khách hàng này không ?')){
            $.post(
            "http://localhost:8080/bds/bds_project/public/KhachHang/"+$id ,
             {_method:"Delete"},
             function(data,status)
             {
                if(status== "success")
                    window.location = 'index.php?c=khachhang&a=list';
             },
             "json"
            );
        }else {
            window.location = 'index.php?c=khachhang&a=list';
        }
         
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