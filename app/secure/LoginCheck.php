<?php
namespace app\secure;

class LoginCheck
{
    public function Check(): bool
    {
        if (!empty($_SESSION["name"])) {
            return true;
        }else{
            return false;
        }
    }
}