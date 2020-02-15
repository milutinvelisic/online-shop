<?php

namespace app\controllers;

// use app\models\Movie;

class HomeController extends Controller
{
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function homePage()
    {
        $this->loadView("home");
    }

    // public function movies() {
    //     $model = new Movie();

    //     $movies = $model->getAllMovies();   

    //     $this->json($movies);
    // }

}
