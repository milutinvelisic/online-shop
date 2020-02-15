<?php


namespace app\controllers;

use app\models\User;
use app\models\Product;
use app\models\Shop;

class AdminUserController extends Controller
{

    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function adminUserPage()
    {

        $model = new User($this->database);

        $users = $model->getAllUsers();

        $this->loadAdminView("adminUsers", [
            "users" => $users
        ]);
    }



    public function insertUser(){
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['postalCode'])){
            $model = new User($this->database);

            $user = $model->insertUser($_POST["username"], $_POST["password"], $_POST["email"] ,$_POST["address"] ,$_POST["postalCode"]);
            $users = $model->getAllUsers();
            if($user){
                $this->json($users);
                return true;
            }
        }
    }



    public function deleteUser(){
        if(isset($_POST['id'])){
            $model = new User($this->database);

            $user = $model->deleteUser($_POST["id"]);
            $users = $model->getAllUsers();
            if($user){
                $this->json($users);
                return true;
            }
        }
    }
}