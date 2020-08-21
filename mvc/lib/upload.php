<?php
class Upload{
    public function __construct($name)
    {
        $this->getFile($name);

    }
    public function process($name){
        $data = $this->getFile($name);
        $res = $this->uploads($data);
        
    }
    public function uploads($data=[]){
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

// Include the database configuration file  
require_once 'DB.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $db->query("INSERT into images (image, uploaded) VALUES ('$imgContent', NOW())"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>