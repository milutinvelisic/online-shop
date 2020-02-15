<?php

namespace app\controllers;

use app\models\User;

class RegisterController extends Controller
{
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }


    public function registerPage()
    {
        $this->loadView("register");
    }

    public function register()
    {

        $errors = [];

        if(!isset($_POST['username'])){
            array_push($errors, "Username is required.");
        }

        if(!isset($_POST['password'])){
            array_push($errors, "Password is required.");
        }

        if(!isset($_POST['email'])){
            array_push($errors, "Email is required.");
        }

        if(!isset($_POST['address'])){
            array_push($errors, "Address is required.");
        }

        if(!isset($_POST['postalCode'])){
            array_push($errors, "Postal Code is required.");
        }

        if(count($errors) == 0){
            $model = new User($this->database);

              $res =  $model->addUser($_POST["username"], $_POST["password"], $_POST["email"] ,$_POST["address"] ,$_POST["postalCode"]);
           if($res){
                return true;
           }else{
               array_push($errors, "Username is already taken, please try something else.");
               $this->loadView('register', [
                   "errors" => $errors
               ]);
           }
        }else{
            $this->loadView('register', [
                "errors" => $errors
            ]);
        }

    }

}
