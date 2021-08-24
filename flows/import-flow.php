<?php

    // ACCESS ENV FILES
    require $_SERVER['DOCUMENT_ROOT'].'/gforce3/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'].'\gforce3');
    $dotenv->load();

    $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
    
    // ADD MODELS TO SCOPE
    require_once $root . '/models/import-model.php';

    // ADD ALL CUSTOM FLOWS

?>