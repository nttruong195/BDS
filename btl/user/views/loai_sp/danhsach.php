<?php 

require_once('./user/views/side_bar.php');

?>
<div id="page_content">
        <div id="page_content_inner">
            <h3 class="heading_b uk-margin-bottom">Danh sách loại sản phẩm</h3>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-1-1">
                            <div class="uk-overflow-container">
                                
                                <table id="ex" class="uk-table">
                                    <thead>
                                        
                                        <tr>
                                            <th>Mã loại sản phẩm</th>
                                            <th>Tên loại sản phẩm</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  foreach ($loaisp as $lsp) { ?>

                                        <tr>
                                            <td class="uk-text-large uk-text-nowrap"><?php echo $lsp->MaLoaiSP; ?></td>
                                            <td><?php echo $lsp->TenLoaiSP; ?></td>
                                            <td class="uk-text-nowrap">
                                                <a href="?c=loaisp&a=details&id=<?php echo $lsp->MaLoaiSP;?>">
                                                    <i class="material-icons md-24">&#xE8F4;</i>
                                                </a>
                                                <a href="index.php?c=loaisp&a=edit&id=<?php echo $lsp->MaLoaiSP;?>">
                                                    <i class="material-icons md-24">&#xE150;</i>
                                                </a>
                                                <a onclick="deleteLSP(<?php echo $lsp->MaLoaiSP;?>)">
                                                    <i class="material-icons md-24">&#xE872;</i>
                                                </a>
                                            </td>
                                        </tr>
                                       <?php   }?>
                                      
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
        <a class="md-fab md-fab-accent" href="index.php?c=loaisp&a=add">
            <i class="material-icons">&#xE145;</i>
        </a>
    </div>

    <!-- google web fonts -->
    <script>
    function deleteLSP($id){
        if(confirm('Bạn có chắc muốn xóa loại sản phẩm này ?')){
            $.post(
            "http://localhost:8080/bds_project/public/LoaiSP/"+$id ,
             {_method:"Delete"},
             function(data,status)
             {
                window.location = 'index.php?c=loaisp&a=list';
             },
             "json"
            );
        }else {
            window.location = 'index.php?c=loaisp&a=list';
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