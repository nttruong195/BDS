<?php
/**
* 
*/
class thongtinnha_controller
{
    function list_action()
    {
        require_once(PATH_APPLICATION.'/views/thong_tin_nha/danhsach.php');
    }
    function add_action()
    {
        require_once(PATH_APPLICATION.'/views/thong_tin_nha/them.php');
    }
    function edit_action()
    {
        require_once(PATH_APPLICATION.'/views/thong_tin_nha/sua.php');
    }
    function details_action()
    {
        require_once(PATH_APPLICATION.'/views/thong_tin_nha/chitiet.php');
    }
}
?>