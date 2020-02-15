<?php

namespace app\controllers;

use app\models\Product;

class ProductController extends Controller
{
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function productPage()
    {
        if(isset($_GET['id'])){
            $model = new Product($this->database);

            $product = $model->getOneProduct($_GET['id']);

            $this->loadView("product", [
                'product' => $product
            ]);
        }else{
            $this->redirect('index.php?page=home');
        }
    }

    public function getOneProduct(){
        if(isset($_GET['idProduct'])){
            $model = new Product($this->database);

            $product = $model->getOneProduct($_GET['idProduct']);

            $this->json($product);
        }
    }

    public function getOneProductWithAllInfo(){

            $model = new Product($this->database);

            $product = $model->getAllProductsWithAllnfo();

            $this->json($product);

    }
}
