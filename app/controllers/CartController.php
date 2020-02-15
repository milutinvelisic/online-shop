<?php

namespace app\controllers;

// use app\models\Movie;

class CartController extends Controller
{

    public function cartPage()
    {
        $this->loadView("cart");
    }

    // public function movies() {
    //     $model = new Movie();

    //     $movies = $model->getAllMovies();   

    //     $this->json($movies);
    // }

}
