<?php
class DB{
    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "test";

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
        
        // check table image exited.
        $exs = mysqli_query($this->con,"select 1 from image");
        if (!$exs)
        {
            mysqli_query($this->con, "CREATE TABLE `test`.`image` ( `title` VARCHAR(255) NOT NULL ,
                                    `description` TEXT NULL,  `image` BLOB NOT NULL, 
                                    `status` BOOLEAN NOT NULL DEFAULT FALSE,
                                    PRIMARY KEY (`title`)) ENGINE = InnoDB;");
        }
    }

    function checktable(){
        


    }
}
?>