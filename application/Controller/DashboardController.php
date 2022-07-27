<?php

namespace Controller;

use Application\Library\TemplateHandler\TemplateHandler;

class DashboardController extends ControllerBase
{
    public function getIndex(...$queryParams): string
    {
        session_start();
        if (!isset($_SESSION['user_id'])) header('location:/home');
        if (!isset($_SESSION['user_level'])) header('location:/home');
        if ($_SESSION['user_level'!='0']) header('location:/home');
        return (new TemplateHandler())->compileComponent('dashboard/dashboard.twig');
    }
}