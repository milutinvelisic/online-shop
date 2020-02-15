<?php


namespace app\models;


class User
{
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function findUserByUsername($username){
        return $this->database->executeNonGet( "SELECT * from users where username = ?", [$username]);
    }

    public function findUserById($id){
        return $this->database->executeNonGet( "SELECT * from users where idUser = ?", [$id]);
    }

    public function getAllUsers(){
        return $this->database->executeGet("SELECT * FROM users");
    }

    public function checkLogin($username, $password){
        return $this->database->executeNonGet( "SELECT * from users where username = ? and password = ?", [$username, md5($password)]);
    }

    public function addUser($username, $password, $email, $address, $postalCode){
        $params = [
             $username,
             md5($password),
             $email,
             $address,
            $postalCode
        ];

        try{

            $insert = $this->database->conn->prepare("INSERT into users values(null,?, ?, ?, ?, ?, 1, 2)");
            $insert->execute($params);

                $userId = $this->database->conn->lastInsertId();

                $user = $this->database->executeNonGet("SELECT * FROM users where idUser = ?", [$userId]);

                if($user){
                    $_SESSION['user'] = $user;
                    header("Location: index.php?page=home");
                }


        }catch (\PDOException $ex){
           return false;
        }

    }

    public function insertUser($username, $password, $email, $address, $postalCode){
        $params = [
            $username,
            md5($password),
            $email,
            $address,
            $postalCode
        ];

        try{

            $insert = $this->database->conn->prepare("INSERT into users values(null,?, ?, ?, ?, ?, 1, 2)");
            $res = $insert->execute($params);
            if($res){
                return true;
            }

        }catch (\PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function deleteUser($id){
        return $this->database->deleteSomething("delete from users where idUser = ?", $id);
    }

    public function doLogoutUser($idUser){

        $prep = $this->database->conn->prepare("UPDATE users set active = 0 where idUser = ?");
        $res = $prep->execute([$idUser]);
        if($res){
            return true;
        }
    }

    public function doLogInUser($idUserLog){

        $prep = $this->database->conn->prepare("UPDATE users set active = 1 where idUser = ?");
        $res = $prep->execute([$idUserLog]);
        if($res){
            return true;
        }
    }

    public function getActiveUsers(){
        return $this->database->executeGet("SELECT count(*) as countUsers FROM users where active = 1");
    }

    public function getActiveAdmins(){
        return $this->database->executeGet("SELECT count(*) as countAdmins FROM users where active = 1 and idRole = 1");
    }

    public function countAllUsers(){
        return $this->database->executeGet("SELECT count(*) as countAll FROM users");
    }

    public function countAllAdmins(){
        return $this->database->executeGet("SELECT count(*) as countAllAdmins FROM users where idRole = 1");
    }
}