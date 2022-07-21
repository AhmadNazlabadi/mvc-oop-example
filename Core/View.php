<?php

namespace Core;
class View
{
    public static function renderView($view, $args = [])
    {
        extract($args, EXTR_SKIP);
        $file = "../resources/{$view}.php";
        if (is_readable($file)) {
            require $file;
        } else {
            echo 'Page Not Found - 404';
        }
    }
}