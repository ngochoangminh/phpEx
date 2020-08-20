<?php
echo "This is site admin";
class manage extends Controller{
    function manage(){
        echo "manage";
        $md = $this->model("adminmodel");
        $res = $md->manage;
        $this->view("manage", $res);

    }
    function show(){
        echo "this is action show image";
    }
    function edit(){
        echo "this is action edit image detail";
        $md = $this->model("adminmodel");
        $res = $md->edit;
        $this->view("edit", $res);
    }
    function delete(){
        echo "this is action delete image";
        $md = $this->model("delete");
        $res = $md->delete();
        $this->view("manage", []);
    }
    function news(){
        echo "new image";
    }
}
?>