<?php

namespace app\controllers;

use app\models\User;

class LoginController extends Controller
{
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function loginPage()
    {
        $this->loadView("login");
    }

    public function doLogin()
    {

        $errors = [];

        if(!isset($_POST['username'])){
            array_push($errors, "Username is required.");
        }

        if (!isset($_POST["password"])) {
            array_push($errors, "Password is required.");
        }

        $model = new User($this->database);

        $user = $model->findUserByUsername($_POST['username']);

        if($user != null){
            $userCheck = $user = $model->checkLogin($_POST['username'], $_POST['password']);

            if($userCheck){

                $newUser = $model->doLogInUser($user->idUser);

                if($newUser){

                    $_SESSION['user'] = $user;
                    $this->redirect('index.php?page=home');
                }else{
                    array_push($errors, "Server is over-clocked, please try again in few minutes.");
                }
            }else{
                array_push($errors, "Invalid username and password combination.");
            }
        }else{
            array_push($errors, "Invalid username.");
        }

        if (count($errors)) {
            $this->loadView('login', [
                "errors" => $errors
            ]);
        }
    }

    public function doLogout(){

        $errors = [];

        $model = new User($this->database);

        $user = $model->doLogoutUser($_SESSION['user']->idUser);
        if($user){
            $_SESSION["user"] = null;
            $this->redirect("index.php?page=home");
        }else{
            array_push($errors, "There was problem with logout, please try again.");
        }

    }
}
