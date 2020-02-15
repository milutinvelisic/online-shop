<?php

namespace app\controllers;

// use app\models\Movie;

class AboutController extends Controller
{

    public function aboutPage()
    {
        $this->loadView("about");
    }
}
