<?php

namespace app\controllers;

// use app\models\Movie;

class CheckoutController extends Controller
{

    public function checkoutPage()
    {
        $this->loadView("checkout");
    }

    // public function movies() {
    //     $model = new Movie();

    //     $movies = $model->getAllMovies();   

    //     $this->json($movies);
    // }

}
