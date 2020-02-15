<?php


namespace app\controllers;

use app\models\Order;

class OrderController extends Controller
{
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function InsertOrder(){
        $orderModel = new Order($this->database);
        try{
            $result = $orderModel->InsertAllOrder();
            $this->json($result);
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
        }

    }
}