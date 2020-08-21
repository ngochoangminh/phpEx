<?php
class App{
    protected $controller="admin";
    protected $action="manage";
    // protected $arrays = [];
    function __construct(){
        $arr = $this->urlProcess();

        // Controller
        if( file_exists("./mvc/controllers/".$arr[0].".php") ){
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/controllers/". $this->controller .".php";
        $this->controller = new $this->controller;
        
        // Action
        if(isset($arr[1])){
            if( method_exists( $this->controller , $arr[1]) ){
                $this->action = $arr[1];
            }
            unset($arr[1]);

        call_user_func_array($this->controller, $this->action );
        }
    }

    // split '/' and ' ' of url
    function urlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
?>