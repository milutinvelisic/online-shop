<?php

use app\models\Database;
use app\controllers\HomeController as Home;
use app\controllers\ShopController as Shop;
use app\controllers\ProductController as Product;
use app\controllers\LoginController as Login;
use app\controllers\RegisterController as Register;
use app\controllers\CartController as Cart;
use app\controllers\ContactController as Contact;
use app\controllers\CheckoutController as Checkout;
use app\controllers\AboutController as About;
use app\controllers\AdminController as AdminHome;
use app\controllers\AdminUserController as AdminUser;
use app\controllers\AdminProductController as AdminProduct;
use app\controllers\OrderController as Order;

$db = new Database(SERVER, DATABASE, USERNAME, PASSWORD);

if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
        case "shop":
            $homeController = new Shop($db);
            $homeController->shopPage();
            break;
        case "filterShop" :
            $homeController = new Shop($db);
            $homeController->filterAll();
            break;
        case "product":
            $homeController = new Product($db);
            $homeController->productPage();
            break;
        case "productPrice":
            $homeController = new Product($db);
            $homeController->getOneProduct();
            break;
        case "productCart":
            $homeController = new Product($db);
            $homeController->getOneProductWithAllInfo();
            break;
        case "inertOrder":
            $homeController = new Order($db);
            $homeController->InsertOrder();
            break;
        case "login":
            $homeController = new Login($db);
            $homeController->loginPage();
            break;
        case "register" :
            $homeController = new Register($db);
            $homeController->registerPage();
            break;
        case "doregister" :
            $homeController = new Register($db);
            $homeController->register();
            break;
        case "logout":
            $loginController = new Login($db);
            $loginController->doLogout();
            break;
        case "dologin":
            $loginController = new Login($db);
            $loginController->doLogin();
            break;
        case "cart":
            $homeController = new Cart();
            $homeController->cartPage();
            break;
        case "contact":
            $homeController = new Contact();
            $homeController->contactPage();
            break;
        case "checkout":
            $homeController = new Checkout();
            $homeController->checkoutPage();
            break;
        case "about":
            $homeController = new About();
            $homeController->aboutPage();
            break;
        case "adminHome":
            if(isset($_SESSION['user']) && $_SESSION['user']->idRole == 1){
                $homeController = new AdminHome($db);
                $homeController->adminHomePage();
            }else{
                $homeController = new Home($db);
                $homeController->homePage();
            }
            break;
        case "adminUsers":
            if(isset($_SESSION['user']) && $_SESSION['user']->idRole == 1){
            $homeController = new AdminUser($db);
            $homeController->adminUserPage();
            }else{
                $homeController = new Home($db);
                $homeController->homePage();
            }
            break;
        case "adminProducts":
            if(isset($_SESSION['user']) && $_SESSION['user']->idRole == 1){
                $homeController = new AdminProduct($db);
                $homeController->adminProductPage();
            }else{
                $homeController = new Home($db);
                $homeController->homePage();
            }
            break;
        case "insertUser":
            if(isset($_SESSION['user']) && $_SESSION['user']->idRole == 1){
            $homeController = new AdminUser($db);
            $homeController->insertUser();
            }else{
                $homeController = new Home($db);
                $homeController->homePage();
            }
            break;
        case "insertProduct":
            if(isset($_SESSION['user']) && $_SESSION['user']->idRole == 1){
                $homeController = new AdminProduct($db);
                $homeController->insertProduct();
            }else{
                $homeController = new Home($db);
                $homeController->homePage();
            }
            break;
        case "deleteUser":
            if(isset($_SESSION['user']) && $_SESSION['user']->idRole == 1){
            $homeController = new AdminUser($db);
            $homeController->deleteUser();
            }else{
                $homeController = new Home($db);
                $homeController->homePage();
            }
            break;
        case "deleteProduct":
            if(isset($_SESSION['user']) && $_SESSION['user']->idRole == 1){
                $homeController = new AdminProduct($db);
                $homeController->deleteProduct();
            }else{
                $homeController = new Home($db);
                $homeController->homePage();
            }
            break;
        default:
            $homeController = new Home($db);
            $homeController->homePage();
            break;
    }
} else {
    $homeController = new Home($db);
    $homeController->homePage();
}