<?php

require_once('./user/views/side_bar.php');

?>
<div id="page_content">
        <div id="page_content_inner">
            <h3 class="heading_b uk-margin-bottom">Danh sách sản phẩm</h3>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-1-1">
                            <div class="uk-overflow-container">
                                <table class="uk-table">
                                    <thead>
                                        <tr>
                                            <th>Mã sản phẩm</th>
                                            <th>Ảnh</th>
                                            <th>Số nhà/ lô</th>
                                            <th>Loại sản phẩm</th>
                                            <th>Tình trạng</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  foreach ($sanpham as $sp) { ?>
                                        <tr>
                                            <td class="uk-text-large uk-text-nowrap"><?php echo $sp->MaSP; ?></td>
                                            <td><img class="img_thumb" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSmshZcZl4Lc1z2eKEHflL0P8JiiRCNneMIhTmyyBqbN_EUx7Sz-w"></td>
                                              <td><?php echo $sp->SoNha; ?></td>
                                              <td><?php echo $sp->LoaiSP; ?></td>
                                              <td><?php echo $sp->TinhTrang; ?></td>
                                            <td class="uk-text-nowrap"><span class="uk-badge uk-badge-success">a</span></td> <!-- uk-badge uk-badge-danger -->
                                            <td class="uk-text-nowrap">
                                                <a href="index.php?c=sanpham&a=details&id=<?php echo $sp->MaSP;?>">
                                                    <i class="material-icons md-24">&#xE8F4;</i>
                                                </a>
                                                <a href="index.php?c=sanpham&a=edit&id=<?php echo $sp->MaSP;?>">
                                                    <i class="material-icons md-24">&#xE150;</i>
                                                </a>
                                                <a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')">
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
        <a class="md-fab md-fab-accent" href="index.php?c=sanpham&a=add"">
            <i class="material-icons">&#xE145;</i>
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
    <script>
        $(function() {
            altair_helpers.retina_images();
        });
    </script>

</body>
</html>
