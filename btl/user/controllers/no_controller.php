<?php
/**
* 
*/
class no_controller
{
    function danhsach_action()
    {
        require_once(PATH_APPLICATION.'/views/no/danhsach.php');
    }
    function details_action()
    {
        require_once(PATH_APPLICATION.'/views/no/chitiet.php');
    }
    function lich_action()
    {
        require_once(PATH_APPLICATION.'/views/no/lich.php');
    }
}
?>