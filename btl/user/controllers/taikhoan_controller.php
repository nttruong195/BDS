<?php
/**
* 
*/
class taikhoan_controller
{
    function list_action()
    {
        $data = file_get_contents('http://localhost:8080/bds_project/public/TaiKhoan'); // put the contents of the file into a variable
        $taikhoan = json_decode($data);
        require_once(PATH_APPLICATION.'/views/tai_khoan/danh_sach.php');
    }
    function details_action()
    {
        $id=$_GET['id'];
        $data = file_get_contents('http://localhost:8080/bds_project/public/TaiKhoan/'.$id.'');
        $tk = json_decode($data);
        $getDate  = new DateTime($tk->NgaySinh); 
        $dt = $getDate->format('d-m-Y');
        require_once(PATH_APPLICATION.'/views/tai_khoan/chi_tiet.php');
    }
    function edit_action()
    {
        $id=$_GET['id'];
        $data = file_get_contents('http://localhost:8080/bds_project/public/TaiKhoan/'.$id);
        $tk = json_decode($data);
        $getDate  = new DateTime($tk->NgaySinh); 
        $dt = $getDate->format('d-m-Y');

        require_once(PATH_APPLICATION.'/views/tai_khoan/sua.php');
    }
    function add_action()
    {

        require_once(PATH_APPLICATION.'/views/tai_khoan/add.php');
    }
     function del_action()
    {
        
        require_once(PATH_APPLICATION.'/views/tai_khoan/danh_sach.php');
    }
}
?>