<?php

namespace App\Controllers\Admin;

use Core\View;

class courseController
{
    public function index()
    {
        echo 'index method!';
    }

    public function part($slug, $id)
    {
//       return "slug => {$slug} id =>{$id}" ;
//        return var_dump($_GET['limit']) ;
        return view::renderView('front/part',[
            'id' =>$id,
            'slug' => $slug
        ]);
    }
}