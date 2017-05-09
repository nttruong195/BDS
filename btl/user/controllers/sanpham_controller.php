<?php
/**
*
*/
class sanpham_controller
{
    function list_action()
    {
      $data = file_get_contents('http://localhost:8080/bds_project/public/SanPham'); // put the contents of the file into a variable
      $sanpham = json_decode($data);
      require_once(PATH_APPLICATION.'/views/san_pham/danhsach1.php');
    }
    function add_action()
    {
      $action_POST = isset($_POST['action'])?$_POST['action']:'';
         if(empty($action_POST)){
             require_once(PATH_APPLICATION.'/views/san_pham/them.php');
         }else {

         }
    }
    function edit_action()
    {
      $id=$_GET['id'];
      $data = file_get_contents('http://localhost:8080/bds_project/public/SanPham/'.$id);
      $sp = json_decode($data);

      require_once(PATH_APPLICATION.'/views/san_pham/sua.php');
    }
    function details_action()
    {
      $id=$_GET['id'];
      $data = file_get_contents('http://localhost:8080/bds_project/public/SanPham/'.$id.'');
      $sp = json_decode($data);
      require_once(PATH_APPLICATION.'/views/san_pham/chitiet.php');
    }
}
?>
