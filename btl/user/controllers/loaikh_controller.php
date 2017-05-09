<?php
/**
* 
*/
class loaikh_controller
{
    function list_action()
    {
        $data = file_get_contents('http://localhost:8080/bds/bds_project/public/LoaiKhachHang'); // put the contents of the file into a variable
        $loaikh = json_decode($data);
        require_once(PATH_APPLICATION.'/views/loai_kh/danh_sach.php');
    }
    function details_action()
    {
        $id=$_GET['id'];
            $data = file_get_contents('http://localhost:8080/bds/bds_project/public/LoaiKhachHang/'.$id.'');
            $lkh = json_decode($data);
        require_once(PATH_APPLICATION.'/views/loai_kh/chi_tiet.php');
    }
    function edit_action()
    {
        $id=$_GET['id'];
            $data = file_get_contents('http://localhost:8080/bds/bds_project/public/LoaiKhachHang/'.$id);
            $lkh = json_decode($data);

        require_once(PATH_APPLICATION.'/views/loai_kh/sua.php');
    }
    function add_action()
    {
        $action_POST = isset($_POST['action'])?$_POST['action']:'';
             if(empty($action_POST)){
                require_once(PATH_APPLICATION.'/views/loai_kh/add.php');
            }else {
               
             }

        require_once(PATH_APPLICATION.'/views/loai_kh/add.php');
    }
     function del_action()
    {
        
        require_once(PATH_APPLICATION.'/views/loai_kh/danh_sach.php');
    }
}'http://localhost:8080/bds/bds_project/public/LoaiKhachHang'
?>