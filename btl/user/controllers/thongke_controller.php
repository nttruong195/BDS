<?php
/**
*
*/
class thongke_controller
{
    function thongke_action()
    {
        require_once(PATH_APPLICATION.'/views/thong_ke/thongke.php');
    }
    function details_action()
{
    require_once(PATH_APPLICATION.'/views/thongke/chitiet.php');
}
function thongtin_action()
{
    require_once(PATH_APPLICATION.'/views/thongke/thongtin.php');
}
function thongke_duan_action()
{
    require_once(PATH_APPLICATION.'/views/thongke/thongke_duan.php');
}
function thongke_nhanvien_action()
{
    require_once(PATH_APPLICATION.'/views/thongke/thongke_nhanvien.php');
}
function thongke_hopdong_action()
{
    require_once(PATH_APPLICATION.'/views/thongke/thongke_hopdong.php');
}
}
?>
