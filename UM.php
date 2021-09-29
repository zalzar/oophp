<?php
class User{

    public $Uusername;
    private $Uemail;
    public $Urole='member';

    public function __construct($username,$email)
    {
        $this->Uusername = $username;
        $this->Uemail = $email;
    }
    public function __destruct(){
        echo "$this->Uusername was removed. <br>";
    }

    public function __clone()
    {
        $this->Uusername=$this->Uusername.'cloned<br>';
    }

    //
    public function msg()
    {
        return "$this->Uemail sent a new message";
    }

    //getter
    public function getEmail()
    {       
        return $this->Uemail;
    }

    //setter
    public function setEmail($email)
    {
        if(strpos($email,'@')>-1){
            $this->Uemail=$email;
        }
    }
}
/*
extending User (class user) to have more capabilities 
by creating levels and roles variables 
*/ 
class AdminUser extends User{
    public $Ulevel;
    public $Urole='admin';

    public function __construct($username,$email,$level)
    {
        $this->Ulevel = $level;
        parent::__construct($username,$email);
    }
    
    public function msg()
    {
        return $this->getEmail().", an admin, sent a new message";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>