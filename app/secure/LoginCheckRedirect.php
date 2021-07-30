<?php
namespace app\secure;

class LoginCheckRedirect{
    protected string $link;
    protected string $permission = "name";

    public function __construct()
    {
        $this->link = "index.php";
    }

    public function check():void{
        session_start();
        if (empty($_SESSION[$this->permission])){
            header("Location:" . $this->link);
            exit();
        }
    }
}