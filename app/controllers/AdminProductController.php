<?php


namespace app\controllers;


use app\models\Shop;
use app\models\Product;

class AdminProductController extends Controller
{
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function adminProductPage()
    {

        $model = new Product($this->database);
        $model1 = new Shop($this->database);

        $products = $model->getAllProductsWithAllnfoGrouped();
        $cat = $model1->getAllCategories();
        $gender = $model1->getAllGenders();
        $brands = $model1->getAllBrands();
        $sizes = $model->getAllSizes();

        $this->loadAdminView("adminProducts", [
            "products" => $products,
            "cat" => $cat,
            "gender" => $gender,
            "brands" => $brands,
            "sizes" => $sizes
        ]);
    }

    public function insertProduct(){
        if(isset($_POST['productName']) && isset($_POST['description']) && isset($_POST['productPrice']) && isset($_POST['cat']) && isset($_POST['gender']) && isset($_POST['brands']) && isset($_POST['sizes']) && isset($_POST['quantity']) && isset($_FILES["productPicture"])){
            $model = new Product($this->database);

            $stmt = $model->insertProduct($_POST["productName"], $_POST["description"], $_POST["productPrice"], $_POST["cat"] , $_POST["gender"] , $_POST["brands"] , $_POST["sizes"] , $_POST["quantity"], $_FILES["productPicture"]);
            $products = $model->getAllProductsWithAllnfoGrouped();
            if($stmt){
                $this->json($products);
                return true;
            }else{
                echo "Nije proslo - kontroller";
            }
        }else{
            echo "Nisu poslati svi podaci";
        }
    }

    public function deleteProduct(){
        if(isset($_POST['id'])){
            $model = new Product($this->database);

            $product = $model->deleteProduct($_POST["id"]);
            $products = $model->getAllProductsWithAllnfoGrouped();
            if($product){
                $this->json($products);
                return true;
            }
        }
    }
}