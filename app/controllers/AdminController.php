<?php


namespace app\controllers;


use app\models\User;
use app\models\Log;

class AdminController extends Controller
{
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }
    public function adminHomePage()
    {
        $model = new User($this->database);

        $activeUsers = $model->getActiveUsers();
        $activeAdmins = $model->getActiveAdmins();
        $allUsers = $model->countAllUsers();
        $allAdmins = $model->countAllAdmins();

        $logModel = new Log();
        $loggedPages = $logModel->getLog();

        $this->loadAdminView("adminHome", [
            "activeUsers" => $activeUsers,
            "activeAdmins" => $activeAdmins,
            "allUsers" => $allUsers,
            "allAdmins" => $allAdmins,
            "loggedPages" => $loggedPages
            ]);
    }
}