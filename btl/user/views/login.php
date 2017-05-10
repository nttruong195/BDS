<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from altair_html.tzdthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Sep 2015 09:20:56 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->

    <!-- <link rel="icon" type="image/png" href="public/assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="public/assets/img/favicon-32x32.png" sizes="32x32"> -->

    <title>Trang đăng nhập</title>


    <!-- uikit -->
    <link rel="stylesheet" href="public/bower_components/uikit/css/uikit.almost-flat.min.css"/>
    <link rel="stylesheet" href="public/assets/icons/flags/flags.min.css" media="all">
    <!-- altair admin login page -->
    <link rel="stylesheet" href="public/assets/css/login_page.min.css" />
    <!-- altair admin -->
    <link rel="stylesheet" href="public/assets/css/main.min.css" media="all">

    <script type="text/javascript" src="public/js/admin/jquery-3.1.1.js"></script>

</head>
<body class="login_page">

    <div class="login_page_wrapper">
        <div class="md-card" id="login_card">
            <div class="md-card-content large-padding" id="login_form">
                <div class="login_heading">
                    <div class="user_avatar"></div>
                </div>
                <form id="FormLogin" method="post" action="">
                    <div class="uk-form-row">
                        <label for="login_username">Tài khoản</label>
                        <span style="color: red" id="TaiKhoan_error"></span>
                        <input class="md-input" type="text" id="login_username" name="username" />
                    </div>
                    <div class="uk-form-row">
                        <label for="login_password">Mật khẩu</label>
                        <span style="color: red" id="MatKhau_error"></span>
                        <input class="md-input" type="password" id="login_password" name="password" />
                    </div>
                    <div class="uk-margin-medium-top">
                        <input  class="md-btn md-btn-primary md-btn-block md-btn-large" type="submit" value="Đăng nhập" name="Login"/>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $("#FormLogin").submit(function(e){
        e.preventDefault();
        $("#TaiKhoan_error").text("");
        $("#MatKhau_error").text("");
        if($('#login_username').val()==''){
            $("#TaiKhoan_error").text(" Tài khoản không được để trống");
        }else if($('#login_password').val()==''){
            $("#MatKhau_error").text(" Mật khẩu không được để trống");
        }else {
            SubmitLogin();
        }
       

    });
    function SubmitLogin(){

    $.post(
        "http://localhost:8080/bds_project/public/login",
        {TenTaiKhoan: $('#login_username').val(),
        MatKhau: $('#login_password').val(),
        },
        function(data,status)
        {

            $("#TaiKhoan_error").text("");
            $("#MatKhau_error").text("");
            if(data == 0){
                $("#TaiKhoan_error").text(" Kiếm tra lại tài khoản hoặc mật khẩu");
            }else {

                // $_SESSION['MaTaiKhoan']= data.MaTaiKhoan;
                // $_SESSION['TenTaiKhoan']= data.TenTaiKhoan;
                // $_SESSION['ChucVu']= data.ChucVu;
                window.location.href = 'index.php?c=thongke&a=thongke';
            }

        },
        "json"
     );
    }

</script>
<!-- common functions -->
<script src="public/assets/js/common.min.js"></script>
<!-- altair core functions -->
<script src="public/assets/js/altair_admin_common.min.js"></script>

<!-- altair login page functions -->

<!-- uikit functions -->
<!-- altair common functions/helpers -->

<!-- page specific plugins -->
<!-- ionrangeslider -->
<!-- inputmask-->

<!--  forms advanced functions -->

</body>

<!-- Mirrored from altair_html.tzdthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Sep 2015 09:20:57 GMT -->
</html>