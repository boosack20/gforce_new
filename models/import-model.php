<?php

    // ACCESS ENV FILES
    require $_SERVER['DOCUMENT_ROOT'].'/gforce3/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'].'\gforce3');
    $dotenv->load();

    $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
    
    // ADD TO SCOPE
    require_once $root . '/library/connections.php';

    // ADD MODELS HERE
    require_once $root . '/models/auth-model.php';
    require_once $root . '/models/filechecker-model.php';
    require_once $root . '/models/class-model.php';

?>