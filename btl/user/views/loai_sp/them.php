<?php 

require_once('./user/views/side_bar.php');

?>

<div id="page_content">
    <div id="page_content_inner">
        <h3 class="heading_b uk-margin-bottom">Thêm loại sản phẩm</h3>
        <div class="uk-width-xLarge-10-10  uk-width-large-10-10">
            <div class="md-card">
                <div class="md-card-toolbar">
                    <h3 class="md-card-toolbar-heading-text">
                        Chi tiết
                    </h3>
                </div>
                <form id="FormLSP" method="POST">
                    <!-- các input khi validate nếu sai thì thêm class 'md-input-danger' -->
                    <div class="md-card-content large-padding">
                        <div class="md-card-content">
                            <label id="a" class="md-input-danger"></label>
                            <label for="uk_dp_1">Tên loại sản phẩm</label>
                            <input type="text" class="md-input" id="TenLoaiSP" name="TenLoaiSP" value = ""/>
                        </div>
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-bottom">Mô tả</h3>
                            <textarea class="ckeditor" name="MoTa" id="MoTa" rows="10" cols="80" ></textarea>
                        </div>
                    </div>
                    <div class="md-fab-wrapper">
                        <button class="md-fab md-fab-primary" type="submit" id="action" name="action" value="Add">
                            <i class="material-icons">&#xE161;</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- google web fonts -->
<script type='text/javascript'>
$("#FormLSP").submit(function(e){
    e.preventDefault();
    SubmitLSP();
    
});
function SubmitLSP(){
  var value = CKEDITOR.instances['MoTa'].getData();
  $.post(
    "http://localhost:8080/bds_project/public/LoaiSP",
    {TenLoaiSP: $('#TenLoaiSP').val(), MoTa: value},
    function(data,a,b)
    {
        if(data=="1")
            window.location = 'index.php?c=loaisp&a=list';
        else{
            document.getElementById('a').innerHTML  = data.MoTa +'<br/>'+data.TenLoaiSP;
        }
    },
    "json"
    );
       // window.location = 'index.php?c=loaisp&a=list';
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
<script type="text/javascript" src="public/js/admin/moment.min.js"></script>

<!-- common functions -->
<script type="text/javascript" src="public/js/admin/common.min.js"></script>
<!-- uikit functions -->
<script type="text/javascript" src="public/js/admin/uikit_custom.min.js"></script>
<!-- altair common functions/helpers -->
<script type="text/javascript" src="public/js/admin/altair_admin_common.min.js"></script>
<!-- enable hires images -->
<script type="text/javascript" src="public/js/admin/page_mailbox.min.js"></script>
<script type="text/javascript" src="public/js/admin/kendoui.custom.min.js"></script>
<script type="text/javascript" src="public/js/admin/forms_advanced.min.js"></script>
<script type="text/javascript" src="public/js/admin/ion.rangeSlider.min.js"></script>

<!--  kendoui functions -->
<script type="text/javascript" src="public/js/admin/kendoui.js"></script>
<script>
$(function() {
    altair_helpers.retina_images();
});
</script>

</body>
</html>