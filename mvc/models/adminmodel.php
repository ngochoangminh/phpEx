<?php
class adminmodel extends DB{
    public function new(){
        echo "new";

    }

    public function manage(){
        echo "manage";
        $qr = "SECLECT * FROM image";
        return mysqli_query($this->con, $qr);
    }
    public function edit($ids){
        echo "edit";
        $qr = "UPDATE image SET .... WHERE id=".$ids;
        return mysqli_query($this->con, $qr);
    }
    public function delete($ids){
        echo "delete";
        $qr = "DELETE FROM image WHERE id=".$ids;
        mysqli_query($this->con, $qr);
        return $this->manage();
    }

    public function getimage($ids){
        $qr = "SELECT * FROM image WHERE id=".$ids;
        return mysqli_query($this->con, $qr);
    }
    public function add($data=[]){
        $qr = "INSERT INTO image(title, description, image, status) VALUE (".$data.")";
        return mysqli_query($this->con, $qr);
    }
}
?>