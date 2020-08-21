<?php
$ass = "This is site admin";
// require_once "./mvc/views/admin.php";
// require_once "./mvc/views/manage.php";
class admin extends Controller{
    // function __construct()
    // {
    //     require_once "./mvc/views/manage.php";
    // }
    function manage(){
        // echo "manage is running";
        // $md = $this->model("adminmodel");
        // $res = $md->manage;
        // $this->view("manage");
        // require_once "./mvc/views/manage.php";
        function __construct()
        {
            require_once "./mvc/views/manage.php";
        }
        echo "manage";
    }
    function show(){
        echo "this is action show image";
    }
    function edit(){
        echo "this is action edit image detail";
        // $md = $this->model("adminmodel");
        // $res = $md->edit;
        // $this->view("edit", $res);
        $this->view("edit", []);
    }
    function delete(){
        echo "this is action delete image";
        $md = $this->model("delete");
        $res = $md->delete();
        $this->view("manage", []);
    }
    function upload(){
        echo "upload new image";
        
    }
    public function view($view){
        require_once "./mvc/views/".$view.".php";
    }
}
?>