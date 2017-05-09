<?php
/**
* 
*/
class duan_controller
{
    function list_action()
    {
        $data = file_get_contents('http://localhost:8080/bds_project/public/DuAn'); // put the contents of the file into a variable
        $duan = json_decode($data);
        require_once(PATH_APPLICATION.'/views/du_an/danhsach.php');
    }
    function add_action()
    {
         $action_POST = isset($_POST['action'])?$_POST['action']:'';
            if(empty($action_POST)){
                require_once(PATH_APPLICATION.'/views/du_an/them.php');
            }else {
               
            }
        
    }
    function edit_action()
    {
        $id=$_GET['id'];
        $data = file_get_contents('http://localhost:8080/bds_project/public/DuAn/'.$id);
        $da = json_decode($data);
        $getDate  = new DateTime($da->NgayCap); 
        $dt = $getDate->format('d-m-Y');
        
        require_once(PATH_APPLICATION.'/views/du_an/sua.php');
    }
    function details_action()
    {
        $id=$_GET['id'];
        $data = file_get_contents('http://localhost:8080/bds_project/public/DuAn/'.$id.'');
        $da = json_decode($data);
        require_once(PATH_APPLICATION.'/views/du_an/chitiet.php');
    }
}
?>