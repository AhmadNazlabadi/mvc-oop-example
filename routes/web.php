<?php
use Core\Router;
$router = new Router();
$router->setRoute('/' , ['uses'=>'indexController->index','namespace'=>'Front']);
$router->setRoute('/contact' , ['uses'=>'contactController->index','namespace'=>'Front']);
//$router->setRoute('/courses' , ['uses'=>'CourseController->index','id'=>'2','x'=>'y']);
//$router->setRoute('/courses' , 'Admin\CourseController->index');
$router->setRoute('/courses' , ['uses'=>'CourseController->index','namespace'=>'Admin']);
$router->setRoute('/parts/{id}' , ['uses'=>'partController->index','namespace'=>'Admin\Part']);
$router->setRoute('/courses/php-mvc', 'CourseController->course');
$router->setRoute('/contactus', 'contactusController->index');
$router->setRoute('/courses/php-mvc/part/3', 'CourseController->part');
$router->setRoute('/courses/{slug}', 'CourseController->course');
$router->setRoute('/courses/{slug}/part/{id}', ['uses'=>'courseController->part','namespace'=>'Admin']);


