<?php
class DB{
    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "test";

    function __construct(){
        echo "conttruc  DB";
    }
}
?>