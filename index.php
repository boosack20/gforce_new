<?php 
    // CREATE OR ACCESS SESSION
    session_start();
    
    // ACCESS ENV FILES
    require $_SERVER['DOCUMENT_ROOT'].'/gforce3/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
    date_default_timezone_set("Asia/Manila");

    // SET DEFAULT VARIABLE FOR TESTING
    $_SESSION['user']['user_id'] = 1;
    
    // ADD TO SCOPE
    // require_once $root . '/library/functions.php';
    // require_once $root . '/library/route-helpers.php';
    require_once $root . '/models/import-model.php';
    
    // Create Router instance
    $router = new \Bramus\Router\Router();

    // require_once 'middlewares.php';
    require_once 'router-auth.php';
    require_once 'router.php';
    require_once 'router-request.php';

    // Run it!
    $router->run();


?>