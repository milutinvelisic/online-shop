<?php

namespace app\controllers;

class Controller
{

    protected function loadView($view, $data = null)
    {

        //        extract($data);
        require_once 'app/views/shared/header.php';
        require_once 'app/views/' . $view . ".php";
        require_once 'app/views/shared/footer.php';
    }

    protected function loadAdminView($view, $data = null)
    {
        //        extract($data);
        require_once 'app/views/shared/adminhead.php';
        require_once 'app/views/shared/adminheader.php';
        require_once 'app/views/shared/adminsidebar.php';
        require_once 'app/views/' . $view . ".php";
        require_once 'app/views/shared/adminfooter.php';
    }

    protected function redirect($page)
    {
        header("Location: " . $page);
    }

    protected function json($data = null, $statusCode = 200)
    {
        header("content-type: application/json");
        http_response_code($statusCode);
        echo json_encode($data);
    }
}
