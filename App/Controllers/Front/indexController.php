<?php
namespace App\Controllers\Front;
use Core\View;
class indexController
{
    public function index()
    {
        return View::renderView('front/index');
    }
}