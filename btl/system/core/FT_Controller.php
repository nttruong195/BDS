<?php 
if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 

class FT_Controller
{
    // Đối tượng view
    protected $view     = NULL;
     
    // Đối tượng model
    protected $model    = NULL;
     
    // Đối tượng library
    protected $library  = NULL;
     
    // Đối tượng helper
    protected $helper   = NULL;
     
    // Đối tượng config
    protected $config   = NULL;
     
    /**
     * Hàm khởi tạo
     * 
     * @desc    Load các thư viện cần thiết
     */
    public function __construct() 
    {
    }
     
    /**
     * Hàm chạy ứng dụng
     * 
     * @desc    tham số truyền vào gồm controller và action
     */
    public function load($controller, $action)
    {
        // Chuyển đổi tên controller vì nó có định dạng là {Name}_Controller
        $controller = strtolower($controller) . '_controller';
     
        // chuyển đổi tên action vì nó có định dạng {name}Action
        $action = strtolower($action) . '_action';

        // Kiểm tra file controller có tồn tại hay không
        if (!file_exists(PATH_APPLICATION . '/controllers/' . $controller . '.php')){
            //echo PATH_APPLICATION . '/controllers/' . $controller . '.php'; 
            die ('Controller không tồn tại');
        }
        //echo PATH_APPLICATION . '/controllers/' . $controller . '.php';
        require_once PATH_APPLICATION . '/controllers/' . $controller . '.php';
     
        // Kiểm tra class controller có tồn tại hay không
        if (!class_exists($controller)){

            die ('Controller không tồn tại');
        }
     
        // Khởi tạo controller
        $controllerObject = new $controller();
     
        // Kiểm tra action có tồn tại hay không
        if ( !method_exists($controllerObject, $action)){
            die ('Action không tồn tại');
        }
     
        // Gọi tới action
        $controllerObject->{$action}();
    }
}