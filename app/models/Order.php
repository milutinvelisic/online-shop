<?php


namespace app\models;


class Order
{
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function InsertOrder($idUser){
        $query = "INSERT INTO `orderList` VALUES (NULL, ?, CURRENT_TIMESTAMP)";

        $prepared = $this->database->conn->prepare($query);
        $prepared->execute([$idUser]);

        $idOrder = $this->database->conn->lastInsertId();

        return $idOrder;
    }

    public function InsertAllOrder(){
        $idUser = $_SESSION["user"]->idUser;


        $idOrder = $this->InsertOrder($idUser);


        $storageData = $_POST["productsInStorage"];

        $query = 'INSERT INTO `order` VALUES ';
        $query_parts = array();
        for($x=0; $x<count($storageData); $x++){
            $query_parts[] = "(null,'" . $storageData[$x]['id'] . "','" . $storageData[$x]['quantity'] . "','" . $idOrder . "')";
        }
        $query .= implode(',', $query_parts);
        $tmpCart = $this->database->conn->prepare($query);
        $rez = $tmpCart->execute();


    }
}