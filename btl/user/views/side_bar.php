<!DOCTYPE html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>title</title>

    <script type="text/javascript" src="public/js/admin/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="public/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="public/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/styles.js"></script>
    <script type="text/javascript" src="public/ckeditor/ckeditor.js"></script>
    <!-- <link rel="icon" type="image/png" href="public/images/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="public/images/favicon-32x32.png" sizes="32x32"> -->


     <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!-- metrics graphics (charts) -->
    <link rel="stylesheet" href="public/css/metricsgraphics.css">
    <!-- c3.js (charts) -->
    <link rel="stylesheet" href="public/css/c3.min.css">
    <link rel="stylesheet" href="public/css/fullcalendar.min.css">
    <link rel="stylesheet" href="public/css/kendo.common-material.min.css"/>
    <link rel="stylesheet" href="public/css/kendo.material.min.css"/>
    <link rel="stylesheet" href="public/css/dataTables.bootstrap.min.css"/>

    <link rel="stylesheet" href="public/css/uikit.almost-flat.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="public/css/main.css" media="all">
     <link rel="stylesheet" href="public/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <!-- <link rel="stylesheet" href="public/icons/flags/flags.min.css" media="all"> -->

    <!-- altair admin -->
    <link rel="stylesheet" href="public/css/main.css" media="all">
     

</head>
<body class="sidebar_main_open">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>
                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a></li>
                        <li data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="user_action_image">a</a>
                            <div class="uk-dropdown uk-dropdown-small uk-dropdown-flip">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="">Tài khoản</a></li>
                                    <li><a href="">Đăng xuất</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_main_search_form">
            <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>
            <form class="uk-form">
                <input type="text" class="header_main_search_input" />
                <button class="header_main_search_btn uk-button-link"><i class="md-icon material-icons">&#xE8B6;</i></button>
            </form>
        </div>
    </header><!-- main header end -->

    <!-- main sidebar -->
    <aside id="sidebar_main">
        <a href="#" class="uk-close sidebar_main_close_button"></a>
        <div class="sidebar_main_header">
            <div class="sidebar_logo"><a href="index.html"><img src="" alt="" height="15" width="71"/></a></div>
        </div>
        <div class="menu_section">
            <ul>
                <li>
                    <a href="index.php?c=thongke&a=thongke">
                        <span class="menu_icon uk-icon-bar-chart"></span>
                        Báo cáo - Thống kê
                    </a>
                </li>
                <li>
                    <a href="index.php?c=taikhoan&a=list">
                        <span class="menu_icon uk-icon-users"></span>
                        Nhân viên
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="menu_icon uk-icon-home"></span>
                        Sản phẩm
                    </a>
                    <ul>
                        <li><a href="index.php?c=duan&a=list">Dự án</a></li>
                        <li><a href="index.php?c=loaisp&a=list">Loại sản phẩm</a></li>
                        <li><a href="index.php?c=thongtinnha&a=list">Thông tin nhà</a></li>
                        <li><a href="index.php?c=sanpham&a=list">Sản phẩm</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <span class="menu_icon uk-icon-user"></span>
                        QL Khách hàng
                    </a>
                    <ul>
                        <li><a href="index.php?c=loaikh&a=list">Loại khách hàng</a></li>
                        <li><a href="index.php?c=khachhang&a=list">Khách hàng</a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.php?c=uudai&a=uudai">
                        <span class="menu_icon uk-icon-gift"></span>
                        Ưu đãi
                    </a>
                </li>
                <li>
                    <a href="index.php?c=hopdong&a=hopdong">
                        <span class="menu_icon uk-icon-list-alt"></span>
                        Hợp đồng
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu_icon uk-icon-usd"></span>
                        Nợ
                    </a>
                    <ul>
                        <li><a href="index.php?c=no&a=danhsach">Danh sách nợ</a></li>
                        <li><a href="index.php?c=no&a=lich">Lịch thu tiền</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside><!-- main sidebar end -->

    