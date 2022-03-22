<?php

namespace Controller;

class LogoutController extends ControllerBase
{

    public function getIndex(...$queryParams): string
    {
        return 'logout';
    }

    public function getlogout(){
        session_start();
        unset($_SESSION['user_id']);
        unset($_SESSION['email']);
        unset($_SESSION['username']);
        header('location:/');
    }

}