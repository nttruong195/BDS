<?php
	class loaisp_controller
	{
		function getall_action(){
			
		}
	
    	function list_action()
        {
        
            $data = file_get_contents('http://localhost:8080/bds_project/public/LoaiSP'); // put the contents of the file into a variable
            $loaisp = json_decode($data);
            require_once(PATH_APPLICATION.'/views/loai_sp/danhsach.php');
        }
        function add_action()
        {
            $action_POST = isset($_POST['action'])?$_POST['action']:'';
             if(empty($action_POST)){
                require_once(PATH_APPLICATION.'/views/loai_sp/them.php');
            }else {
               
             }

        }
        function edit_action()
        {
            $id=$_GET['id'];
            $data = file_get_contents('http://localhost:8080/bds_project/public/LoaiSP/'.$id);
            $lsp = json_decode($data);
            require_once(PATH_APPLICATION.'/views/loai_sp/sua.php');
        }
        function details_action()
        {
            $id=$_GET['id'];
            $data = file_get_contents('http://localhost:8080/bds_project/public/LoaiSP/'.$id.'');
            $lsp = json_decode($data);
            require_once(PATH_APPLICATION.'/views/loai_sp/chitiet.php');
        }
	}
?>
