<?php
/**
* 
*/
class khachhang_controller
{
    function list_action()
    {
        $data = file_get_contents('http://localhost:8080/bds/bds_project/public/KhachHang'); // put the contents of the file into a variable
        $khachhang = json_decode($data);
        require_once(PATH_APPLICATION.'/views/khach_hang/danh_sach.php');
    }
    function details_action()
    {
        $id=$_GET['id'];
            $data = file_get_contents('http://localhost:8080/bds/bds_project/public/KhachHang/'.$id.'');
            $kh = json_decode($data);
        require_once(PATH_APPLICATION.'/views/khach_hang/chi_tiet.php');
    }
    function edit_action()
    {
        $id=$_GET['id'];
        $data = file_get_contents('http://localhost:8080/bds/bds_project/public/KhachHang/'.$id);
        $kh = json_decode($data);

        require_once(PATH_APPLICATION.'/views/khach_hang/sua.php');
    }
    function add_action()
    {
         $action_POST = isset($_POST['action'])?$_POST['action']:'';
            if(empty($action_POST)){
                require_once(PATH_APPLICATION.'/views/khach_hang/add.php');
            }else {
               
            }
        
    }
     
}
?>