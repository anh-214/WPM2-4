<?php 
    if ( $_SERVER['REQUEST_URI'] == "/php-laravel/WPM2-4/views/index.php")
    {
        header('location:index.php?controller=student&action=index');
    }
    
    $controller = isset($_GET['controller']) ? ucfirst($_GET['controller']).'Controller' : 'DefaultController';
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';
    
    require_once("../controller/$controller.php");
    
    $controllerInstance = new $controller();

    echo $controllerInstance->$action();


?>

