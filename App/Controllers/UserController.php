<?php

namespace App\Controllers;

use Jenssegers\Blade\Blade;

class UserController
{

    private Blade $view;

    public function __construct()
    {
        $this->view = \Helper::getContainer('ViewManager')->getViewObject();

    }


    public function index()
    {
        return $this->view->render("pages/home");
    }

    public function login()
    {
        return $this->view->render("pages/login");
    }

    public function create()
    {
        return $this->view->render("pages/register");
    }
}