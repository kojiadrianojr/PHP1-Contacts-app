<?php

// $db_connect=new mysqli(HOST,USER,"",DB);
// if (mysqli_connect_errno()) {
//     echo "Failed to connect to MySQL: " . mysqli_connect_errno();
//     exit();
// }

class DB_CONNECT {
    private $HOST = "localhost";
    private $USER = "root";
    private $PASS = "";
    private $DATABASE = "addressbook_db";
    protected $connection = null;

    protected function connect(){
        $db_connect=new mysqli($this->HOST, $this->USER, $this->PASS, $this->DATABASE);
        if (mysqli_connect_errno()){
            echo "FAILED to connect to MySQL: " . mysqli_connect_errno();
            exit();
        }
        return $db_connect;
    }
}

