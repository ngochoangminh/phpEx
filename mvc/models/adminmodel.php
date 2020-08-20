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
    public function edit($title){
        echo "edit";
        $qr = "UPDATE image SET .... WHERE title = $title";
        return mysqli_query($this->con, $qr);
    }

    public function delete($img){
        echo "delete";
        $qr = "DELETE FROM image WHERE title=$img";
        mysqli_query($this->con, $qr);
        return $this->manage();
    }

    public function selectimage($title){
        $qr = "SELECT * FROM image WHERE title=$title";
        return mysqli_query($this->con, $qr);
    }
}
?>