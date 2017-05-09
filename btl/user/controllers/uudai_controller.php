<?php
/**
* 
*/
class uudai_controller
{
    function uudai_action()
    {
        require_once(PATH_APPLICATION.'/views/uu_dai/danhsach.php');
    }
    function add_action()
    {
        require_once(PATH_APPLICATION.'/views/uu_dai/them.php');
    }
    function edit_action()
    {
        require_once(PATH_APPLICATION.'/views/uu_dai/sua.php');
    }
    function details_action()
    {
        require_once(PATH_APPLICATION.'/views/uu_dai/chitiet.php');
    }
    
}
?>