
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
                          <div class="md-card uk-margin-medium-bottom">
                            <div class="md-card-content">
                                <table id="example" class="uk-table">
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
                                        <td ><?php echo $sp->MaSP; ?></td>
                                        <td><?php echo $sp->Anh; ?></td>
                                        <td><?php echo $sp->SoNha; ?></td>
                                        <td><?php echo $sp->LoaiSP; ?></td>
                                        <td><?php echo $sp->TinhTrang; ?></td>

                                        <td >
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
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

