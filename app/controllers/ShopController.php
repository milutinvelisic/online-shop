<?php

namespace app\controllers;

 use app\models\Shop;

class ShopController extends Controller
{
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }
    public function shopPage()
    {

        $model = new Shop($this->database);

        $categories = $model->getAllCategories();

        $brands = $model->getAllBrands();

        $gender = $model->getAllGenders();

        $someProducts = $model->getSomeProducts();

        $this->loadView("shop", [
            'categories' => $categories,
            'brands' => $brands,
            'gender' => $gender,
            'someProducts' => $someProducts
        ]);
    }

    public function filterAll(){
        if(isset($_GET['gender']) || isset($_GET['categories']) || isset($_GET['brands'])){
            try {
                $model = new Shop($this->database);

                $products = $model->getProductsForBrandsAndGenderAndCategories($_GET['brands'], $_GET['gender'], $_GET['categories']);

                $this->json($products);
            }catch (\PDOException $ex){
                $this->json($ex->getMessage(), 500);
            }
        }else{
            $this->json(null,403);
        }
    }
}
