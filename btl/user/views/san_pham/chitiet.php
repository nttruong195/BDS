<?php

require_once('./user/views/side_bar.php');

?>
<div id="page_content">
    <div id="page_content_inner">
        <h3 class="heading_b uk-margin-bottom">Chi tiết sản phẩm</h3>
        <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
            <!-- các input khi validate nếu sai thì thêm class 'md-input-danger' -->
            <form action="" class="uk-form-stacked" id="product_edit_form">
                <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                    <div class="uk-width-xLarge-2-10 uk-width-large-3-10">
                        <div class="md-card">
                            <div class="md-card-toolbar">
                                <div class="md-card-toolbar-actions">
                                    <i class="md-icon material-icons">&#xE146;</i>
                                </div>
                                <h3 class="md-card-toolbar-heading-text">
                                    Ảnh
                                </h3>
                            </div>
                            <div class="md-card-content">
                                <div class="uk-margin-bottom uk-text-center uk-position-relative">
                                    <button type="button" class="uk-modal-close uk-close uk-close-alt uk-position-absolute"></button>
                                    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSmshZcZl4Lc1z2eKEHflL0P8JiiRCNneMIhTmyyBqbN_EUx7Sz-w" alt="" class="img_medium"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-xLarge-8-10  uk-width-large-7-10">
                        <div class="md-card">
                            <div class="md-card-content large-padding">
                                <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                                    <div class="uk-width-large-1-3">
                                        <div class="uk-grid uk-grid-small">
                                            <div class="uk-width-large-2-3">
                                                <span class="uk-text-muted uk-text-small">Mã sản phẩm</span>
                                            </div>
                                            <div class="uk-width-large-1-3">
                                                <span class="uk-text-large uk-text-middle"><?php  echo $sp->MaSP; ?></span>
                                            </div>
                                        </div>
                                        <hr class="uk-grid-divider">
                                        <div class="uk-grid uk-grid-small">
                                            <div class="uk-width-large-2-3">
                                                <span class="uk-text-muted uk-text-small">Số nhà, lô</span>
                                            </div>
                                            <div class="uk-width-large-1-3">
                                                <span class="uk-text-large uk-text-middle"><?php  echo $sp->SoNha; ?></span>
                                            </div>
                                        </div>
                                        <hr class="uk-grid-divider">
                                        <div class="uk-grid uk-grid-small">
                                            <div class="uk-width-large-2-3">
                                                <span class="uk-text-muted uk-text-small">Dự án</span>
                                            </div>
                                            <div class="uk-width-large-1-3">
                                                <span class="uk-text-large uk-text-middle"><?php  echo $sp->DuAn; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-1-3">
                                        <div class="uk-grid uk-grid-small">
                                            <div class="uk-width-large-2-3">
                                                <span class="uk-text-muted uk-text-small">Loại sản phẩm</span>
                                            </div>
                                            <div class="uk-width-large-1-3">
                                                <span class="uk-text-large uk-text-middle"><?php  echo $sp->LoaiSP; ?></span>
                                            </div>
                                        </div>
                                        <hr class="uk-grid-divider">
                                        <div class="uk-grid uk-grid-small">
                                            <div class="uk-width-large-2-3">
                                                <span class="uk-text-muted uk-text-small">Giá</span>
                                            </div>
                                            <div class="uk-width-large-1-3">
                                                <span class="uk-text-large uk-text-middle"><?php  echo $sp->GiaBan; ?></span>
                                            </div>
                                        </div>
                                        <hr class="uk-grid-divider">
                                        <div class="uk-grid uk-grid-small">
                                            <div class="uk-width-large-2-3">
                                                <span class="uk-text-muted uk-text-small">Tình trạng</span>
                                            </div>
                                            <div class="uk-width-large-1-3">
                                                <span class="uk-text-large uk-text-middle"><?php  echo $sp->TinhTrang; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-1-3">
                                       <div class="uk-grid uk-grid-small">
                                            <div class="uk-width-large-1-3">
                                                <span class="uk-text-muted uk-text-small">Mô tả</span>
                                            </div>
                                            <div class="uk-width-large-2-3">
                                              <?php  echo $sp->MoTa; ?>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
            </form>
        </div>
    </div>
</div>

<div class="md-fab-wrapper">

        <a class="md-fab md-fab-accent" href="index.php?c=sanpham&a=edit&id=<?php echo $sp->MaSP;?>">
          <i class="material-icons">&#xE150;</i>
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
