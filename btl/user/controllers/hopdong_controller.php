<?php
/**
* 
*/
class hopdong_controller
{
    function list_action()
    {
        $data = file_get_contents('http://localhost:8080/bds_project/public/HopDong');
        $hopdong = json_decode($data);
        require_once(PATH_APPLICATION.'/views/hop_dong/danhsach.php');
    }
    function details_action()
    {
        $id=$_GET['id'];
        $data = file_get_contents('http://localhost:8080/bds_project/public/HopDong/'.$id.'');
        $hd = json_decode($data);
        require_once(PATH_APPLICATION.'/views/hop_dong/chitiet.php');
    }
    function add_action()
    {
        require_once(PATH_APPLICATION.'/views/hop_dong/them.php');
    }
    function edit_action()
    {
        $id=$_GET['id'];
        $data = file_get_contents('http://localhost:8080/bds_project/public/DuAn/'.$id);
        $hd = json_decode($data);
        require_once(PATH_APPLICATION.'/views/hop_dong/sua.php');
    }
}
?>