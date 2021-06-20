<?php 

    $controller = isset($_GET['controller']) ? ucfirst($_GET['controller']).'Controller' : 'DefaultController';
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';
    // tạo instance của controller
    require_once("../controller/$controller.php");
    
    $controllerInstance = new $controller();

    echo $controllerInstance->$action();


?>