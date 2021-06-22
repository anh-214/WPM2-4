
<?php 
    if (!isset($_GET['controller']))
    {
        header('location:index.php?controller=faculty&action=index');
    }
    
    $controller = isset($_GET['controller']) ? ucfirst($_GET['controller']).'Controller' : 'DefaultController';
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';
    
    require_once("./controller/$controller.php");
    
    $controllerInstance = new $controller();

    echo $controllerInstance->$action();


?>
