<?php

namespace app\controllers;

// use app\models\Movie;

class ContactController extends Controller
{

    public function contactPage()
    {
        $this->loadView("contact");
    }

    // public function movies() {
    //     $model = new Movie();

    //     $movies = $model->getAllMovies();   

    //     $this->json($movies);
    // }

}
