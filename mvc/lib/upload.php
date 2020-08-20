<?php
class Upload{
    public function __construct($name)
    {
        $this->getFile($name);

    }
    public function process($name){
        $data = $this->getFile($name);
    }
    public function Uploads($data=[]){
            $ext = explode(".",$data[0]);
            $file_ext = strtolower(end($ext));
            $arr_ext = array("jpg","jpeg");
            if(!in_array($file_ext, $arr_ext)){
                echo "Format invalid";
            }
            if($data[3]>1048576){
                echo "file to big";
            }
            move_uploaded_file($data[2],"/public/images/".$data[0]);
            return $url_img = "/public/images/".$data[0];
        }  

    protected function getFile($file){
        if (isset($_FILES[$file])){
            $file_name =  $file[$file]["name"];
            $file_type = $file[$file]["type"];
            $tmp_name = $file[$file]["tmp_name"];
            $file_size = $file[$file]["size"];
            
            return array($file_name, $file_type, $tmp_name, $file_size);
        }
    } 
}
?>