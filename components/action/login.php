<?php

class LOGIN extends DB_CONNECT {
    public $validated = false;
    private $Username;
    private $Password;

    function __construct($username, $password){
        $this->Username = $username;
        $this->Password = $password;
    }

    function check(){
        if (($this->Username == null) || ($this->Password == null)){
            die("Username and Password required!");
        }
        return $this->validated = true;
    }

    function validate(){
        $sql = "SELECT * from Users WHERE `username`='$this->Username' AND `password`='$this->Password'";
        $result=$this->connect()->query($sql);
        if (!$result){
            trigger_error('Invalid Query: '.$this->connect()->error);
        }
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                return $_SESSION["userID"] = $row["userID"];
                // echo $row['userID'];
            }
        }else {
            return 'user not found';
        }
    }

    function __destruct()
    {   
        header("Location: /PHP1-Contacts-app/");
    }
}

if (isset($_REQUEST['Login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = new LOGIN($username, $password);
    if ($user->check() === true){
        $user->validate();
    }
    header("Location: /PHP1-Contacts-app/");
};

if (isset($_REQUEST['logout'])){
    session_unset();
    session_destroy();
    header("Location: /PHP1-Contacts-app/");
}
    
// class login extends DB_CONNECT {
//     public  function getUsers(){
//         sql = ""
//     }
// }